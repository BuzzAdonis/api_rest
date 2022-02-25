<?php
   //importar los metodos de Contacto
   require_once "models/Contacts.php";

   //Dame el metodo de consulta del servio
   switch($_SERVER['REQUEST_METHOD']){
       //Resive el metodo GET es decir que lee data
       case 'GET':
         //si solo trae uno
         if(isset($_GET['id'])){
            echo json_encode(Contacts::contactoDetalle($_GET['id']));
         }//fin del if
         else{
          echo json_encode(Contacts::listaDeContactos());
         }//fin del else
       break; 
       //Para mandar escribir una nueva data
       case 'POST':

        //recibimos data por medio de un post
        $datos = json_decode(file_get_contents('php://input'));

        //si recibimos data
        if($datos!=NULL){
         //si la data se guardo correctamente
         if(Contacts::crearContacto($datos->nombre, $datos->apellido, $datos->email, $datos->contactos)){
          //Codigo 200 salio correctamente
          http_response_code(200);
         }//fin del if
         else{
          //La data no concide
          http_response_code(400);
         }//fin del else
        }//fin del if
        else{
         //no se hay datos
         http_response_code(405);
        }//fin del else
       break; 

       case 'PUT':

         //recibimos data por medio de un post
         $datos = json_decode(file_get_contents('php://input'));
 
         //si recibimos data
         if($datos!=NULL){
          //si la data se guardo correctamente
          if(Contacts::actulizarContacto($datos->id,$datos->nombre, $datos->apellido, $datos->email, $datos->contactos)){
           //Codigo 200 salio correctamente
           http_response_code(200);
          }//fin del if
          else{
           //La data no concide
           http_response_code(400);
          }//fin del else
         }//fin del if
         else{
          //no se hay datos
          http_response_code(405);
         }//fin del else
      break;

      //para borrar data
    case 'DELETE':

      //Debetener un id
      if(isset($_GET['id'])){
       if(Contacts::borrarContacto($_GET['id'])){
            //Codigo 200 salio correctamente
            http_response_code(200);
       }//fin del if
       else{
            //La data no concide
            http_response_code(400);
       }//fin del else
      }//fin del if
       else{
           //no se hay datos
           http_response_code(405);
       }//fin del else
    break;


       default:
        echo 'no hay metodo para esta consulta disponible';
       break;

   }