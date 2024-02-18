<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" type="text/css">
    <script src="jquery-3.7.1.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased max-w-screen">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif


        <a href="{{ route('cv') }}">view PDF</a>
        <div id="cursusList" class="m-4 w-full"></div>
        <!-- Page Content -->
        <main>
            <form action="{{ route('cv.store') }}" method="POST"
                class="m-4 p-6 border rounded-md bg-gray-100 transition duration-300 ease-in-out border-gray-300 hover:border-blue-500">
                @csrf
                <h1 class="text-black   font-bold rounded-lg text-center m-4">+ ADD CURSUS </h1>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="degree"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                        <input type="text" id="degree" name="degree"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Bachelor's Degree" required>
                    </div>
                    <div>
                        <label for="institution"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institution</label>
                        <input type="text" id="institution" name="institution"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="University of Example" required>
                    </div>
                    <div>
                        <label for="start_year"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Year</label>
                        <input type="number" id="start_year" name="start_year"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="2020" required>
                    </div>
                    <div>
                        <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                            Year</label>
                        <input type="number" id="end_year" name="end_year"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="2024">
                    </div>
                </div>
                <button type="submit" id="submitBtn"
                    class="text-white bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </main>
    </div>


    <div  class="m-4 w-full"></div>
    <form action="{{ route('experience.store') }}" method="POST"
        class="m-4 p-6 border bg-gray-100 rounded-md transition duration-300 ease-in-out border-gray-300 hover:border-blue-500">
        @csrf

        <h1 class="text-black   font-bold rounded-lg text-center m-4">+ ADD Experience </h1>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="position"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                <input type="text" id="position" name="position"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Software Engineer" required>
            </div>
            <div>
                <label for="company"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                <input type="text" id="company" name="company"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ABC Inc." required>
            </div>
            <div>
                <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                    Date</label>
                <input type="date" id="start_date" name="start_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                    Date</label>
                <input type="date" id="end_date" name="end_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
        <button type="submit" 
            class="text-white bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>


    <div id="languageList" class=" m-4 w-full"></div>

    <form action="{{ route('language.store') }}" method="POST"
        class="m-4 p-6 border bg-gray-100 rounded-md transition duration-300 ease-in-out border-gray-300 hover:border-blue-500">
        @csrf

        <h1 class="text-black   font-bold rounded-lg text-center m-4">+ ADD Language </h1>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="language"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                <input type="text" id="language" name="language"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="English" required>
            </div>
            <div>
                <label for="proficiency"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proficiency</label>
                <select  name="proficiency"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Fluent">Fluent</option>
                </select>
            </div>
        </div>
        <button type="submit" 
            class="text-white bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    <div id="competenceList" class="m-4 w-full"></div>

    <form action="{{ route('competence.store') }}" method="POST"
        class="m-4 p-6 border bg-gray-100 rounded-md transition duration-300 ease-in-out border-gray-300 hover:border-blue-500">

        @csrf

        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Competence
            Name</label>
        <input type="text" id="name" name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Competence Name" required>

        <button type="submit"
            class="text-white m-2 bg-blue-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>

  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
