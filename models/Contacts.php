<?php
///////////////////////////////////Manejos de data Contactos////////////////////////////////////////////////////

   //importar la connecion de la base de datos por medios de la clase Connection
   require_once "connection/Connection.php";



     //En la clase Contacts va estar todo el manejo del crud
   class Contacts{

    //Este metodo se encargara de traer todo los datos de la tabla contactos
        public static function listaDeContactos(){

         //Declaramos un arreglo para retornar los datos 
         $datos = [];

         //llamamos la connecion
         $conn = new Connection();

          //Definimos el Query de Base de datos
          $query = "SELECT * FROM contacts";

          //Ejecutamos el query en la base de datos y guardamos la consulta
         $result = $conn->query($query);

         //si temos una lectura
          if($result->num_rows){

            //para que me pase toda la data de esta tabla
            while($row = $result->fetch_assoc()){

                // data de la tabla insertar en el arreglo
             $datos[]=[
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'apellido' => $row['apellido'],
                    'email'=> $row['email'],
                    'contactos'=> $row['contactos'],
                    'created_at'=> $row['created_at'],
                    'updated_at'=> $row['updated_at']
             ];// fin del arreglo
                
            }// fin del while

            //Devuelve la data
             return $datos;

          }//fin del if

          //error
          return'No se encontro este contacto';

        }//fin de listaDeContactos

    //Este metodo se encargara de traer un contacto con el id como ancla
        public static function contactoDetalle($id){
         //Declaramos un arreglo para retornar los datos 
         $datos = [];

         //llamamos la connecion
         $conn = new Connection();

         //Definimos el Query de Base de datos
         $query = "SELECT * FROM contacts WHERE id=".$id;

         //Ejecutamos el query en la base de datos y guardamos la consulta
         $result = $conn->query($query);

         //si temos una lectura
          if($result->num_rows){

            //para que me pase toda la data de esta tabla
            while($row = $result->fetch_assoc()){

                // data de la tabla insertar en el arreglo
                $datos[]=[
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'apellido' => $row['apellido'],
                    'email'=> $row['email'],
                    'contactos'=> $row['contactos'],
                    'created_at'=> $row['created_at'],
                    'updated_at'=> $row['updated_at']
                ];// fin del arreglo
                

            }// fin del while

            //Devuelve la data
            return $datos;

          }//fin del if

          //error
          return'No se encontro este contacto';

        }//fin de ContactoDetalle

          //Este metodo se encargara de insertar valore en la tabla contactos
        public static function crearContacto($nombre, $apellido, $email, $contactos){

         //llamamos la connecion
         $conn = new Connection();

         //Definimos el Query de Base de datos
         $query = "INSERT INTO contacts (nombre,apellido,email,contactos)
         VALUES(
         case when trim('".$nombre."')='' then null else '".$nombre."' end, 
         case when trim('".$apellido."')='' then null else '".$apellido."' end,
         case when trim('".$email."')='' then null else '".$email."' end,
         case when trim('".json_encode($contactos)."')='{}' then null else '".json_encode($contactos)."' end)";

         //Ejecutamos el query en la base de datos y guardamos la consulta
          $conn->query($query);

         //si hay lectura se guardo
          if($conn->affected_rows){
            if( empty($nombre) || empty($apellido) || empty($email) || empty($contactos) || $contactos=='{}'){
              return False;
             }//fin del if
           return True;
          }//fin del if

         //no hay lectura
         return False;
        }//fin de CrearContacto

          //Este metodo se encargara de actualizar contactos
        public static function actulizarContacto($id,$nombre, $apellido, $email, $contactos){

         //llamamos la connecion
         $conn = new Connection();

         //Definimos el Query de Base de datos
         $query = "UPDATE contacts  SET 
         nombre = case when trim('".$nombre."')='' then null else '".$nombre."' end, 
         apellido = case when trim('".$apellido."')='' then null else '".$apellido."' end,
         email = case when trim('".$email."')='' then null else '".$email."' end,
         contactos=case when trim('".json_encode($contactos)."')='{}' then null else '".json_encode($contactos)."' end,
         updated_at='".date('Y-m-d H:i:s')."' WHERE id=".(int)$id;

         //Ejecutamos el query en la base de datos y guardamos la consulta
         $conn->query($query);

         //si hay lectura se guardo
          if($conn->affected_rows){
           //Validar si esta vacios
           if(empty($id) || empty($nombre) || empty($apellido) || empty($email) || empty($contactos) || $contactos=='{}'){
            return False;
           }//fin del if
             return True;
           
          }//fin del if

          //no hay lectura
          return False;
        }//fin de CrearContacto

        //Este metodo se encargara de Borrar un contacto
        public static function borrarContacto($id){

         //llamamos la connecion
         $conn = new Connection();

         //Definimos el Query de Base de datos
         $query="DELETE FROM contacts WHERE id=".$id;

         //Ejecutamos el query en la base de datos y borrar la consulta
         $conn->query($query);

         //si hay lectura se guardo
          if($conn->affected_rows){
           return True;
          }//fin del if

          //no hay lectura
          return False;

        }// fin BorrarContacto


   }//fin de la clase Contacts