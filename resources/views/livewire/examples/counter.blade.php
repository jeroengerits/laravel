<div class="flex items-center gap-4">
    <button wire:click="decrement" class="cursor-pointer opacity-35 hover:opacity-60">
        <x-fluentui-subtract-circle-24-o class="size-8" />
    </button>
    <div class="text-center text-xl font-bold font-monopx-2">{{ $count }}</div>
    <button wire:click="increment" class="cursor-pointer opacity-35 hover:opacity-60">
        <x-fluentui-add-circle-24-o class="size-8" />
    </button>
</div>