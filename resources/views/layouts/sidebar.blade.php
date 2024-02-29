<aside class="sticky h-screen  border-r border-gray-400 text-gray-300 ">
    <div class="h-10 flex justify-around items-center text-gray-950 mt-4">
        <p class=" text-3xl font-bold text-center logo text-gray-100"> Logo </p>
        <i class='bx bx-menu text-3xl cursor-pointer ml-1' id="sidebar"></i>
    </div>

    <div class="">
        <img src="" alt="">
    </div>


    <div class="h-full flex flex-col mt-16 gap-5 ">


        <a href="{{ route('home') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out {{ Route::currentRouteName() == 'home' ? 'bg-[#0006]' : '' }}">
            <i class='text-2xl bx bx-home-alt ml-5'></i>
            <span class="list-name sidebar-name" style='--i:1'> Inicio </span>
        </a>

        <a href="{{ route('verUsuarios') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out {{ Route::currentRouteName() == 'verUsuarios' ? 'bg-[#0006]' : '' }}">
            <i class='text-2xl bx bx-search ml-5'></i>
            <span class="list-name sidebar-name" style='--i:2'> Ver Notas </span>
        </a>

        <a href="{{ route('ingresarUsuarios') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out  {{ Route::currentRouteName() == 'ingresarUsuarios' ? 'bg-[#0006]' : '' }}">
            <i class='text-2xl bx bx-user-plus ml-5'></i>
            <span class="list-name sidebar-name" style='--i:3'> Ingresar Notas </span>
        </a>

        <a href="{{ route('editarUsuarios') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out  {{ Route::currentRouteName() == 'editarUsuarios' ? 'bg-[#0006]' : '' }}">
            <i class='text-2xl bx bx-edit-alt ml-5'></i>
            <span class="list-name sidebar-name" style='--i:4'> Editar Notas </span>
        </a>

        <a href="{{ route('eliminarUsuarios') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out {{ Route::currentRouteName() == 'eliminarUsuarios' ? 'bg-[#0006]' : '' }}">
            <i class='text-2xl bx bx-user-x ml-5'></i>
            <span class="list-name sidebar-name" style='--i:5'> Eliminar Notas </span>
        </a>

        <a href="listaaprobados.php"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out ">
            <i class='text-2xl bx bx-list-check ml-5'></i>
            <span class="list-name sidebar-name" style='--i:6'> Listar aprobados </span>
        </a>

        <a href="{{ route('exit') }}"
            class="text-xl h-12 px-4 rounded-md flex justify-start gap-7 items-center hover:bg-[#0006] transition-all duration-300 ease-in-out ">
            <i class='text-2xl bx bx-log-out ml-5'></i>
            <span class="list-name sidebar-name" style='--i:7'> Salir </span>
        </a>

    </div>

</aside>