<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite
            </a>
            <div class="w-full bg-white rounded-lg shadow sm:max-w-md dark:bg-gray-800">
                <div class="p-6 space-y-4 sm:p-8">
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">
                        Sign in to your account
                    </h1>
            @if ($errors->any())
                <p class="text-red-500 text-sm">
                    {{ $errors->first() }}
                </p>
            @endif
                    <form class="space-y-4" method="POST" action="/login">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Your email
                            </label>
                            <input
                                type="email"
                                name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="name@company.com"
                                required
                            >
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password
                            </label>
                            <input
                                type="password"
                                name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                required
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 rounded-lg text-sm px-5 py-2.5"
                        >
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
