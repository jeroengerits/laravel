<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('essentials.aggressive_prefetching')) {
            Vite::useWaterfallPrefetching(concurrency: 10);
            Vite::useAggressivePrefetching();
            Vite::usePrefetchStrategy('waterfall', ['concurrency' => 1]);
        }

        if (config('essentials.auto_eager_loading')) {
            Model::automaticallyEagerLoadRelationships();
        }

        if (config('essentials.strict_model')) {
            Model::shouldBeStrict();
        }

        if (config('essentials.date_immutable')) {
            Date::use(CarbonImmutable::class);
        }

        if (config('essentials.prohibit_destructive_commands')) {
            DB::prohibitDestructiveCommands(
                app()->isProduction(),
            );
        }

        if (config('essentials.prevent_stray_requests') && app()->runningUnitTests()) {
            Http::preventStrayRequests();
        }

        if (config('essentials.force_https') && config('app.env') === 'production') {
            URL::forceHttps();
        }
    }
}
