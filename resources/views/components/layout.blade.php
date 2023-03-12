<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>KursuStir</title>
</head>
<body class="bg-red-100">
    <nav class="flex items-center justify-between flex-wrap bg-red-700 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <a href="/"><span class="font-semibold text-xl tracking-tight">KursuStir</span></a>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block">
          <div class="text-sm lg:flex-grow">
            <a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
              Tentang Kami
            </a>
            <a href="/course" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
              Kursus
            </a>
            <a href="/contact" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
                Kontak
            </a>
          </div>
        </div>
      </nav>
    <main class="mx-auto max-w-7xl">
        {{$slot}}
    </main>
</body>
</html>