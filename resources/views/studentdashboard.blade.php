<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses | EduFeedback</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="">
    <!-- Top Header -->
    <header class="">
        <div class="">
            <span class="">EduFeedback</span>
        </div>
        <div class="">
            <div class="">
                <button class="">
                    <span class="">notifications</span>
                </button>
                <button class="">
                    <span class="">help</span>
                </button>
                <button class="">
                    <span class="">account_circle</span>
                </button>
            </div>
            <button class="">
                Provide Feedback
            </button>
        </div>
    </header>

    <div class="">
        <!-- Sidebar -->
        <aside class="">
            <div class="">
                <div class="">
                    <div>
                        <p class="">University Portal</p>
                        <p class="">Quality Assurance</p>
                    </div>
                </div>
            </div>
            
            <nav class="">
                <a class="" href="#">
                    <span class="">Dashboard</span>
                </a>
            </nav>
            
            <div class="">
                <a class="" href="#">
                    <span class="">Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="">
            <div class="">
                <!-- Page Header -->
                <section class="">
                    <div class="">
                        <div>
                            <h1 class="">Computer Science Department</h1>
                        </div>
                    </div>

                    <!-- Course Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Course 1 -->
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-200">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900 w-12">Icon</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Course</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Instructor</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Schedule</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Status</th>
                                    <th class="px-6 py-4 text-right text-sm font-semibold text-gray-900">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <!-- Course 1 Row -->
                                <tr class="group hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-primary to-blue-500 flex items-center justify-center text-white text-sm font-bold">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1; font-size: 20px;">account_tree</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <p class="font-bold text-primary text-sm">CS402</p>
                                            <p class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">Distributed Systems</p>
                                            <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full font-bold">Core</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-gray-600 text-sm">Prof. Dr. Alistair Vance</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-sm text-gray-500">Mon, Wed 10:00</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-bold rounded-full">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-primary font-semibold text-sm flex items-center gap-1 hover:text-primary-hover transition-colors">
                                            View Details <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Course 2 Row -->
                                <tr class="group hover:bg-gray-50 transition-colors ring-2 ring-blue-100/50">
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center text-white text-sm font-bold">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1; font-size: 20px;">neurology</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <p class="font-bold text-primary text-sm">CS488</p>
                                            <p class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">Machine Learning</p>
                                            <span class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full font-bold">Elective</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-gray-600 text-sm">Dr. Sarah Mitchell</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-sm text-gray-500">-</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-amber-50 text-amber-700 text-xs font-bold rounded-full">Feedback Pending</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="w-full primary py-1.5 px-3 rounded font-semibold text-xs hover:primary-hover transition-colors">
                                            Submit Feedback
                                        </button>
                                    </td>
                                </tr>

                                <!-- Course 3 Row -->
                                <tr class="group hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-gray-600 to-gray-800 flex items-center justify-center text-white text-sm font-bold">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1; font-size: 20px;">terminal</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <p class="font-bold text-primary text-sm">CS301</p>
                                            <p class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">Operating Systems</p>
                                            <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded-full font-bold">Core</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-gray-600 text-sm">Prof. James Thorne</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-sm text-emerald-700 font-bold">Grade: A</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-gray-500 font-semibold text-sm flex items-center gap-1 hover:text-gray-700 transition-colors">
                                            View Summary <span class="material-symbols-outlined text-sm">open_in_new</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
                
        </main>
    </div>
</body>
</html>