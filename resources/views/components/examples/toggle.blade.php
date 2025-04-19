<div x-data="{ enabled: false }">
    <button @click="enabled = !enabled" class="cursor-pointer flex items-center gap-2 text-sm">
        <span x-show="!enabled" class="flex items-center gap-2" x-cloak>
            <x-fluentui-dismiss-24-o class="size-8 text-red-500" />
        </span>
        <span x-show="enabled" class="flex items-center gap-2" x-cloak>
            <x-fluentui-checkmark-24-o class="size-8 text-green-500" />
        </span>
    </button>
</div>