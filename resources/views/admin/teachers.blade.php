<x-admin.layout>
    <x-slot:judul>{{$title}}</x-slot:judul>

    <x-admin.button data-modal-target="defaultModal" data-modal-toggle="defaultModal">
        Create New
    </x-admin.button>

    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" x-transition
            class="fixed top-20 right-4 z-50 p-4 bg-blue-600 text-white rounded-lg flex items-center justify-between shadow-lg max-w-md">
            <span>{{ session('success') }}</span>
            <button @click="show = false" class="ml-4 text-white hover:text-gray-200 font-bold text-xl">&times;</button>
        </div>
    @endif

    <div
        class="overflow-x-auto mt-6 rounded-xl shadow-2xl bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-gray-700">
        <table class="table-auto w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gradient-to-r from-blue-900 via-indigo-900 to-purple-900 text-blue-100">
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">No</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Name</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Subject</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Phone</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Address</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-300 divide-y divide-gray-700">
                @foreach($teacher as $t)
                    <tr class="hover:bg-gradient-to-r hover:from-gray-800 hover:to-gray-700 transition-all duration-300 hover:shadow-lg group">
                        <td class="px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $t->name }}</td>
                        <td class="px-6 py-4">{{ $t->subject->name }}</td>
                        <td class="px-6 py-4">{{ $t->phone }}</td>
                        <td class="px-6 py-4">{{ $t->address }}</td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <x-admin.button-update data-modal-target="editModal-{{ $t->id }}" data-modal-toggle="editModal-{{ $t->id }}" />
                                <x-admin.button-delete action="/dashboard/teacher/{{ $t->id }}" />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-admin.modal id="defaultModal" action="/dashboard/teacher">
        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher Name</label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                placeholder="Type teacher name" required>
        </div>

        <div class="mb-4">
            <label for="subject_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <select name="subject_id" id="subject_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                <option value="" disabled selected>-- Select Subject --</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
            <input type="text" name="phone" id="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                placeholder="Type phone number" required>
        </div>

        <div class="mb-4">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <textarea name="address" id="address" rows="3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                placeholder="Type address" required></textarea>
        </div>
    </x-admin.modal>

    @foreach($teacher as $t)
        <x-admin.modal-update id="editModal-{{ $t->id }}" action="/dashboard/teacher/{{ $t->id }}">
            <div class="mb-4">
                <label for="edit_name_{{ $t->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher Name</label>
                <input type="text" name="name" id="edit_name_{{ $t->id }}" value="{{ $t->name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="edit_subject_id_{{ $t->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                <select name="subject_id" id="edit_subject_id_{{ $t->id }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                    <option value="" disabled>-- Select Subject --</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ $t->subject_id == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="edit_phone_{{ $t->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" name="phone" id="edit_phone_{{ $t->id }}" value="{{ $t->phone }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="edit_address_{{ $t->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea name="address" id="edit_address_{{ $t->id }}" rows="3"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>{{ $t->address }}</textarea>
            </div>
        </x-admin.modal-update>
    @endforeach
</x-admin.layout>
