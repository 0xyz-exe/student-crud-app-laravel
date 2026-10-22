<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Student ID</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->student_id }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Full Name</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->name }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Email</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->email }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Phone</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->phone ?? 'N/A' }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Date of Birth</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->date_of_birth->format('F d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Gender</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->gender }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Major</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->major }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Enrollment Year</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->enrollment_year }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">GPA</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->gpa ?? 'N/A' }}</p>
                        </div>

                        <div class="md:col-span-2">
                            <h3 class="text-sm font-medium text-gray-500">Address</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $student->address }}</p>
                        </div>

                        <div class="md:col-span-2">
                            <h3 class="text-sm font-medium text-gray-500">Record Created</h3>
                            <p class="mt-1 text-sm text-gray-900">{{ $student->created_at->format('F d, Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="flex gap-2 mt-6">
                        <a href="{{ route('students.edit', $student) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <a href="{{ route('students.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                            Back to List
                        </a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline" onsubmit="return confirm('Delete this student?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
