<?php
//////////////////////////Conectanos a la  Base de datos////////////////////////////////////////////// 

///estructura de la connecion a la DB
class Connection extends Mysqli {

    //crear un construtor para la connecion
    function __construct(){

     //insertar parametros para la coneccion
      parent::__construct(
        /*host=*/'localhost',
        /*user=*/'root',
        /*password=*/'Pa$$w0rd',
        /*data base=*/'api_rest'
      );//fin de parametros 

     //para que los carateres expeciales se representen nomal 
     $this->set_charset('utf8');

     //en casos que falle la conneccion retor un mensaje de error
     $this->connect_error==null ? 'La conneccion se a realizado con exito a la base de datos':
     die('No se pudo conectar a la base de datos por favor verificar credenciales');

    }//fin de construtor
}//fin de la clase