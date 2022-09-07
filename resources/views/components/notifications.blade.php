<div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start"
     xmlns:x-transition="http://www.w3.org/1999/xhtml">
    <div class="w-full flex flex-col items-center space-y-4 pt-10">
        <div
            x-cloak
            x-show="notification_show"
            @keyup.escape.window="$dispatch('close-notification')"
            class="
                max-w-sm w-full
                border border-gray-500 border-px shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden
                bg-gray-300/50 dark:bg-gray-600/50
                backdrop-blur-sm
                delay-300
            "
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            >
            <div class="py-6 px-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <span class="material-icons-outlined text-green-500">check_circle</span>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100" x-text="notification_content"></p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button
                            type="button"
                            class="rounded-md inline-flex focus:outline-none"
                            @click="$dispatch('close-notification')"
                            >
                            <span class="sr-only">Close</span>
                            <span class="material-icons-outlined text-gray-500">close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
