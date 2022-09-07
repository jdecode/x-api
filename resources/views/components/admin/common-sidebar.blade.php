<div class="flex-1 px-0 space-y-1 flex flex-col justify-between h-full">
    <ul
        class="space-y-2 py-2">
        <li title="Dashboard">
            <x-nav-link
                class="group"
                :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                <span class="material-icons-outlined text-2xl pr-2">dashboard</span>
                <span x-cloak x-show="!sidebarCollapsed">{{ __('Dashboard') }}</span>
            </x-nav-link>
        </li>
        <li
            class="
                border border-l-0 border-r-0 border-b-0 border-t-1 border-gray-500/50
                w-full flex items-center hover:bg-gray-300 dark:hover:bg-gray-700 cursor-pointer p-3 pl-6
            "
            onclick="toggleDark()"
            title="Toggle theme">
            <span class="material-icons-outlined text-3xl pr-2">brightness_6</span>
            <span
                x-cloak x-show="!sidebarCollapsed">
                Toggle theme
            </span>
        </li>
        <li
            class="flex items-center justify-between cursor-pointer p-3 pl-6 hover:bg-gray-300 dark:hover:bg-gray-700"
            title="Logout">
            <form
                method="POST"
                action="{{ route('admin.logout') }}"
                class="w-full min-w-full ">
                @csrf
                <button
                    type="submit"
                    x-data
                    class="px-1 flex items-center">
                    <span class="material-icons-outlined text-2xl pr-2">logout</span>
                    <span x-cloak x-show="!sidebarCollapsed">
                                {{ __('Log Out') }}
                            </span>
                </button>
            </form>
        </li>
    </ul>
    <div>
        <div
            class="
                py-1 pt-4 pl-6
                flex items-center cursor-pointer
                border border-l-0 border-r-0 border-b-0 border-t-1 border-gray-500/50
                block md:hidden
            "
             x-cloak
             @click="showMobileSidebar = false"
            >
            <span class="material-icons-outlined text-xl">close</span>
            <span class="pl-2 text-xl">Close</span>
        </div>
        <div
            class="py-4 pl-6
                flex items-center cursor-pointer
                border border-l-0 border-r-0 border-b-0 border-t-1 border-gray-500/50
                hidden md:block"
            x-cloak
            x-show="!sidebarCollapsed"
            @click="sidebarCollapsed = true"
            title="Shift + left-arrow to collapse / Shift + right-arrow to expand"
            >
            <span class="material-icons-outlined text-xl">arrow_back</span>
            <span class="pl-2 text-xl">Collapse</span>
        </div>
        <div
            class="py-4 pl-6
                flex items-center cursor-pointer
                border border-l-0 border-r-0 border-b-0 border-t-1 border-gray-500/50
                hidden md:block
            " x-cloak x-show="sidebarCollapsed" @click="sidebarCollapsed = false">
            <span
                class="material-icons-outlined text-xl"
            >arrow_forward</span>
        </div>
    </div>
</div>
