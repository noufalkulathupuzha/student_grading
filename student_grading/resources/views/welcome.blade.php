<x-landing>
    <div class="bg-gradient-to-b bg-gray-100 text-white">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-4xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <!-- College logo SVG -->
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- Your college logo SVG here -->
                        </svg>
                    </div>
                </header>

                <main class="mt-6">
                    <div class="flex items-center justify-center h-screen">
                        <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-md border border-gray-200">
                            <img class="mx-auto h-16 mb-6"
                                src="https://imresizer.com/_next/image?url=/images/upload-how-to.webp&w=3840&q=75"
                                alt="Logo">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to the Student Grading System
                            </h2>
                            <nav class="-mx-3 mb-6">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="text-blue-500 hover:text-blue-600 mr-4 transition duration-300">
                                            Dashboard
                                        </a>
                                    @else
                                        <p class="text-sm text-gray-600 mb-2">Sign in or create an account to access grades.
                                        </p>

                                        <a href="{{ route('login') }}"
                                            class="block w-full bg-blue-500 text-white rounded-md py-3 text-center mb-2 hover:bg-blue-600 transition duration-300">
                                            Log in
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="block w-full bg-gray-800 text-white rounded-md py-3 text-center hover:bg-gray-700 transition duration-300">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                @endif
                            </nav>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm">
                    © {{ date('Y') }} International College
                </footer>
            </div>
        </div>
    </div>
    <!-- Background image -->
    <img class="absolute -left-20 top-0 w-full max-h-full object-cover"
        src="https://unsplash.com/photos/pencils-on-blue-table-7ACuHoezUYk/download?force=true&w=2400" />
</x-landing>
