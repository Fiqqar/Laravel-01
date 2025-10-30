<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <x-admin.sidelink href="/dashboard" :active="request()->is('dashboard')">
                    <svg class="w-6 h-6 text-blue-500 transition duration-75 group-hover:scale-110" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 2a8 8 0 1 1-6.32 12.906l1.495-1.327A6 6 0 1 0 16 10a1 1 0 1 1 2 0 8 8 0 0 1-8 8z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink href="/dashboard/student" :active="request()->is('dashboard/student')">
                    <svg class="w-6 h-6 text-green-500 transition duration-75 group-hover:scale-110" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V20h14v-3.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V20h6v-3.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    <span class="ml-3">Students</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink href="/dashboard/classroom" :active="request()->is('dashboard/classroom')">
                    <svg class="w-6 h-6 text-yellow-500 transition duration-75 group-hover:scale-110"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v16l4-4h12c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                    </svg>
                    <span class="ml-3">Classrooms</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink href="/dashboard/guardian" :active="request()->is('dashboard/guardian')">
                    <svg class="w-6 h-6 text-purple-500 transition duration-75 group-hover:scale-110"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    <span class="ml-3">Guardians</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink href="/dashboard/teacher" :active="request()->is('dashboard/teacher')">
                    <svg class="w-6 h-6 text-red-500 transition duration-75 group-hover:scale-110" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4S8 5.79 8 8s1.79 4 4 4zM6 20v-1c0-2.21 3.58-4 8-4s8 1.79 8 4v1H6z" />
                    </svg>
                    <span class="ml-3">Teachers</span>
                </x-admin.sidelink>
            </li>
            <li>
                <x-admin.sidelink href="/dashboard/subject" :active="request()->is('dashboard/subject')">
                    <svg class="w-6 h-6 text-indigo-500 transition duration-75 group-hover:scale-110"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18 2H6a2 2 0 0 0-2 2v16l4-4h10a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="ml-3">Subjects</span>
                </x-admin.sidelink>
            </li>
        </ul>
    </div>
</aside>
