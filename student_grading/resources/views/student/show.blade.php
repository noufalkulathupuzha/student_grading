<x-app-layout>
    <div class="p-6">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Student Details</h2>
        <h2 class="text-xl font-semibold mb-4 text-gray-800">
            Total Mark:
            <span class="bg-blue-500 text-white px-3 py-1 rounded">{{ $totalMark }}</span>
        </h2>
        <div class="flex justify-center">
            <div class="bg-white shadow-md rounded-lg w-96">
                <div class="p-6">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Name:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->name }}</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Course:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->course }}</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Branch:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->branch }}</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Address:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->address }}</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Date of Birth:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->date_of_birth }}</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Registration Number:</label>
                        <span class="text-blue-600 font-semibold">{{ $student->registration_number }}</span>
                    </div>
                </div>
                <div class="flex justify-between px-6 pb-6">
                    <a href="{{ route('student.index') }}"
                        class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Cancel</a>
                    <a href="{{ route('student.edit', $student) }}"
                        class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Edit</a>
                </div>
                <div class="flex justify-center space-x-4 pb-6">
                    
                    @if (isset($mark))
                        <a href="{{ route('marks.show', $mark) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md transition-colors duration-300 ease-in-out">Show
                            Marks</a>
                            @else
                            <a href="{{ route('marks.create', ['student' => $student]) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md transition-colors duration-300 ease-in-out">Add
                                Marks</a>
                    @endif
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
