<x-app-layout>


    <div class="flex flex-row flex-wrap">
        <div class="flex-shrink w-full max-w-full px-3 md:px-4">
            <div class="flex flex-row items-center justify-between">
                <p class="my-3 text-lg font-bold ml-7">Add Users</p>

                <div class="flex flex-row items-center justify-between">

                    <Link href="/users">
                        <button type="submit" form="user-setting" data-original-title="Delete" class="inline-block px-4 ml-2 py-1 mb-3 text-sm text-center  rounded text-slate-100 bg-cyan-500">
                          <i class="mr-1 text-base bx bx-save"></i>Back
                        </button>
                      </Link>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block w-1/2 py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden  md:rounded-lg">


           



                    <x-splade-form action="{{ route('users.store') }}" method="POST">

                        <x-splade-input name="name" :label="__('Name')" />

                        <x-splade-input name="email" label="Email address" />

                        <x-splade-input type="password" name="password" label="password" />

                        <x-splade-select name="is_admin" label="Is Admin" placeholder="Select Role">

                            <option value="" disabled>Select User Role</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>

                        </x-splade-select>

                        @can('is_admin')
                            
                       
                        <x-splade-submit class="mt-4 bg-green-500 text-white" />
                        @endcan

                    </x-splade-form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
