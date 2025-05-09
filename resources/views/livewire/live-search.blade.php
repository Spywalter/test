<div class="w-screen bg-gray-800 h-sreen">
    {{-- The Master doesn't talk, he acts. --}}



    <div class="flex justify-center h-screen">
        <a href="/">
            <div class="mt-5 hover:cursor-pointer">
                <span class="px-2 py-1 mt-5 ml-5 text-black bg-white rounded-md"> <i class="fa-solid fa-arrow-left"></i>
                    return</span>
            </div>
        </a>



        <div class="flex flex-col w-96 gap-y-10">
            <div x-data="{ search_open: false }" x-cloak>
                <div class="mt-20 text-2xl font-bold text-center text-red-600">
                    SEARCH DATA
                </div>

                <div class="flex flex-row w-full mt-5 text-black gap-x-10 ">

                    <input type="text" wire:model.live.debounce.950ms='search' class="w-full h-8 p-1"
                        placeholder="Search User">

                </div>

                {{-- <div class="flex flex-col items-end text-white">
                    <button wire:click='searhName'
                        class="w-24 px-2 py-1 mt-5 font-bold text-black bg-gray-200 rounded-md">Submit</button>
                </div> --}}


                <div class="w-full text-black">



                    <table class="w-full p-2 mt-5 bg-white border border-gray-200 font-custom">
                        <thead>
                            <tr>
                                <th class="p-2 text-lg bg-white border border-gray-200">NO.</th>
                                <th class="p-2 text-lg bg-white border border-gray-200">NAME</th>
                                <th class="p-2 text-lg bg-white border border-gray-200">EMAIL</th>
                                <th class="p-2 text-lg bg-white border border-gray-200">ROLE</th>




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



                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>



            </div>

        </div>
    </div>

</div>
