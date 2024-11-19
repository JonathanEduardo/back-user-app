# Biblioteca API
Back end breakpoints


## Requisitos previos
Asegúrate de tener instalado lo siguiente:
Make sure you have the following installed:

php >= 8.1  < 8.2
MYSQL
XAMPP
composer >= 2.8.2


## Clonar el Repositorio
- **Para clonar el repositorio, utiliza el siguiente comando en tu terminal:**
- **To clone the repository, use the following command in your terminal:**
```bash
git clone https://github.com/JonathanEduardo/back-user-app.git
```


#### Configuración de MySQL
-**Usar MySQL instalado de manera independiente**
-*Instala MySQL desde el sitio oficial MySQL.*
-*Inicia el servicio de MySQL y crea una base de datos llamada reservas_db:*

- **Puedes usar el comando desde terminal o bien entrar a algun manejador como phpmyadmin o brench work y crearla manualmente con el siguiente nombre usersapp**
- **You can use the command from terminal or enter a manager such as phpmyadmin or brench work and create it manually with the following name usersapp**
```bash 
CREATE DATABASE usersapp;
```
-*Entrar a la carpeta  back-user-app y cambia el nombre de .example.env a .env y completa los campos:  DB_USER, DB_PASSWORD y DB_NAME: reservas_db, recuerda poner la contraseña de tu base de datos*
-*Enter the  back-user-app folder and change the document name from .example.env to .env and complete the: DB_USER, DB_PASSWORD y DB_NAME: reservas_db, remember to enter your database password*
```bash 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=usersapp
DB_USERNAME=root
DB_PASSWORD=
```


- **Ejecuta el comando para instalar dependencias:**
- **Run the command to install dependencies:**
```bash 
composer install
```

- **Despues de esperar la instalacion de las dependencias ejecuta el comando para correr migraciones:**
- **Después de esperar la instalación de las dependencias ejecuta el comando para ejecutar migraciones:**
```bash 
php artisan migrate

```

- **Una vez teniendo nuestra base de datos estructurada ejecutamos el siguiente comando para crear usuarios:**
- **Once we have our database structured, we execute the following command to create users:**
```bash 
php artisan db:seed
```


- **Ejecutamos el comando siguiente para que trabaje nuestro back end:**
- **We execute the following command to make our back end work**
```bash 
php artisan serve
```


- **Usuario creado por defecto en laravel seeders**
- **User created by default in laravel seeders**
```bash 
email: admin@admin
password: admin2024
```
