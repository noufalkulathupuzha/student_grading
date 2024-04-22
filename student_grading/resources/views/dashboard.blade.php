<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Dashboard Content Section -->
            <section class="py-16 bg-gray-100">
                <div class="container mx-auto">
                    <!-- Block for School Grading Information -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">About School Grading System</h3>
                        <p class="text-lg text-gray-600">The School Grading System ensures fair and accurate assessment
                            of student performance across various academic disciplines. It provides comprehensive
                            evaluation criteria, regular feedback, and transparent grading processes to maintain
                            fairness and integrity. The system aims to help students understand their strengths and
                            areas for improvement, enabling them to excel in their academic journey.</p>
                    </div>

                    <!-- Grid for Courses Information -->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- BSc Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">BSc Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Physics</li>
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                    <li>Mathematics</li>
                                    <li>Computer Science</li>
                                </ul>
                            </div>
                        </div>

                        <!-- BA Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">BA Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>English Literature</li>
                                    <li>History</li>
                                    <li>Psychology</li>
                                    <li>Sociology</li>
                                    <li>Political Science</li>
                                </ul>
                            </div>
                        </div>

                        <!-- BBA Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">BBA Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Management</li>
                                    <li>Marketing</li>
                                    <li>Finance</li>
                                    <li>Accounting</li>
                                    <li>Entrepreneurship</li>
                                </ul>
                            </div>
                        </div>

                        <!-- BCom Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">BCom Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Accounting</li>
                                    <li>Finance</li>
                                    <li>Banking</li>
                                    <li>Taxation</li>
                                    <li>Business Law</li>
                                </ul>
                            </div>
                        </div>

                        <!-- BTech Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">BTech Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Computer Science Engineering</li>
                                    <li>Electrical Engineering</li>
                                    <li>Mechanical Engineering</li>
                                    <li>Civil Engineering</li>
                                    <li>Electronics & Communication Engineering</li>
                                </ul>
                            </div>
                        </div>

                        <!-- MTech Course Card -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">MTech Course</h3>

                            <!-- List of Branches -->
                            <div class="mt-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Branches:</h4>
                                <ul class="list-disc list-inside text-gray-600">
                                    <li>Software Engineering</li>
                                    <li>Data Science & Engineering</li>
                                    <li>Networking & Communication</li>
                                    <li>Artificial Intelligence</li>
                                    <li>Robotics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</x-app-layout>
