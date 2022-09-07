<footer
    class="
        w-full max-w-container mx-auto
        border-t border-gray-300 dark:border-gray-800
        py-10 text-center
        text-sm text-gray-500
        flex flex-col items-center justify-center space-y-2
    "
>
    <p>
        <a
            class="hover:underline flex items-center justify-center relative"
            title="GitHub repo [new tab]"
            href="https://github.com/jdecode/the-dark-light"
            target="_blank">
            <span>{{ config('app.name', 'Laravel') }}</span>
            <span
                title=" {{ config('app.name', 'Laravel') }}"
                class="text-tdl-500 material-icons-outlined absolute right-0 top-0 -mr-8 -mt-3 text-4xl">bolt</span>
            <span
                title=" {{ config('app.name', 'Laravel') }}"
                class="text-tdl-500 material-icons-outlined absolute right-0 top-0 -mr-8 -mt-3 text-4xl animate-ping opacity-25">bolt</span>
        </a>
    </p>
    <p>
        <a href="https://github.com/jdecode" target="_blank" class="font-bold underline underline-offset-2">
            <span class="text-tdl-500">jdecode</span>
        </a>
    </p>
    <p class="mt-2 clear-both">
        Built with
        <span class="text-tdl-500 text-lg">&hearts;</span>
        using
        <a href="https://laravel.com" target="_blank" class="underline">Laravel</a>
        and
        <a href="https://tailwindcss.com" target="_blank" class="underline">Tailwind CSS</a>
    </p>
</footer>