<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Informasi di atas navbar -->
    <div class="bg-white">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-sm flex gap-6 p-2">
                <div class="flex">
                    <x-heroicon-s-phone class="h-4 w-4 text-green-500" />
                    <p>+62 813-7434-7841</p>
                </div>
                <span>|</span>
                <div class="flex">
                    <x-heroicon-s-envelope class="h-4 w-4 text-green-500" />
                    <p>fitria@gmail.com</p>
                </div>
            </div>
            <div class="flex space-x-4 text-sm">
                <a href="#" class="hover:text-gray-300"><x-css-facebook class="h-4 w-4 text-gray-500" /></a>
                <a href="#" class="hover:text-gray-300"><x-css-twitter class="h-4 w-4 text-gray-500" /></a>
                <a href="#" class="hover:text-gray-300"><x-css-instagram class="h-4 w-4 text-gray-500" /></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-700"><span class="text-green-500">Klinik Gigi</span> - Meilani
                Sinaga</h1>
        </div>
    </nav>

    <!-- Halaman Login -->
    @if (session('berhasil'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Sukses!</span> {{ session('berhasil') }}
        </div>
      </div>
    @endif
    @if (session('gagal'))
        <div class="flex mt-4 w-1/4 m-auto items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Maaf!</span> {{ session('gagal') }}.
            </div>
        </div>
    @endif

    <div class="flex items-center justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Silahkan Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2">Username</label>
                    <input name="name" type="text"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="mb-6 flex items-center gap-3">
                    <label class="uppercase text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input name="password" type="password"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="flex items-center gap-2">
                    <button type="submit"
                        class="uppercase bg-gray-300 px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                        Submit
                    </button>
                    <a href="{{ route('register.page') }}"
                        class="uppercase bg-gray-300 px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                        Daftar
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
