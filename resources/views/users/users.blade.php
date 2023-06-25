<x-app-layout>

    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4"> 
          <div class="flex flex-row items-center justify-between">
            <p class="my-3 text-lg font-bold">Users</p>
          
            <div class="flex flex-row items-center justify-between">
              {{-- <a href="#" class="inline-block px-4 py-2 mb-3 mr-2 text-sm leading-5 text-center border rounded text-slate-100 bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:ring-0 hover:border-slate-600 focus:bg-slate-600 focus:border-slate-600 focus:outline-none focus:ring-0">
                <i class="mr-1 text-base bx bx-arrow-back"></i>Cancel
              </a> --}}
      
              <!-- trigger submit delete -->
              <Link href="/users/create">
              <button type="submit" form="user-setting" data-original-title="Delete" class="inline-block px-4 py-1 mb-3 text-sm leading-5 text-center border rounded text-slate-100 bg-cyan-500 border-cyan-500 hover:text-white hover:bg-cyan-600 hover:ring-0 hover:border-cyan-600 focus:bg-cyan-600 focus:border-cyan-600 focus:outline-none focus:ring-0">
                <i class="mr-1 text-base bx bx-save"></i>Create
              </button>
            </Link>
            </div>
          </div>
        </div> 
      </div>

    <x-splade-table :for="$users" search-debounce="500" striped class="mt-10">

      <x-splade-cell is_admin as="$user">
        @if ($user->is_admin == 1)
            Yes
        @else
         No
        @endif
        
      </x-splade-cell>
   

        <x-splade-cell actions as="$user" >
            <Link href="/users/{{ $user->slug }}" class="p-2 px-4 text-white bg-blue-600 rounded-lg"> View </Link>
            <Link href="/users/{{ $user->slug }}/edit" class="p-2 px-4 ml-2 text-white bg-yellow-600 rounded-lg"> Edit </Link>
        <x-splade-form action="{{ route('users.destroy',$user) }}" method="delete" confirm>
            <x-splade-submit label="Delete" class="ml-2  text-white bg-red-500" />
        </x-splade-form>
        </x-splade-cell>
        </x-splade-table>
</x-app-layout>