@props([
    'helper_icons' => false,
    'theme_switcher' => true
])
@php
    $theme_switcher = filter_var($theme_switcher ?? true, FILTER_VALIDATE_BOOLEAN);
@endphp
<div>
    <div class="focus:outline-none p-1 ">
        <div class="flex items-center min-w-6 mr-2 ">
            @if(config('app.env') == 'local' && $helper_icons)
                <a
                    href="https://laravel.com/docs"
                    target="_blank"
                    class="px-1 mr-2"
                    title="{{ __('Laravel docs [new tab]') }}">
                    <span class="">
                        <svg
                            viewBox="0 0 50 50"
                            class="w-7 h-7 fill-red-600"
                            stroke-width="2"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                                class="fill-primary"/></svg>
                    </span>
                </a>
                <a
                    href="https://tailwindcss.com/docs"
                    target="_blank"
                    class="px-1 mr-2"
                    title="{{ __('TailwindCSS docs [new tab]') }}">
                    <span class="">
                        <svg
                            viewBox="0 0 50 30"
                            class="h-8 w-8 text-slate-900 dark:text-white">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M25.517 0C18.712 0 14.46 3.382 12.758 10.146c2.552-3.382 5.529-4.65 8.931-3.805 1.941.482 3.329 1.882 4.864 3.432 2.502 2.524 5.398 5.445 11.722 5.445 6.804 0 11.057-3.382 12.758-10.145-2.551 3.382-5.528 4.65-8.93 3.804-1.942-.482-3.33-1.882-4.865-3.431C34.736 2.92 31.841 0 25.517 0zM12.758 15.218C5.954 15.218 1.701 18.6 0 25.364c2.552-3.382 5.529-4.65 8.93-3.805 1.942.482 3.33 1.882 4.865 3.432 2.502 2.524 5.397 5.445 11.722 5.445 6.804 0 11.057-3.381 12.758-10.145-2.552 3.382-5.529 4.65-8.931 3.805-1.941-.483-3.329-1.883-4.864-3.432-2.502-2.524-5.398-5.446-11.722-5.446z"
                                fill="#38bdf8">
                            </path>
                        </svg>
                    </span>
                </a>
                <a
                    href="https://alpinejs.dev/directives/data"
                    target="_blank"
                    class="px-1 mr-2"
                    title="{{ __('Alpine.js docs [new tab]') }}">
                    <span class="">
                        <svg
                            viewBox="10 -40 120 140"
                            class="w-10 h-10"
                            preserveAspectRatio="xMidYMid meet"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#77C1D2" d="m105.325 1.708l30.092 29.961l-30.092 29.96l-30.093-29.96z"/><path fill="#2D3441" d="M30.093 1.708L92.479 63.82H32.293L0 31.669z"/>
                        </svg>
                    </span>
                </a>
                <a
                    href="{{ url('/telescope') }}"
                    target="_blank"
                    class="px-1 mr-2"
                    title="{{ __('Telescope [new tab]') }}">
                    <span class="">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 80 80"
                            class="fill-indigo-600 h-7 w-7">
                            <path
                                d="M0 40a39.87 39.87 0 0 1 11.72-28.28A40 40 0 1 1 0 40zm34 10a4 4 0 0 1-4-4v-2a2 2 0 1 0-4 0v2a4 4 0 0 1-4 4h-2a2 2 0 1 0 0 4h2a4 4 0 0 1 4 4v2a2 2 0 1 0 4 0v-2a4 4 0 0 1 4-4h2a2 2 0 1 0 0-4h-2zm24-24a6 6 0 0 1-6-6v-3a3 3 0 0 0-6 0v3a6 6 0 0 1-6 6h-3a3 3 0 0 0 0 6h3a6 6 0 0 1 6 6v3a3 3 0 0 0 6 0v-3a6 6 0 0 1 6-6h3a3 3 0 0 0 0-6h-3zm-4 36a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 28a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                class="fill-primary"></path></svg>
                    </span>
                </a>
            @endif
            @if($theme_switcher)
                <div onclick="toggleDark()" title="Toggle dark/light mode : Shift+D" class="cursor-pointer pl-2 pt-1">
                    <span class="material-icons-outlined text-3xl text-gray-500">brightness_6</span>
                </div>
            @endif
        </div>
    </div>
</div>
<script>
    function toggleDark() {
        document.documentElement.classList.toggle('dark');
        localStorage.dark = !JSON.parse(localStorage.dark);
    }

    if (localStorage.dark !== 'undefined') {
        if(localStorage.dark === 'true') {
            document.documentElement.classList.add('dark');
            localStorage.dark = true;
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.dark = false;
        }
    }
    document.addEventListener('keydown', (event) => {
        if(event.shiftKey && (event.key === 'd' || event.key === 'D')) {
            toggleDark();
        }
    });
</script>
