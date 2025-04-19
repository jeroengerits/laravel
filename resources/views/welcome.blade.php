<x-layouts.html title="Welcome" description="You are on the right track">
    <div class="p-3">
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="flex text-xl items-center gap-2 text-blue-500 hover:text-blue-800 hover:underline cursor-pointer" 
            >
                <x-fluentui-cube-24-o class="size-8" />
            {{ config('app.name', 'Laravel') }}
            </button>
            <div x-show="open" x-cloak>
                Starter Kit
            </div>
        </div>
    </div>
</x-layouts.html>