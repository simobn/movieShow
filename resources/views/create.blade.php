<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
</head>
<body class="antialiased">

<form class="w-full max-w-3xl bg-white shadow-xl mx-auto p-16" action="{{ route('store.upcoming') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Movie Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   id="grid-password" name="name" type="text" placeholder="movie name">
            @error('name')
                <p class="text-gray-600 text-xs italic text-red-700">{{ $message}}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Description
            </label>
            <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                      name="description" id="description" cols="30" rows="10"></textarea>
            @error('description')
            <p class="text-gray-600 text-xs italic text-red-700">{{ $message}}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Release date
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   id="grid-password" name="release_date" type="date" placeholder="movie name">
            @error('release_date')
            <p class="text-gray-600 text-xs italic text-red-700">{{ $message}}</p>
            @enderror
        </div>
    </div>
    <div class="flex items-center justify-center w-full mb-4">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Cliquez ou faites glisser et déposez</span> pour téléverser le fichier Excel</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">.xlsx, .xls</p>
            </div>
            <input id="dropzone-file" type="file" name="movie" class="hidden"  />
        </label>
        @error('movie')
            <p class="text-gray-600 text-xs italic text-red-700">{{ $message}}</p>
        @enderror

    </div>
    <input type="submit" value="submit" class="px-4 py-2 border border-gray-300 rounded">
</form>
</body>
</html>
