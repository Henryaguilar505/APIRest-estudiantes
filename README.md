<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API Rest básica experimental

Esta es una API rest basica experimental, en la cual puedes probar las diferentes peticiones (POST, GET, PUT, DELETE)

- Clona el proyecto
- Edita o crea el archivo .env (Puedes guiarte del archivo env.example), agrega el nombre a la base de datos,el tipo de conexión debe ser mysql, el puerto, el user y el password.
- Ingresa a la carpeta del proyecto y abre la terminal
- Ejecuta las migraciones [php artisan migrate]
- Ejecta el seed para llenar la base de datos [php artisan db:seed --class=EstudianteSeeder
]
- Sirve el proyecto [php artisan serve]



## End points

- Petición GET [api/estudiantes]
- Petición GET [api/{Estudiante}]  //buscar un estudiante por ID
- Petición POST [api/estudiantes]
- Petición PUT [api/estudiantes/{estudiante}]
- Petición DELETE [api/{Estudiante}]
