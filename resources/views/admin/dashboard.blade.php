<x-admin.layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 flex flex-col items-center justify-center bg-white dark:bg-gray-800 shadow hover:shadow-lg transition-shadow duration-300">
            <p class="text-gray-400 dark:text-gray-300 uppercase tracking-wide">Total Students</p>
            <p class="text-4xl font-extrabold text-gray-800 dark:text-white">{{ $totalstudent }}</p>
        </div>
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 flex flex-col items-center justify-center bg-white dark:bg-gray-800 shadow hover:shadow-lg transition-shadow duration-300">
            <p class="text-gray-400 dark:text-gray-300 uppercase tracking-wide">Total Guardians</p>
            <p class="text-4xl font-extrabold text-gray-800 dark:text-white">{{ $totalguardian }}</p>
        </div>
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 flex flex-col items-center justify-center bg-white dark:bg-gray-800 shadow hover:shadow-lg transition-shadow duration-300">
            <p class="text-gray-400 dark:text-gray-300 uppercase tracking-wide">Total Classroom</p>
            <p class="text-4xl font-extrabold text-gray-800 dark:text-white">{{ $totalclassroom }}</p>
        </div>
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 flex flex-col items-center justify-center bg-white dark:bg-gray-800 shadow hover:shadow-lg transition-shadow duration-300">
            <p class="text-gray-400 dark:text-gray-300 uppercase tracking-wide">Total Subjects</p>
            <p class="text-4xl font-extrabold text-gray-800 dark:text-white">{{ $totalsubject }}</p>
        </div>
    </div>
</x-admin.layout>
