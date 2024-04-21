<x-app-layout>

    <h2 class="text-2xl font-semibold mb-6">Update Student: {{ $student->name }}</h2>

    <div class="flex justify-center">
        <div class="bg-white shadow-md rounded-lg w-96">
            <form action="{{ route('student.update', $student) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="name" value="{{ $student->name }}" required
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="course">Course:</label>
                    <input type="text" id="course" name="course" value="{{ $student->course }}" required
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="branch">Branch:</label>
                    <input type="text" id="branch" name="branch" value="{{ $student->branch }}" required
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="dob">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}"
                        required
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="address">Address:</label>
                    <textarea id="address" name="address" rows="4"
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>{{ $student->address }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="registration_number">Registration
                        Number:</label>
                    <input type="text" id="registration_number" name="registration_number"
                        value="{{ $student->registration_number }}" required
                        class="w-full border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('student.index') }}"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center focus:outline-none focus:shadow-outline">Cancel</a>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center focus:outline-none focus:shadow-outline">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
