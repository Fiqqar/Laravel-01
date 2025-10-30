<x-admin.layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 flex items-center justify-center">
            <p class="text-gray-500">Total Students</p>
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 flex items-center justify-center">
            <p class="text-gray-500">Total Guardians</p>
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 flex items-center justify-center">
            <p class="text-gray-500">Total Classroom</p>
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 flex items-center justify-center">
            <p class="text-gray-500">Total Subjects</p>
        </div>
    </div>
</x-admin.layout>