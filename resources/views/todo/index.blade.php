<x-app-layout>


    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4">
            <div class="flex flex-row items-center justify-between">
                <p class="my-3 text-lg font-bold">My Todo List</p>

                <div class="flex flex-row items-center justify-between">
                    {{-- <a href="#" class="inline-block px-4 py-2 mb-3 mr-2 text-sm leading-5 text-center border rounded text-slate-100 bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:ring-0 hover:border-slate-600 focus:bg-slate-600 focus:border-slate-600 focus:outline-none focus:ring-0">
                <i class="mr-1 text-base bx bx-arrow-back"></i>Cancel
              </a> --}}

                    <!-- trigger submit delete -->
                    <Link href="/todos/create">
                    <button type="submit" form="user-setting"
                        class="inline-block px-4 py-1 mb-3 text-sm leading-5 text-center border rounded text-slate-100 bg-cyan-500 border-cyan-500 hover:text-white hover:bg-cyan-600 hover:ring-0 hover:border-cyan-600 focus:bg-cyan-600 focus:border-cyan-600 focus:outline-none focus:ring-0">
                        <i class="mr-1 text-base bx bx-save"></i>Create
                    </button>
                    </Link>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-wrap justify-center gap-4 p-6 font-serif text-lg">
        @forelse ($todos as $todo)
            @if ($todo->status == 'open')
                <a href="#"
                    class="flex-grow w-full px-3 py-2 text-black bg-gray-100 border-l-8   border-red-500    rounded-md md:w-5/12 lg:w-3/12">
                @else
                    <a href="#"
                        class="flex-grow w-full px-3 py-2 text-black bg-gray-100 border-l-8   border-green-500  rounded-md md:w-5/12 lg:w-3/12">
            @endif
            <div class="flex flex-row items-center justify-between">
                <div>
                    <h5 class="mb-2 font-bold tracking-tight text-gray-900 text-m ">
                        {{ $todo->title }}
                    </h5>
                </div>
                <div class="flex justify-start">
                    <Link href="/todos/{{ $todo->id }}">

                    <svg xmlns="http://www.w3.org/2000/svg" height="0.75em" fill="#0616c9" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                    </svg>
                    </Link>
                    <Link href="/todos/{{ $todo->id }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0616c9" class="ml-2 " height="0.75em"
                        viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                    </svg>
                    </Link>

                    {{-- <Link href="/todos/{{ $todo->id }}/completed">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#0616c9" class="ml-2 " height="0.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                    </Link> --}}







                </div>
            </div>
            <p class="font-normal">


                {!! Str::words($todo->description, 10) !!}
            </p>
            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>{{ $todo->category }}</span>
            </div>
            <div class="border b"></div>
            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Created Date - {{ $todo->created_at }}</span>
            </div>

            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Action Date - {{ $todo->StartDate }}</span>
            </div>

            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Created By - {{ $todo->user->name }}</span>
            </div>
            </a>
        @empty
            <div>
                <p class="text-center">Your have No Todo List. Click the Create Button and start Saving your to do list
                </p>
            </div>
        @endforelse



    </div>

</x-app-layout>
