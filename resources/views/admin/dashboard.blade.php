<x-admin.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8 mb-10">

        <div class="group relative rounded-3xl bg-gradient-to-br from-blue-600/90 to-indigo-800/90 p-[1px] shadow-xl hover:shadow-2xl transition-all duration-500">
            <div class="absolute inset-0 rounded-3xl bg-blue-500/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
            <div class="relative rounded-3xl bg-gray-900/80 backdrop-blur-xl p-6 h-44 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-blue-300">Students</p>
                        <p class="text-4xl font-extrabold text-white mt-1">{{ $totalstudent }}</p>
                    </div>
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-500/20 text-blue-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5V8l-5-5H7a2 2 0 00-2 2v15h5M9 20h6M9 10h6M9 14h6"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full h-1 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600"></div>
            </div>
        </div>

        <div class="group relative rounded-3xl bg-gradient-to-br from-emerald-600/90 to-teal-800/90 p-[1px] shadow-xl hover:shadow-2xl transition-all duration-500">
            <div class="absolute inset-0 rounded-3xl bg-emerald-500/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
            <div class="relative rounded-3xl bg-gray-900/80 backdrop-blur-xl p-6 h-44 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-emerald-300">Guardians</p>
                        <p class="text-4xl font-extrabold text-white mt-1">{{ $totalguardian }}</p>
                    </div>
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-emerald-500/20 text-emerald-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 14a4 4 0 10-8 0M12 10a4 4 0 100-8 4 4 0 000 8z"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full h-1 rounded-full bg-gradient-to-r from-emerald-500 to-teal-600"></div>
            </div>
        </div>

        <div class="group relative rounded-3xl bg-gradient-to-br from-purple-600/90 to-fuchsia-800/90 p-[1px] shadow-xl hover:shadow-2xl transition-all duration-500">
            <div class="absolute inset-0 rounded-3xl bg-purple-500/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
            <div class="relative rounded-3xl bg-gray-900/80 backdrop-blur-xl p-6 h-44 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-purple-300">Classrooms</p>
                        <p class="text-4xl font-extrabold text-white mt-1">{{ $totalclassroom }}</p>
                    </div>
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-500/20 text-purple-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M5 10v10h14V10M9 3h6v4H9z"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full h-1 rounded-full bg-gradient-to-r from-purple-500 to-fuchsia-600"></div>
            </div>
        </div>

        <div class="group relative rounded-3xl bg-gradient-to-br from-orange-600/90 to-red-800/90 p-[1px] shadow-xl hover:shadow-2xl transition-all duration-500">
            <div class="absolute inset-0 rounded-3xl bg-orange-500/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
            <div class="relative rounded-3xl bg-gray-900/80 backdrop-blur-xl p-6 h-44 flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-orange-300">Subjects</p>
                        <p class="text-4xl font-extrabold text-white mt-1">{{ $totalsubject }}</p>
                    </div>
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-orange-500/20 text-orange-400">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6l7 4-7 4-7-4 7-4zM5 14l7 4 7-4"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full h-1 rounded-full bg-gradient-to-r from-orange-500 to-red-600"></div>
            </div>
        </div>

    </div>
</x-admin.layout>
