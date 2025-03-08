<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Preview</title>
    <style>
        .mb-10 {
            margin-bottom: 40px;
            /* Adjust based on your needs */
        }
    </style>
</head>

<body>


    <div class="mb-10">
        <span>USER INFORMATION</span>

    </div>


    <table class="p-2 bg-white border border-gray-200 font-custom">
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

</body>

</html>
