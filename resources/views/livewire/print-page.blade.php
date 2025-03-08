<div class="w-screen h-screen p-1">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <a href="/">
        <div class="mt-5 hover:cursor-pointer">
            <span class="px-2 py-1 mt-5 ml-5 text-white bg-gray-800 rounded-md"> <i class="fa-solid fa-arrow-left"></i>
                return</span>
        </div>
    </a>

    <div class="flex flex-col items-center justify-center w-full mt-40 overflow-x-auto gap-y-10 ">

        <span class="text-2xl font-bold text-green-600">Click Print Icon</span>


        <table class="p-2 bg-white border border-gray-200 font-custom">
            <thead>
                <tr>
                    <th class="p-2 text-lg bg-white border border-gray-200">NO.</th>
                    <th class="p-2 text-lg bg-white border border-gray-200">NAME</th>
                    <th class="p-2 text-lg bg-white border border-gray-200">EMAIL</th>
                    <th class="p-2 text-lg bg-white border border-gray-200">ROLE</th>
                    <th class="p-2 text-lg bg-white border border-gray-200">ACTION</th>



                </tr>
            </thead>
            <tbody>

                <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-200">

                    @foreach ($users as $user)
                        <td class="p-2 text-base border border-gray-200">{{ $loop->index + 1 }}
                        </td>
                        <td class="p-2 text-base border border-gray-200">


                            {{ $user->name }}
                        </td>

                        <td class="p-2 text-base border border-gray-200">
                            {{ $user->email }}
                        </td>

                        <td class="p-2 text-base border border-gray-200">
                            {{ $user->role }}
                        </td>

                        <td class="p-2 text-base border border-gray-200 ">
                            <a href="/download-pdf/{{ $user->id }}" class="hover:cursor-pointer" target="_blank">
                                <div class="flex items-center justify-center ">
                                    <i class="fa-solid fa-print"></i>
                                </div>
                            </a>
                        </td>


                </tr>
                @endforeach


            </tbody>
        </table>



    </div>
</div>
