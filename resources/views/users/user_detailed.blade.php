<x-app-layout>
    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4"> 
          <div class="flex flex-row items-center justify-between">
            <p class="my-3 text-lg font-bold">User Details</p>
          
            <div class="flex flex-row items-center justify-between">
                <Link href="/users">
                    <button type="submit" form="user-setting" data-original-title="Delete" class="inline-block px-4 ml-2 py-1 mb-3 text-sm text-center  rounded text-slate-100 bg-cyan-500">
                      <i class="mr-1 text-base bx bx-save"></i>Back
                    </button>
                  </Link>
      
        
              <x-splade-form action="{{ route('users.destroy',$user) }}" method="delete" confirm>
                <x-splade-submit label="Delete" class="inline-block px-4 ml-2 py-1 mb-3 text-sm text-center  rounded text-slate-100 bg-red-500" />
            </x-splade-form>
            </div>
          </div>
        </div> 
      </div>

    <div class="flex flex-wrap justify-center gap-4 p-6 font-serif text-lg">
     
            
        <a href="#"
        class="flex-grow w-full px-3 py-2 text-black bg-gray-100 border-l-8 border-green-500  rounded-md md:w-5/12 lg:w-3/12">
       
        <div class="flex flex-row items-center justify-between">
       <div> <h5 class="mb-2 font-bold tracking-tight text-gray-900 text-m ">
            {{ $user->name }}
            </h5>
        </div>
     
        </div>
    <p class="font-normal">
        
      
  
    </p>
        <div class="pt-1 text-sm font-thin text-gray-900">
            <span>{{ $user->email }}</span>
        </div>
    </a>

      
      
     
    </div>

   

 
</x-app-layout>