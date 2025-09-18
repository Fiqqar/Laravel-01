<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <h1 class="mb-4 font-bold text-3xl text-black">Student Page</h1>

    <div class="overflow-x-auto mt-6 rounded-lg shadow-lg bg-white">
        <table class="table-auto w-full border-collapse min-w-max">
            <thead>
                <tr class="bg-gradient-to-r from-blue-100 to-blue-300 text-blue-900">
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">No</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Name</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Gender</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Email</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Birthdate</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Class</th>
                    <th class="border-b-2 border-blue-300 px-6 py-3 text-left font-semibold">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border-t px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="border-t px-6 py-4">{{ $student['name'] }}</td>
                        <td class="border-t px-6 py-4">{{ $student['gender'] }}</td>
                        <td class="border-t px-6 py-4">{{ $student['email'] }}</td>
                        <td class="border-t px-6 py-4">{{ $student['birthdate'] }}</td>
                        <td class="border-t px-6 py-4">{{ $student['grade'] }}</td>
                        <td class="border-t px-6 py-4">{{ $student['address'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>