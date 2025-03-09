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
                    LIVE SEARCH
                </div>

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
                <div class="flex flex-col w-full gap-y-8">
                    <input @keyup="search_open =true" @click="search_open =true"
                        wire:model.live.debounce.950ms='searchName' type="text"
                        class="w-full h-10 p-1 mt-10 text-black rounded-sm" placeholder="Search name">
                </div>



                @if (sizeof($nameresults) > 0)
                    <div class="flex items-center justify-center w-full p-1 bg-white cursor-pointer ">

                        <div class="">
                            @foreach ($this->nameresults as $nameresult)
                                <div x-show="search_open" @click.outside="search_open = false" class="w-full">
                                    <div @click="search_open = false" class="p-2 cursor-pointer w-96 hover:bg-gray-300"
                                        wire:click='selectName({{ $nameresult->id }})'>
                                        <span class="w-full">{{ $nameresult->name }}
                                        </span>
                                    </div>


                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="text-white">Profile Information:</div>
            <div class="text-white">Name: {{ $name }}</div>
            <div class="text-white">Email: {{ $email }}</div>
            <div class="text-white">Role: {{ $role }} </div>
        </div>
    </div>

</div>
