<x-app-layout>




    <div class="p-0 mx-auto md:p-2">
        <!-- row -->
        <div class="flex flex-row flex-wrap mb-2">
            <div class="flex-shrink w-full max-w-full px-3 md:px-4">
                <div class="flex flex-row items-center justify-between">
                    <p class="my-3 text-lg font-bold">Dashboard</p>
              
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="flex flex-row flex-wrap">
            <div class="flex-shrink w-full max-w-full lg:w-1/5 xl:w-1/5">
                <!-- row -->
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink w-1/2 max-w-full px-3 mb-6 md:px-4 lg:w-full">
                        <div
                            class="h-full p-4 rounded shadow-lg sm:p-6 bg-gradient-to-r from-cyan-500 via-cyan-500 to-cyan-600 text-slate-200 shadow-cyan-100/10 dark:shadow-cyan-700/10">
                            <div class="relative">
                                <h4 class="mb-2">Total</h4>
                                <h3 class="mb-4 text-2xl font-bold text-slate-100">
                               {{ $today }}
                                </h3>
                                <div class="flex flex-row items-center justify-between">


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex-shrink w-1/2 max-w-full px-3 mb-6 md:px-4 lg:w-full">
                        <div
                            class="h-full p-4 rounded shadow-lg sm:p-6 bg-gradient-to-r from-yellow-500 via-yellow-500 to-yellow-600 text-slate-200 shadow-cyan-100/10 dark:shadow-cyan-700/10">
                            <div class="relative">
                                <h4 class="mb-2">Open</h4>
                                <h3 class="mb-4 text-2xl font-bold text-slate-100">{{ $open }}
                                </h3>
                                <div class="flex flex-row items-center justify-between">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink w-1/2 max-w-full px-3 mb-6 md:px-4 lg:w-full">
                        <div
                            class="h-full p-4 rounded shadow-lg sm:p-6 bg-gradient-to-r from-green-500 via-green-500 to-green-600 text-slate-200 shadow-cyan-100/10 dark:shadow-cyan-700/10">
                            <div class="relative">
                                <h4 class="mb-2">Completed</h4>
                                <h3 class="mb-4 text-2xl font-bold text-slate-100">
                                    {{ $completed }}
                                </h3>
                                <div class="flex flex-row items-center justify-between">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink w-full max-w-full lg:w-2/3 xl:w-3/4">
                <!-- row -->
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink w-full max-w-full px-3 mb-6 md:px-4">
                        <div
                            class="h-full p-6 bg-white rounded shadow-lg dark:bg-slate-300 shadow-cyan-100/10 dark:shadow-cyan-700/10">
                            <div class="relative">
                                <h2 class="mb-2 text-center">Today's Todo list</h2>

                                <x-splade-table :for="$todos" search-debounce="500" striped class="mt-2" />

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    </div>


</x-app-layout>
