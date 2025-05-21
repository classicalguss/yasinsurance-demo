<x-layouts.app :title="__('team')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="mt-6 ms-2">

                <iframe
                        src="{{ config('services.yasmina.base_url') }}/request-sme-insurance"
                        style="max-width: 1300px; width: 100%"
                        height="800"
                        title="Bootstrap Insurance Demo"
                        sandbox="allow-forms allow-scripts allow-same-origin allow-modals allow-popups"
                ></iframe>
            </div>

        </div>
    </div>
</x-layouts.app>
