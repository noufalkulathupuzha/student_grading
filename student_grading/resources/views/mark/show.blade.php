<x-app-layout>
    @if(isset($message))
    <div id="session-message-popup" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg">
            
            <h2>{{ $message }}</h2>
        </div>
    </div>
    @endif
    <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
            <div class="mr-3">
                <a href="{{ route('student.show', $student) }}" class="text-red-500 hover:text-red-600">
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="5" y1="12" x2="11" y2="18" />
                        <line x1="5" y1="12" x2="11" y2="6" />
                    </svg>
                </a>
            </div>
            <div>
                <span class="text-lg font-semibold">Student Name:</span>
                <span>{{ $student->name }}</span>
            </div>
        </div>
        <div class="flex items-center">
            <span class="text-lg font-semibold">Total Marks:</span>
            <span>{{ $total }}</span>
            <a href="{{ route('marks.edit', ['mark' => $marks->id]) }}"
                class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</a>
        </div>
    </div>
    <div class="flex justify-center mt-8">
        <table class="border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-blue-500 text-white"> <!-- Updated color classes -->
                <tr>
                    <th class="px-6 py-3">Subject</th>
                    <th class="px-6 py-3">Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4">English</td>
                    <td class="px-6 py-4 text-right">{{ $marks->english }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Malayalam</td>
                    <td class="px-6 py-4 text-right">{{ $marks->malayalam }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Maths</td>
                    <td class="px-6 py-4 text-right">{{ $marks->maths }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Chemistry</td>
                    <td class="px-6 py-4 text-right">{{ $marks->chemistry }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
