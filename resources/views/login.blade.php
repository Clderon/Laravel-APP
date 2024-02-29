    <!-- spell:disable -->

    <!DOCTYPE html>
    <html lang="en">
    
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <script src="https://cdn.tailwindcss.com"></script>

            <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        </head>
    
        <body class="min-h-screen flex justify-center items-center" style="background-image: url('{{ asset('image/fondo-login.webp') }}');">

    
            <!-- container -->
            <div class="backdrop-blur-lg min-w-[50%] flex items-center  rounded-2xl shadow-lg max-w-3xl p-4  border-[2.5px] border-[#fff]">
    
                <!-- image -->
                <div class="w-1/2 sm:block hidden ">
                    <img src="{{ asset('image/aside.webp')}}" alt="" class="rounded-2xl w-full">
                </div>
    
                <!-- form -->
                <div action="" class=" sm:w-1/2 px-10 login-container mt-20 md:mt-0 ">
                    
                    <div class="header-container  md:mb-10">
                        <h2 class="font-bold text-4xl text-gray-800 mb-2 text-center">Login</h2>
                    </div>

                    @if(isset($error))
                        <p class="error border-none text-sm text-center bg-red-400 font-bold p-2 rounded-lg text-white border mt-3 md:mt-5">{{ $error }}</p>
                    @endif

    
                    <form action="{{ route('validate') }}" class=" flex flex-col gap-4 mt-10 md:mt-9" method="post">
                        @csrf
    
                        <div class="flex flex-col items-center h-[42px]  mt-5 input-container md:mt-5">
                            <input class="input-field  p-2  bg-[#fff4] w-full h-full  rounded-md   text-green-50 font-semibold"
                                type="text" name="username" id="username" required autocomplete="off">
    
                            <label for="username" class="label">Username</label>
    
                            <i class='bx bx-user text-[#fff] text-xl'></i>
                        </div>
    
                        <div class="flex flex-col items-center h-[42px] mb-5 mt-4 input-container">
                            <input class=" input-field   p-2 bg-[#fff4] w-full  h-full  rounded-md  text-green-50 font-semibold"
                                type="password" name="password" id="password" required>
    
                            <label for="password" class="label">Password</label>
    
                            <i class='bx bx-lock-alt text-[#fff] text-xl'></i>
                        </div>
    
                        <button class="button2">Login</button>
    
    
                    </form>
    
                </div>
    
            </div>
    

            <script src="{{ asset('js/sidebar.js') }}"></script>
    
        </body>
    
    </html>