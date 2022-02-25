Herramienta usada en este  
•	php 7.4
•	Apache
•	Mysql
•	Postman
Como usar este servicio debe ser instanciado en la carpeta raíz donde corre apache ejemplo:
Como en mi caso uso Xampp apache corren en la carpeta xampp\htdocs usando el ancha estándar del web llamado index.php.
Debe correr el apache y el mysql.
Debe cargar el scrit.sql en una base de datos mysql como Mariadb o Workbench este le instalara la base de api_rest.
Debe colocar las credenciales de la base de date en el archivo connection\Connection.php.
Pruebas a POST, GET, PUT, GET[id] y DELETE
 La dirección puede variar dependiendo de su apache la que colocaremos en postman en mi caso es http://localhost/Contato_Back_End/
GET http://localhost/Contato_Back_End/ resultado si el estado en 200 
[
    {
        "id": "1",
        "nombre": "Adonis Alexander",
        "apellido": "Severino Perez",
        "email": "adonisalexander@hotmail.com",
        "contactos": "{\"contato\": \"809-559-4005\"}",
        "created_at": "2022-02-24 10:29:58",
        "updated_at": "2022-02-24 10:29:58"
    },
    {
        "id": "3",
        "nombre": "Bruno",
        "apellido": "Diaz",
        "email": "batman@barman.com",
        "contactos": "{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}",
        "created_at": "2022-02-24 22:34:36",
        "updated_at": "2022-02-24 22:34:36"
    },
    {
        "id": "4",
        "nombre": "Clark",
        "apellido": "Diaz",
        "email": "batman@barman.com",
        "contactos": "{\"contato1\": \"809-999-7777\", \"contato2\": \"809-000-0000\", \"contacto3\": \"809-000-0020\"}",
        "created_at": "2022-02-24 22:35:57",
        "updated_at": "2022-02-25 03:57:49"
    },
}
GET http://localhost/Contato_Back_End/?id=1 resultado si el estado en 200 
[
    {
        "id": "1",
        "nombre": "Adonis Alexander",
        "apellido": "Severino Perez",
        "email": "adonisalexander@hotmail.com",
        "contactos": "{\"contato\": \"809-559-4005\"}",
        "created_at": "2022-02-24 10:29:58",
        "updated_at": "2022-02-24 10:29:58"
    }
]
POST http://localhost/Contato_Back_End/ insertar Json 
    { 
        "nombre": "Rayden",
        "apellido": "Thuder",
        "email": "Dios@Trueno.com",
        "contactos": {
        "contato1": "809-999-7777",
        "contato2": "809-000-0000",
        "contacto3":"809-000-0020"
        }
    }
resultado del estado debe ser 200
PUT http://localhost/Contato_Back_End/ insertar Json 
    {   "id":9,
        "nombre": "Rayden",
        "apellido": "Thuder",
        "email": "Dios@Trueno.com",
        "contactos": {
        "contato1": "809-999-7777",
        "contato2": "809-000-0000",
        "contacto3":"809-000-0020"
        }
    }
resultado del estado debe ser 200
DELETE http://localhost/Contato_Back_End/?id=2 insertar Json
resultado del estado debe ser 200
