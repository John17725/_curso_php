# Aprendizaje con Laravel

## Composer
Composer es un manejador de `dependencias` de PHP

### Crear un nuevo proyecto con composer

```bash
$ composer create-project laravel/laravel curso-laravel
```

---
## Controllers
Para crear un nuevo controllador dentro de laravel usamos el comando 

```bash
$ php artisan make:Controller Nombre_del_controlador
```

El cual dentro del directorio

`App\Http\Controllers` creara el nuevo fichero para poder escribir los metodos que se usaran ante determinadas peticiones que vengan de `routes`

---
## Migraciones de BD con laravel
Es un control de codigo para base de datos `automaizado` el orm que utiliza laravel es `Eloquent`

Ejecutar `$ php artisan` para consultar los comandos de migraciones

Todas las migraciones estaran dentro del directorio de `database\migrations` 

Laravel nos ofrece 4 migraciones por defecto ya las cuales son

- Creacion de la tabla de usuarios
- Creacion de la tabla tokens personales
- Creacion de la tabla de reseteo de passwords
- Creacion de la tabla de trabajos fallidos

Antes de ejecutar una migracion es necesario modificar las credenciales en el dichero `.env` y ademas crear la base de datos en nuestro gestor de base de datos que tengamos disponible en mi caso `mysql`

Para crear estas migraciones ejecutar el comando `$ php artisan migrate`

```bash
┌──(john17725㉿kali-HP)-[~/Documentos/_curso_php/Laravel/curso-laravel]
└─$ php artisan migrate         
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (11.55ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (10.14ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (9.75ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (15.83ms)

```

Al ejecutar la migracion el output en la terminal debe ser similar al recuadro anterior

Si consultamos nuestra base de datos y hacemos un `Select from` a la tabla de migraciones esta debe contener 4 entradas

```bash
MariaDB [cursolaravel]> select * from migrations;
Empty set (0.001 sec)

MariaDB [cursolaravel]> select * from migrations;
+----+-------------------------------------------------------+-------+
| id | migration                                             | batch |
+----+-------------------------------------------------------+-------+
|  5 | 2014_10_12_000000_create_users_table                  |     1 |
|  6 | 2014_10_12_100000_create_password_resets_table        |     1 |
|  7 | 2019_08_19_000000_create_failed_jobs_table            |     1 |
|  8 | 2019_12_14_000001_create_personal_access_tokens_table |     1 |
+----+-------------------------------------------------------+-------+
4 rows in set (0.001 sec)

```

### Crear migraciones propias
Para esto es necesario usar el comando `$ php artisan make:migration create_table_expense_reports --create=expense_reports`

El cual nos generara el fichero .php para la migracion correspondiente por defecto integra el `id` en la tabla y una fecha de creacion


## PHP Artisan Tinker
Es un shell que nos permite hacer debug o test para probar el funcionamiento con la bd

Ejemplo -->
```tinker
┌──(john17725㉿kali-HP)-[~/Documentos/_curso_php/Laravel/curso-laravel]
└─$ php artisan tinker       
Psy Shell v0.11.2 (PHP 8.1.4 — cli) by Justin Hileman
>>> App\Models\ExpenseReport::all();
=> Illuminate\Database\Eloquent\Collection {#4216
     all: [],
   }
>>> $report = new App\Models\ExpenseReport();
=> App\Models\ExpenseReport {#3494}
>>> $report->save();
=> true
>>> App\Models\ExpenseReport::all();
=> Illuminate\Database\Eloquent\Collection {#4430
     all: [
       App\Models\ExpenseReport {#4428
         id: 1,
         created_at: "2022-03-21 21:09:53",
         updated_at: "2022-03-21 21:09:53",
       },
     ],
   }
>>> 

```

## Middlewares
Son filtros intermedios entre peticiones para validar peticiones

## Validaciones
Las validaciones pueden realizarse dentro de los controllers pero hacer esto no es una muy buena practica por lo que con el comando `php artisan make:requests Store_NameRequests` crearemos un fichero que nos permitira realizar las diferentes funciones de validacion que ya nos ofrece laravel, de igual forma es importante importarla en el directorio de `controller` a usar.