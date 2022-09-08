<div
    x-data="{
        openAuthDropdown: false
    }"
    class="
        sticky top-0 z-10 flex-shrink-0 flex h-16
        bg-white/25 dark:bg-gray-900/50
        border border-1 border-t-0 border-l-0 border-r-0 border-gray-500/25
        backdrop-blur-md
    ">
    <button
        type="button"
        @click="showMobileSidebar = true"
        class="px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-fnl-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
            <form class="hidden w-full flex md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
                </div>
            </form>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            @auth
                <div class="ml-3 relative">
                    <div>
                        <button
                            @click="openAuthDropdown = !openAuthDropdown"
                            class="flex items-center text-base font-medium focus:outline-none transition duration-150 ease-in-out">
                            <span>{{ Auth::user()->name }}</span>
                            <span class="ml-1">
                                <span class="material-icons-outlined">expand_more</span>
                            </span>
                        </button>
                    </div>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div
                        x-data
                        x-cloak
                        x-show="openAuthDropdown"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-100 dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu">

                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button
                                type="submit"
                                x-data
                                class="
                                    block text-sm leading-5 focus:outline-none transition duration-150 ease-in-out
                                    w-full rounded-md hover:bg-gray-300 dark:hover:bg-gray-700
                                    p-2 px-4 pt-2
                                    text-left
                                    "
                                >
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>
