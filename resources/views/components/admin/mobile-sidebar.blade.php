<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div
    class="relative z-40 md:hidden"
    role="dialog"
    aria-modal="true"
    @keyup.escape.window="showMobileSidebar = false"
    xmlns:x-transition="http://www.w3.org/1999/xhtml">
    <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75 backdrop-blur-sm"
         x-show="showMobileSidebar"
         x-transition:enter="transform transition ease-in-out duration-75"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transform transition ease-in-out duration-75"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    ></div>

    <div class="fixed inset-0 flex z-40" x-show="showMobileSidebar">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-300 dark:bg-gray-800"
             x-show="showMobileSidebar"
             @click.outside="showMobileSidebar=false"
        >
            <!--
              Close button, show/hide based on off-canvas menu state.

              Entering: "ease-in-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in-out duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="absolute top-0 right-0 -mr-12 pt-2" @click="showMobileSidebar = false">
                <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <span class="material-icons-outlined text-gray-300 dark:text-gray-300">close</span>
                </button>
            </div>

            <div class="flex-shrink-0 flex items-center px-4">
                <a href="{{ route('admin.dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current"></x-application-logo>
                </a>
            </div>
            <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <x-admin.common-sidebar></x-admin.common-sidebar>
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>
