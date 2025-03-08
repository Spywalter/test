<div>



    <livewire:user-role />
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="p-10 mt-24 ml-56 text-justify text-white ">

        <h3 class="mb-4 font-bold">ADMIN PAGE</h3>
        <table class="w-full text-left ">

            <tr class="w-full">
                <th class="p-2 border border-slate-300 ">Name</th>
                <th class="p-2 border border-slate-300 ">Email</th>
                <th class="p-2 border border-slate-300 ">Role</th>
                <th class="p-2 border border-slate-300 ">Action</th>
            </tr>


            @foreach ($users as $user)
                <tr>
                    <td class="p-2 border border-slate-300 ">{{ $user->name }}</td>
                    <td class="p-2 border border-slate-300 ">{{ $user->email }}</td>
                    <td class="p-2 border border-slate-300 ">{{ $user->role }}</td>
                    <td class="p-2 border border-slate-300">
                        <div class="flex flex-row gap-x-4">
                            <i class="fa-solid fa-pen" style="color:green;"></i> <i class="fa-solid fa-trash "
                                style="color:red"></i>

                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</div>
