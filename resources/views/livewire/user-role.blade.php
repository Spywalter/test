<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div class="w-screen h-screen p-0 bg-gray-900">




        <div
            class="fixed inset-0 top-0 left-0 z-50 flex items-center w-full h-20 p-10 bg-gray-900 border-b-2 border-green-700 border-solid">
            <h1 class="text-2xl font-bold text-white">User Role Management</h1>
        </div>
        <div class="flex flex-row">
            <div class="fixed inset-0 w-48 h-screen bg-gray-600 ">
                <div class="flex flex-col mt-20 list-none ">

                    @if ($role === 'admin')
                        <a wire:navigate href="/admin"
                            class="{{ request()->is('admin') ? 'sidebarlink active' : '' }} py-4 text-center text-white bg-gray-800 border-b-2 border-green-700 border-solid ">
                            <i class="mr-2 fa-solid fa-user-tie"></i> <span>ADMIN</span>



                        </a>
                    @endif


                    <a wire:navigate href="/user_profile"
                        class="{{ request()->is('user_profile') ? 'sidebarlink active' : '' }} py-4 text-center text-white bg-gray-800 border-b-2 border-green-700 border-solid ">
                        <i class="mr-2 fa-solid fa-truck-field"></i> <span>PROFILE</span>



                    </a>

                    <a wire:click="logout"
                        class="{{ request()->is('logout') ? 'sidebarlink active' : '' }} py-4 text-center text-white bg-gray-800 border-b-2 border-green-700 border-solid ">
                        <i class="mr-2 fa-solid fa-power-off"></i><span>LOGOUT</span>



                    </a>


                </div>

            </div>
