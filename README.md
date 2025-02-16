# Documentación de la API del Blog

Este proyecto es una API RESTful de un blog, realizado en Laravel y utiliza MySQL para almacenar los datos.

- Requisitos previos

Para ejecutar este proyecto, necesitas tener:

- PHP 8 o superior.
- Composer (gestor de dependencias para PHP).
- MySQL para la base de datos.
- Laravel 8+ o posterior.
- Acceso a la API del Blog.


- Descarga el proyecto o clónalo

Clona este repositorio en tu máquina local utilizando Git y ábrelo en tu entorno de desarrollo:
   
```bash
git clone https://github.com/kevarm/Blog
```

- Instalar dependencias

Necesitarás Composer. Si no lo tienes, puedes instalarlo desde [aquí](https://getcomposer.org/).

Una vez descargado, escribe:

```bash
composer install
```

- Conexión con tu base de datos

Una vez creada la base de datos del proyecto, ejecuta el siguiente comando para generar la clave de la aplicación en Laravel:

```bash
php artisan key:generate
```

Ejecuta las migraciones para crear las tablas en la base de datos:

```bash
php artisan migrate
```

- Arrancar el servidor

Escribe el siguiente comando:

```bash
php artisan serve
```

Esto hará que la API esté disponible en http://localhost:8000.

- Prueba la API

Abre tu navegador o un cliente como Postman y prueba las rutas de la API que están documentadas más abajo.


A continuación se describen las rutas disponibles para interactuar con la API del blog:

---

1. Obtener todos los posts
Ruta: `/api/posts`  
Método:** `GET`  
Descripción: Obtiene todos los posts publicados en el blog.

![Mi imagen](/public/img/1.png)

---

2. Obtener un post por ID
Ruta: `/api/posts/{id}`  
Método: `GET`  
Descripción: Obtiene los detalles de un post específico utilizando su ID.

![Mi imagen](/public/img/2.png)

---

3. Crear un nuevo post
Ruta: `/api/posts`  
Método: `POST`  
Descripción: Crea un nuevo post. Requiere los parámetros `title` y `body` en el cuerpo de la solicitud.

  Parámetros requeridos:
- `title`: El título del post.
- `body`: El contenido del post.

![Mi imagen](/public/img/3.png)

---

4. Prueba de paginación

![Mi imagen](/public/img/4.png)

---

5. Actualizar un post
Ruta: `/api/posts/{id}`  
Método:`PUT`  
Descripción: Actualiza un post existente. Requiere los campos `title`, `slug` y `body` en el cuerpo de la solicitud.

  Parámetros requeridos:*
- `title`: El nuevo título del post.
- `slug`: El nuevo slug del post.
- `body`: El contenido actualizado del post.

![Mi imagen](/public/img/5.png)

---

6. Eliminar un post
Ruta: `/api/posts/{id}`  
Método: `DELETE`  
Descripción: Elimina un post especificado por su ID.

![Mi imagen](/public/img/7.png)

---

- Pantalla principal
![Mi imagen](/public/img/index.png)

- Documentación de la API REST
![Mi imagen](/public/img/docu.png)

- Registro
![Mi imagen](/public/img/register.png)

- Inicio de sesión
![Mi imagen](/public/img/login.png)

- Dashboard de usuario logeado
![Mi imagen](/public/img/dashboard.png)

- Crear nuevo post
![Mi imagen](/public/img/create.png)

- Listado de posts
![Mi imagen](/public/img/list.png)

- Leer más
![Mi imagen](/public/img/lerr.png)

- Editar
![Mi imagen](/public/img/edit.png)

- Credenciales de Prueba

Credenciales de autenticación:
Email: kevin@kevin.es
Contraseña: 123123
