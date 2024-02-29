<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|                    spell:disable
|
|    Métodos http:
|        get  conseguir datos
|        post guardar datos
|        put actualizar datos
|        delete eliminar recursos
|
|     Estructura:
|
|    ├── views/
|       ├── layouts/
|       |   ├── app.blade.php (layout principal)
|       |   ├── header.blade.php (encabezado común)
|       |   ├── footer.blade.php (pie de página común)
|       ├── templates/
|       |   ├── users/
|       |   |   ├── index.blade.php (lista de usuarios)
|       |   |   ├── show.blade.php (detalles de un usuario)
|       |   |   ├── create.blade.php (formulario para crear un usuario)
|       |   |   ├── edit.blade.php (formulario para editar un usuario)
|       |   ├── courses/
|       |   |   ├── index.blade.php (lista de cursos)
|       |   |   ├── show.blade.php (detalles de un curso)
|       |   |   ├── create.blade.php (formulario para crear un curso)
|       |   |   ├── edit.blade.php (formulario para editar un curso)
*/

Route::get('/', function () {

    return view('login');
})->name('login');


Route::post('/validate', [LoginController::class, 'customValidate'])->name('validate');

Route::controller(HomeController::class) -> group(
    function (){
        Route::get('/usuarios', 'index') -> name('home');
        Route::get('/usuarios/verusuarios', 'show') -> name('verUsuarios');
        Route::get('/usuarios/ingresarusuarios', 'create') -> name('ingresarUsuarios');
        Route::get('/usuarios/editarusuarios', 'edit') -> name('editarUsuarios');
        Route::get('/usuarios/eliminarusuarios', 'delete') -> name('eliminarUsuarios');
        Route::get('/', 'exit') -> name('exit');
        
    }
);

// Route::get('/home', [HomeController::class, 'home']);




