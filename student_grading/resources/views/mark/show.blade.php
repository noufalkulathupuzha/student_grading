<x-app-layout>
    <div class="flex justify-center align-items-center">
        <div class="mr-5">
            <a href="{{ route('student.show', $student) }}">
                <svg class="h-8 w-8 text-red-500" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <line x1="5" y1="12" x2="11" y2="18" />
                    <line x1="5" y1="12" x2="11" y2="6" />
                </svg>
            </a>
        </div>
        <div>
            <span>Student Name : </span><span class="font-bold">{{ $student->name }}</span>
            <span>Total Marks: </span><span class="font-bold">{{ $total }}</span>
        </div>
        <table class="table border border-separate border-red-400 m-5 rounded p-5">
            <thead class="table-header-group">
                <tr class="table-row border-b-2">
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>English</td>
                    <td class="text-right">{{ $marks->english }}</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Malayalam</td>
                    <td class="text-right">{{ $marks->malayalam }}</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Maths</td>
                    <td class="text-right">{{ $marks->maths }}</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Chemistry</td>
                    <td class="text-right">{{ $marks->chemistry }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
