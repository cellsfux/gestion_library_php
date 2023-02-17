<?php

namespace App\Core;

use App\Controllers\Error404Controller;
use App\Controllers\MainController;

class Main
{
     public function Start()
     {
        //On recuperer l'url
        $uri= $_SERVER['REQUEST_URI'];
        



       //On verifie si les paramettres sont presents
        if( $_GET['p'] && $uri!=='/' && $_GET['p']!==''){ 
        //On enleve le dernier slashe Training slash
        //on verifie si url n'est pas vide est se termine par un slash

        if(!empty($uri) && $uri[-1]==="/"){
            //on enleve le slache
            $uri=substr($uri, 0, -1);

            //On envoi un code de redurection permennente
            http_response_code(301);

            //On redirige ves l'url sans slash
            header('Location: '.$uri);

        }

        //On gere les paramettres de l'url
        //p=Controlleurs/methode/paramettres
        //on separe les differents paramettres dans un tableu
        $params= explode('/', $_GET['p']);

        
        //On verifie si le premier paramettre est present
        //Controller
       if($params[0]!==''){
             //On recupere le nom du controlleur a instacier
             $controller = 'App\\Controllers\\'.ucfirst(array_shift($params)).'Controller';

           
             $test=$controller;
            

             //On verifie si la class existe et ou le controller exite
             if(class_exists($controller)){
                            //On istancie le controlleur
             $controller= new $controller();
             //On recupere le deuxiemme parames si nom on remet la methode pricipale index dans mon cas
            $action = (isset($params[0])) ? array_shift($params) : 'index';
              

             if(method_exists($controller, $action)){         
               //SI il reste des parramettres on les passent a la mathode
               (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();


            



             }else{
                http_response_code(404);
                $err= new Error404Controller;
                $err->index();
             }
             
             //var_dump($controller);
          }else{
            http_response_code(404);
            $err= new Error404Controller;
            $err->index();
          }




       }else{
          $main=new MainController;
          $main->index();
       }

        

       


    }else{
        $main=new MainController;
          $main->index();
    }





     }
}