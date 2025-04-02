<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Employees List</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">First Name</th>
                        <th class="py-3 px-4 text-left">Last Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($employees as $employee)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $employee->first_name }}</td>
                            <td class="py-3 px-4">{{ $employee->last_name }}</td>
                            <td class="py-3 px-4">{{ $employee->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>