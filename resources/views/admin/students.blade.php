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

    <div class="overflow-x-auto mt-6 rounded-xl shadow-2xl bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-gray-700">
        <table class="table-auto w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gradient-to-r from-blue-900 via-indigo-900 to-purple-900 text-blue-100">
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">No</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Name</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Gender</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Email</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Birthdate</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Classroom</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Address</th>
                    <th class="border-b-2 border-blue-700 px-6 py-3 text-left font-bold uppercase tracking-wide text-xs">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-300 divide-y divide-gray-700">
                @foreach($students as $s)
                    <tr class="hover:bg-gradient-to-r hover:from-gray-800 hover:to-gray-700 transition-all duration-300 hover:shadow-lg group">
                        <td class="px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $s->name }}</td>
                        <td class="px-6 py-4">{{ $s->gender }}</td>
                        <td class="px-6 py-4">{{ $s->email }}</td>
                        <td class="px-6 py-4">{{ $s->birthdate }}</td>
                        <td class="px-6 py-4">{{ $s->classroom->name ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $s->address }}</td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <x-admin.button-update data-modal-target="editModal-{{ $s->id }}" data-modal-toggle="editModal-{{ $s->id }}" />
                                <x-admin.button-delete action="/dashboard/student/{{ $s->id }}" />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-admin.modal id="defaultModal" action="/dashboard/student">
        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <select name="gender" id="gender" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="" disabled selected>-- Select Gender --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthdate</label>
            <input type="date" name="birthdate" id="birthdate" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
            <select name="classroom_id" id="classroom_id" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="" disabled selected>-- Select Classroom --</option>
                @foreach($classroom as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
            <textarea name="address" id="address" rows="3" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
        </div>
    </x-admin.modal>

    @foreach($students as $s)
        <x-admin.modal-update id="editModal-{{ $s->id }}" action="/dashboard/student/{{ $s->id }}">
            <div class="mb-4">
                <label for="edit_name_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="edit_name_{{ $s->id }}" value="{{ $s->name }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>

            <div class="mb-4">
                <label for="edit_gender_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select name="gender" id="edit_gender_{{ $s->id }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="Male" {{ $s->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $s->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="edit_email_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="edit_email_{{ $s->id }}" value="{{ $s->email }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>

            <div class="mb-4">
                <label for="edit_birthdate_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthdate</label>
                <input type="date" name="birthdate" id="edit_birthdate_{{ $s->id }}" value="{{ $s->birthdate }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>

            <div class="mb-4">
                <label for="edit_classroom_id_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
                <select name="classroom_id" id="edit_classroom_id_{{ $s->id }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @foreach($classroom as $c)
                        <option value="{{ $c->id }}" {{ $s->classroom_id == $c->id ? 'selected' : '' }}>
                            {{ $c->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="edit_address_{{ $s->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea name="address" id="edit_address_{{ $s->id }}" rows="3" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $s->address }}</textarea>
            </div>
        </x-admin.modal-update>
    @endforeach
</x-admin.layout>
