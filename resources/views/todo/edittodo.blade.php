<x-app-layout>

    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4">
            <div class="flex flex-row items-center justify-between">
                <p class="my-3 text-lg font-bold">   Editing Todo </p>

                <div class="flex flex-row items-center justify-between">
               
                    <Link href="/todos">
                    <button type="submit" form="user-setting" data-original-title="Delete"
                        class="inline-block px-4 py-1 mb-3 text-sm leading-5 text-center border rounded text-slate-100 bg-cyan-500 border-cyan-500 hover:text-white hover:bg-cyan-600 hover:ring-0 hover:border-cyan-600 focus:bg-cyan-600 focus:border-cyan-600 focus:outline-none focus:ring-0">
                        <i class="mr-1 text-base bx bx-save"></i>Back
                    </button>
                    </Link>

                </div>
            </div>
        </div>
    </div>

 



        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block w-3/4 py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden  md:rounded-lg">



                    <x-splade-form :default="$todo" action="{{ route('todos.update',$todo) }}" method="PUT">

                    <div class="w-full h-full px-8 py-6 bg-white rounded-lg shadow-lg columns-2">
       

                        <div class="w-full p-6 bg-white ">
                              <x-splade-input name="title" class="w-full " label="Title" />
              
                              <x-splade-textarea name="description" autosize :label="__('description')" />
              
                              
                          </div>
              
                          <div class="w-full p-6 bg-white">
              
                              <x-splade-select name="category" :label="__('Category')" :options="$category" />
                              <x-splade-input min="{{ date('Y-m-d') }}" name="StartDate" :label="__('StartDate')" date time />
              
                    
              
                         
                          </div>
              
              
                          <x-splade-submit class="inline-block px-4 mx-2 mb-3 ml-8 text-sm leading-5 text-center bg-green-500 border rounded text-slate-100 hover:text-white hover:ring-0 focus:bg-cyan-600" />
                      </x-splade-form>
              
                  </div>
                </div>
            </div>
        </div>
   




</x-app-layout>