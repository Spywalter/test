<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="w-screen h-screen p-5 bg-gray-900">

        <div class="flex flex-row items-center justify-center w-full gap-x-20">
            <div class="flex flex-col p-10 mt-20 bg-gray-300 rounded w-96 h-96">


                <h1 class="mt-8 text-3xl text-center ">TODO APP</h1>

                <form wire:submit="create">
                    <div class="flex flex-row items-center justify-center w-full mt-10 text-md gap-x-2">
                        <label for="">Task:</label>
                        <input class="w-full p-1" type="text" wire:model="task">

                    </div>
                    <div>
                        @error('task')
                            <span class="text-xs text-red-800">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-row items-center justify-center w-full mt-5 text-md gap-x-2 ">
                        <label for="">Date:</label>
                        <input wire:model="date" class="w-full p-1" type="date">
                    </div>
                    <div>
                        @error('date')
                            <span class="text-xs text-red-800">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-row items-start w-full mt-10 text-sm gap-x-4 ">
                        <button type="submit"
                            class="w-full px-4 py-2 text-white bg-red-800 hover:bg-red-600 rounded-xl">ADD
                            TODO</button>
                        <button wire:click="cancel"
                            class="w-full px-4 py-2 text-white bg-yellow-800 hover:bg-yellow-600 rounded-xl">RESET</button>
                    </div>

                </form>

            </div>





            {{-- Information --}}

            <div class="flex flex-col w-1/2 p-10 mt-20 overflow-scroll bg-gray-300 rounded h-96">

                <h2 class="mb-8 text-2xl font-bold text-center">List of Todo</h2>

                @if (session('success'))
                    <span x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                        class="mb-2 font-bold text-center text-green-600">{{ session('success') }}</span>
                @endif
                @if (session('deleted'))
                    <span x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                        class="mb-2 font-bold text-center text-red-600">{{ session('deleted') }}</span>
                @endif

                @if (session('update'))
                    <span x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                        class="mb-2 font-bold text-center text-blue-600">{{ session('update') }}</span>
                @endif
                <table class="text-center border-2 border-red-600 border-solid">

                    <tr class="border-2 border-black border-solid">
                        <th class="border-2 border-black border-solid">Task</th>
                        <th class="border-2 border-black border-solid">Date</th>
                        <th class="border-2 border-black border-solid">Action</th>
                    </tr>

                    @foreach ($todos as $todo)
                        <tr class="border-2 border-black border-solid">
                            <td class="p-2 border-2 border-black border-solid">
                                @if ($edittingID == $todo->id)
                                    <div class="flex flex-row items-center justify-center gap-x-1 ">
                                        <label for="">Task:</label><input type="text"
                                            wire:model.live="edittingTask">
                                        <label for="">Date:</label><input type="date"
                                            wire:model.live="edittingDate">
                                    </div>
                                    <div class="flex flex-row items-center justify-end mt-1 text-xs gap-x-1 "><span
                                            wire:click='update()'
                                            class="px-2 py-1 text-white bg-green-700 rounded-md cursor-pointer ">Update</span>
                                        <span wire:click='cancel()'
                                            class="px-2 py-1 text-white bg-red-700 rounded-md cursor-pointer">Cancel</span>
                                    </div>
                                @else
                                    {{ $todo->task }}
                                @endif

                            </td>
                            <td class="border-2 border-black border-solid">{{ $todo->date }}</td>
                            <td class="border-2 border-black border-solid"><button
                                    wire:click="edit({{ $todo->id }})" class="mr-5"><i
                                        class="fa-solid fa-pen"></i></button><button
                                    wire:confirm="Are you sure you want to delete?"
                                    wire:click="delete({{ $todo->id }})"><i class="fa-solid fa-trash"></i></button>
                            </td>

                        </tr>
                    @endforeach


                </table>

                <div class="flex flex-col mt-5">
                    {{ $todos->links() }}
                </div>





            </div>
        </div>


    </div>


</div>
