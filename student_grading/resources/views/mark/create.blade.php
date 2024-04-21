<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="border rounded border-gray-300 m-5 p-5 w-96 flex items-center justify-center">
            <form method="POST" action="{{ route('marks.store') }}" class="w-full">
                @csrf
                <input type="hidden" value="{{ $student_id }}" name="student">
                <!-- English -->
                <div class="mb-4">
                    <x-input-label for="english" :value="__('English')" />
                    <x-text-input id="english" class="block mt-1 w-full" type="number" name="english" :value="old('english')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('english')" class="mt-2" />
                </div>
                <!-- Malayalam -->
                <div class="mb-4">
                    <x-input-label for="malayalam" :value="__('Malayalam')" />
                    <x-text-input id="malayalam" class="block mt-1 w-full" type="number" name="malayalam" :value="old('malayalam')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('malayalam')" class="mt-2" />
                </div>
                <!-- Maths -->
                <div class="mb-4">
                    <x-input-label for="maths" :value="__('Maths')" />
                    <x-text-input id="maths" class="block mt-1 w-full" type="number" name="maths" :value="old('maths')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('maths')" class="mt-2" />
                </div>
                <!-- Chemistry -->
                <div class="mb-4">
                    <x-input-label for="chemistry" :value="__('Chemistry')" />
                    <x-text-input id="chemistry" class="block mt-1 w-full" type="number" name="chemistry"
                        :value="old('chemistry')" required autofocus />
                    <x-input-error :messages="$errors->get('chemistry')" class="mt-2" />
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('student.show', $student_id) }}" class="text-gray-500 hover:text-blue-500 mr-4">Cancel</a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
