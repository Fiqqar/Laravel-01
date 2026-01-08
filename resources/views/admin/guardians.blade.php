<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" x-transition
            class="fixed top-20 right-4 z-50 p-4 bg-blue-600 text-white rounded-xl shadow-xl flex items-center gap-4">
            <span class="text-sm font-medium">{{ session('success') }}</span>
            <button @click="show = false" class="text-lg leading-none">&times;</button>
        </div>
    @endif

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mt-6">
        <x-admin.button data-modal-target="defaultModal" data-modal-toggle="defaultModal">
            Create New
        </x-admin.button>

        <form method="GET" class="w-full md:max-w-sm">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>

                <input
                    type="search"
                    name="search"
                    value="{{ request('search') }}"
                    class="block w-full ps-9 pe-24 py-2.5 bg-gray-800 border border-gray-700 text-white text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search name, job, email, phone"
                >

                <button
                    type="submit"
                    class="absolute end-1.5 top-1.5 bottom-1.5 px-4 text-xs font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-lg"
                >
                    Search
                </button>
            </div>
        </form>
    </div>

    <div class="overflow-x-auto mt-6 rounded-2xl bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-gray-700 shadow-2xl">
        <table class="w-full text-sm border-collapse">
            <thead>
                <tr class="bg-gradient-to-r from-blue-900 via-indigo-900 to-purple-900 text-blue-100">
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Job</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Address</th>
                    <th class="px-6 py-3 text-right text-xs font-semibold uppercase">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-700 text-gray-300">
                @forelse($guardian as $g)
                    <tr class="hover:bg-gray-800 transition group">
                        <td class="px-6 py-4 font-medium">
                            {{ $guardian->firstItem() + $loop->index }}
                        </td>
                        <td class="px-6 py-4">{{ $g->name }}</td>
                        <td class="px-6 py-4">{{ $g->job }}</td>
                        <td class="px-6 py-4">{{ $g->phone }}</td>
                        <td class="px-6 py-4">{{ $g->email }}</td>
                        <td class="px-6 py-4 max-w-xs truncate">{{ $g->address }}</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                                <x-admin.button-update
                                    data-modal-target="editModal-{{ $g->id }}"
                                    data-modal-toggle="editModal-{{ $g->id }}"
                                />
                                <x-admin.button-delete action="/dashboard/guardian/{{ $g->id }}" />
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-10 text-center text-gray-400">
                            No guardian found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{ $guardian->links() }}
        </div>
    </div>

    <x-admin.modal id="defaultModal" action="/dashboard/guardian">
        <div class="grid grid-cols-1 gap-4">
            <input type="text" name="name" placeholder="Name" required class="form-input">
            <input type="text" name="job" placeholder="Job" required class="form-input">
            <input type="text" name="phone" placeholder="Phone" required class="form-input">
            <input type="email" name="email" placeholder="Email" required class="form-input">
            <textarea name="address" rows="3" placeholder="Address" required class="form-input"></textarea>
        </div>
    </x-admin.modal>

    @foreach($guardian as $g)
        <x-admin.modal-update id="editModal-{{ $g->id }}" action="/dashboard/guardian/{{ $g->id }}">
            <div class="grid grid-cols-1 gap-4">
                <input type="text" name="name" value="{{ $g->name }}" required class="form-input">
                <input type="text" name="job" value="{{ $g->job }}" required class="form-input">
                <input type="text" name="phone" value="{{ $g->phone }}" required class="form-input">
                <input type="email" name="email" value="{{ $g->email }}" required class="form-input">
                <textarea name="address" rows="3" required class="form-input">{{ $g->address }}</textarea>
            </div>
        </x-admin.modal-update>
    @endforeach
</x-admin.layout>
