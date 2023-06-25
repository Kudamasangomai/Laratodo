<x-app-layout>

    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4">
            <div class="flex flex-row items-center justify-between">
                <p class="my-3 text-lg font-bold">  {{ $todo->title}} </p>

                <div class="flex flex-row items-center justify-between">
              
                    <Link href="/todos">
                    <button type="submit" form="user-setting" 
                        class="inline-block px-4 py-1 mb-3 text-sm leading-5 text-center border rounded text-slate-100 bg-cyan-500 border-cyan-500 hover:text-white ">
                        <i class="mr-1 text-base bx bx-save"></i>Back
                    </button>
                    </Link>

                </div>
            </div>
        </div>
    </div>
  
    <div class="flex flex-wrap justify-center gap-4 p-6 font-serif text-lg">
     
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
            
            </div>
            <p class="font-normal">


                {{ $todo->description }}
            </p>
            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>{{ $todo->category }}</span>
            </div>
            <div class="border b"></div>
            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Created Date - {{ $todo->created_at }}</span>
            </div>

            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Action Date - {{ $todo->created_at }}</span>
            </div>
            <div class="pt-1 text-sm font-thin text-gray-900">
                <span>Created By - {{ $todo->user->name }}</span>
            </div>
            </a>
       



    </div>
<div class=" flex flex-row justify-start ml-8">

    <Link href="/todos/{{ $todo->id }}/edit">
        <button form="user-setting"
            class="px-4 py-1 mt-2  text-xs text-center border rounded text-white bg-cyan-500  ">
            <i class="mr-1 text-base bx bx-save"></i>Edit
        </button>
        </Link>

        <x-splade-form action="{{ route('todos.destroy',$todo) }}" method="delete" confirm>
            <x-splade-submit label="Delete" class="px-4 mt-2   text-xs text-center border rounded text-white bg-red-500" />
        </x-splade-form>

        <x-splade-form  action="{{ route('todos.completed',$todo) }}" method="PUT">
   
            <x-splade-submit label="Complete" class="px-4 mt-2   text-xs text-center border rounded text-white bg-green-500" />
        </x-splade-form>

</div>
    
    </x-app-layout>