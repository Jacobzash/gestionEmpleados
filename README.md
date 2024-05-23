# Employee Management System Project

El sistema de gestión de empleados y departamentos es una aplicación web integral creada con PHP Laravel, diseñada para agilizar y simplificar la gestión de empleados para las organizaciones. Este sistema brinda opciones para optimizar el trabajo para gestionar los empleados y sus departamentos.

## Caracteristicas

### Funciones del Usuario:

#### Gestion de Empleados

-   El administrador puede crear y administrar la información de los empleados.
- El administrador puede crear y administrar la información de los departamentos.
- Sistema de inicio de sesión seguro para usuarios con autenticación de nombre de usuario y contraseña.
- Los usuarios cuentan con un sistema de autenticación que les permite registrarse, iniciar sesión y editar su información personal.
- La plataforma trabaja con un sistema de migraciones.
- La plataforma se desarrollo en el lenguaje de programación PHP con el Framework Laravel e implementando librerias como JetStream, Livewire, TailwindCss.



## Getting Started

Siga los pasos a continuación para configurar y ejecutar el Sistema de gestión de empleados en su servidor:

1. **Requisitos previos**: asegúrese de tener PHP, Composer Laravel y un sistema de base de datos (por ejemplo, MySQL) instalado en su servidor.

**Composer** Descargar el instalador

    ```bash
    https://getcomposer.org/download/

    ```
    

**XAMPP** Sistema de base de datos y Servidor Apache 

    ```bash
    https://www.apachefriends.org/es/index.html

    ```

**Laravel JetStream** 

    ```bash
    https://jetstream.laravel.com/installation.html

    ```
    

2. **Clonar el repositorio**: clonar este repositorio en su servidor o entorno de desarrollo local.

    ```bash
    https://github.com/Jacobzash/gestionEmpleados.git

    ```

3.  **Configuración**: configure los ajustes de conexión de su base de datos en el archivo **.env**.

4. **Instalar dependencias**: instale las dependencias PHP requeridas usando Composer.

- Instalar JetStream:

    ```bash
    composer require laravel/jetstream

    ```

- Instalar Livewire:

    ```bash
    php artisan jetstream:install livewire --dark

    ```

- Despues de instalar estas dependencias, ejecutar los siguientes comandos:


    ```bash
    composer update

    npm install

    npm run build

    ```



5.  **Migraciones de bases de datos**: ejecute las migraciones de bases de datos para crear las tablas necesarias.

    ```bash
      php artisan migrate

    ```

6.  **Datos de semilla (opcional)**: si desea completar el sistema con datos de muestra, ejecute las sembradoras.

    ```bash

      php artisan db:seed

    ```

7.  **Iniciar la aplicación**: Inicie el servidor de desarrollo Laravel.

    ```bash
     php artisan serve

    ```

8.  **Acceda a la aplicación**: Abra su navegador web y acceda a la aplicación en **http://localhost:8000** (o la URL proporcionada por el servidor Laravel).


    ```bash
    http://localhost:8000

    ```

# Uso

**Panel de administración**: inicie sesión con sus credenciales de administrador para acceder al conjunto completo de funciones de usuario. Los usuarios pueden iniciar sesión con sus credenciales para acceder a sus datos personales, cambiar la contraseña y administrar su cuenta. Además, los usuarios pueden administrar empleados y departamentos, crear nuevos empleados y departamentos, editar los empleados y departamentos existentes y eliminar empleados y departamentos. Los usuarios también pueden recuperar la contraseña, actualizarla, habilitar la autenticación de dos factores y administrar sus sesiones activas.
