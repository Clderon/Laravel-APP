<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('titulo') </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>

<body class="overflow-hidden flex  bg-slate-100 bg-cover bg-no-repeat " style="background-image: url('{{ asset('image/fondo.webp') }}');">

    @include('layouts.sidebar')

    <div class="flex flex-col w-[100%]">

        <div class="m-0 p-2 w-[100%] h-[95%]">
    
            @yield('contenido')
    
        </div>
            
    
        @include('layouts.footer')

    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
