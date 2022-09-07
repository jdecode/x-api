<!-- Static sidebar for desktop -->
<div
    class="hidden md:flex md:flex-col md:fixed md:inset-y-0"
    x-bind:class="sidebarCollapsed ? 'md:w-20' : 'md:w-64'"
    xmlns:x-bind="http://www.w3.org/1999/xhtml">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow pt-5 bg-gray-300 dark:bg-gray-800 overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-1">
            <a href="{{ route('admin.dashboard') }}">
                <x-application-logo class="block h-10 w-auto fill-current"></x-application-logo>
            </a>
        </div>
        <div class="mt-5 flex-1 flex flex-col">
            <x-admin.common-sidebar></x-admin.common-sidebar>
        </div>
    </div>
</div>
