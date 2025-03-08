<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}



    <livewire:user-role />

    <div class="p-10 mt-24 ml-56 text-justify text-white ">

        <h3 class="mb-4 font-bold">PROFILE INFORMATION</h3>

        <div class="flex flex-col mt-10 gap-y-4">



            <img class="inline-block rounded-full size-10 ring-2 ring-white"
                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="">

            <span>Name: {{ $name }}</span>
            <span>Email: {{ $email }}</span>
            <span>Role: {{ $role }}</span>

        </div>


    </div>
</div>
