<x-layouts.html title="Welcome" description="You are on the right track">
    <div class="p-3">
        <div x-data="{ open: false }">
            <button @click="open = !open" 
                class="text-blue-500 hover:underline cursor-pointer" 
                :class="{ 'text-green-500': open }"
            >
                Welcome to Laravel
            </button>
            <div x-show="open">
                This is a starter kit for Laravel.
            </div>
        </div>
    </div>
</x-layouts.html>