<div class="min-h-screen bg-gradient-to-b from-blue-400 to-cyan-300">
    @include('layouts.navigation')

    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open"
        :class="{ 'w-64 ml-0 md:w-20 sidebar-small ': open, 'w-64 -ml-64 md:ml-0': !(open) }"
        class="fixed z-40 w-64 h-screen transition-all duration-500 ease-in-out bg-slate-800 dark:bg-slate-900 text-slate-500">
        <div class="h-full overflow-y-auto sidebar-small-overflow scrollbars show">

            <Link href="/dashboard"
                class="inline-flex items-center px-8 py-3 mt-10 text-white rounded-lg hover:text-gray-400 focus:text-green-500 "
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span class="ml-2" x-show="menu">Dashboard</span>
            </Link>

            <Link href="/todos"
                class="inline-flex items-center px-8 py-3 text-white rounded-lg hover:text-gray-400 focus:text-green-500 "
                :class="{ 'justify-start': menu, 'justify-center': menu == false }">
            <svg stroke="currentColor" class="w-6 h-6" viewBox="0 0 640 512 " fill="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M139.61 35.5a12 12 0 0 0-17 0L58.93 98.81l-22.7-22.12a12 12 0 0 0-17 0L3.53 92.41a12 12 0 0 0 0 17l47.59 47.4a12.78 12.78 0 0 0 17.61 0l15.59-15.62L156.52 69a12.09 12.09 0 0 0 .09-17zm0 159.19a12 12 0 0 0-17 0l-63.68 63.72-22.7-22.1a12 12 0 0 0-17 0L3.53 252a12 12 0 0 0 0 17L51 316.5a12.77 12.77 0 0 0 17.6 0l15.7-15.69 72.2-72.22a12 12 0 0 0 .09-16.9zM64 368c-26.49 0-48.59 21.5-48.59 48S37.53 464 64 464a48 48 0 0 0 0-96zm432 16H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H208a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h288a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z">
                    </path>
                </g>
            </svg>
            <span class="ml-2" x-show="menu">Todos</span>
            </Link>
            @can('is_admin')
                <Link href="/users"
                    class="inline-flex items-center px-8 py-3 text-white rounded-lg hover:text-gray-400 focus:text-green-500 "
                    :class="{ 'justify-start': menu, 'justify-center': menu == false }">
                <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="w-6 h-6" viewBox="0 0 640 512 "
                    fill="#ffffff">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #1e3a8a
                        }
                    </style>
                    <path
                        d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                </svg>
                <span class="ml-2" x-show="menu">Users</span>
                </Link>
            @endcan



        </div>
    </nav>

    <!-- Page Content -->
    <div class="ml-60">
        <main class="pt-16 pb-20 lg:pb-10">
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6  border-b border-gray-200">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
