<x-app-layout>
    <div class="p-6">

        <div class="create-student flex justify-center items-center mt-4 mb-4">
            <a href="{{ route('student.create') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow">
                Create Student
            </a>
        </div>
        

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($students as $student)
                <div class="bg-white rounded-lg shadow-md">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">{{ $student->name }}</h3>
                        <p class="text-gray-600">{{ $student->registration_number }}</p>
                    </div>
                    <div class="flex justify-between px-6 pb-6">
                        <a href="{{ route('student.edit', $student) }}" class="text-blue-500 hover:underline">Edit</a>
                        <a href="{{ route('student.show', $student) }}" class="text-blue-500 hover:underline">View</a>
                        <form action="{{ route('student.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline focus:outline-none">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="p-2">
            {{ $students->links() }}
        </div>

    </div>
</x-app-layout>
