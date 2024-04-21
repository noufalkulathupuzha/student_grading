<x-app-layout>
    <div class="p-6">
        <h2 class="text-2xl font-semibold mb-6">Student Registration Form</h2>
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <form action="{{ route('student.store') }}" method="POST" class="p-6">
                @csrf
                <div class="mb-4">
                    <label for="full_name" class="block text-gray-700 font-semibold mb-2">Full Name:</label>
                    <input type="text" id="full_name" name="name" required
                           class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="course" class="block text-gray-700 font-semibold mb-2">Course:</label>
                    <input type="text" id="course" name="course" required
                           class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="branch" class="block text-gray-700 font-semibold mb-2">Branch:</label>
                    <input type="text" id="branch" name="branch" required
                           class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="dob" class="block text-gray-700 font-semibold mb-2">Date of Birth:</label>
                    <input type="date" id="dob" name="date_of_birth" required
                           class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Address:</label>
                    <textarea id="address" name="address" rows="4" required
                              class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mb-4">
                    <label for="registration_number" class="block text-gray-700 font-semibold mb-2">Registration
                        Number:</label>
                    <input type="text" id="registration_number" name="registration_number" required
                           class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('student.index') }}"
                       class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center focus:outline-none focus:shadow-outline">Cancel</a>
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center focus:outline-none focus:shadow-outline">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
