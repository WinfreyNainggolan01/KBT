<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - KBT</title>
  <link rel="shortcut icon" href="{{ asset ('vendor/assets/images/favicon.png')}}" />
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  <div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg px-8 py-6">
      <div class="text-center mb-6">
        <img src="{{ asset('img/KBT.png') }}" alt="logo" class="mx-auto h-16 w-16">
      </div>
      <div class="text-center mb-4">
        <span class="block text-2xl font-bold text-gray-800">Hello! Let's get started</span>
        <span class="block text-lg font-light text-gray-500 mt-2">Sign in to continue.</span>
      </div>

      @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('loginError') }}</span>
        </div>
      @endif

      <form class="space-y-4" action="/login" method="POST">
        @csrf
        <div>
          <input type="username" name="username" class="block w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600 @error('username') border-red-500 @enderror" placeholder="Username" value="{{ old('username') }}" required autofocus>
          @error('username')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <input type="password" name="password" class="block w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600" placeholder="Password" required>
        </div>

        <div class="mt-6">
          <button type="submit" class="w-full bg-gray-600 text-white py-3 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2 transition duration-150">
            SIGN IN
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
