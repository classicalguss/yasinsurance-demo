<x-layouts.app :title="__('team')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="mt-6 ms-2">
                <h4 class="text-lg font-medium">Add member</h4>
                <livewire:team-manager />

            </div>

        </div>
    </div>
</x-layouts.app>
