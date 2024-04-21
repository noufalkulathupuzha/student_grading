<x-app-layout>
    <div class="flex justify-between items-center m-2">
        <div class="flex items-center">
            <div class="mr-5">
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
                <span class="text-lg font-semibold">Student Name: </span><span class="font-semibold">{{ $student->name }}</span>
            </div>
        </div>
        <div>
            <span class="text-lg font-semibold">Total Marks: </span><span class="font-semibold">{{ $total }}</span>
        </div>
    </div>
    <div class="flex justify-center mt-8">
        <table class="border border-separate border-red-400 rounded p-5">
            <thead class="bg-red-500 text-white">
                <tr>
                    <th class="p-3">Subject</th>
                    <th class="p-3">Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">English</td>
                    <td class="p-3 text-right">{{ $marks->english }}</td>
                </tr>
                <tr>
                    <td class="p-3">Malayalam</td>
                    <td class="p-3 text-right">{{ $marks->malayalam }}</td>
                </tr>
                <tr>
                    <td class="p-3">Maths</td>
                    <td class="p-3 text-right">{{ $marks->maths }}</td>
                </tr>
                <tr>
                    <td class="p-3">Chemistry</td>
                    <td class="p-3 text-right">{{ $marks->chemistry }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
