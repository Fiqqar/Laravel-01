<x-admin.layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <div
        class="overflow-x-auto mt-6 rounded-xl shadow-2xl bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-gray-700">
        <table class="table-auto w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gradient-to-r from-blue-900 via-indigo-900 to-purple-900 text-blue-100">
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">
                        No</th>
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">
                        Name</th>
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-right font-bold uppercase tracking-wide text-xs">
                        Subject</th>
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-right font-bold uppercase tracking-wide text-xs">
                        Phone</th>
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-right font-bold uppercase tracking-wide text-xs">
                        Address</th>
                    <th
                        class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">
                        Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-300 divide-y divide-gray-700">
                @foreach($teacher as $t)
                    <tr
                        class="hover:bg-gradient-to-r hover:from-gray-800 hover:to-gray-700 transition-all duration-300 hover:shadow-lg group">
                        <td class="px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $t->name }}</td>
                        <td class="px-6 py-4">{{ $t->subject->name }}</td>
                        <td class="px-6 py-4">{{ $t->phone }}</td>
                        <td class="px-6 py-4">{{ $t->address }}</td>
                        <td class="px-6 py-4 text-right">
                            <div
                                class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <x-admin.button-update data-modal-target="editModal-{{ $t->id }}"
                                    data-modal-toggle="editModal-{{ $t->id }}" />

                                <x-admin.button-delete action="/dashboard/teacher/{{ $t->id }}" />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>