<?php

const URLROOT='http://localhost/memoire/Appdebora/public/';

const KEYToken = 'Your_token_Here';

function URLGenerator(){
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
  else
    $url = "http"; 
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
  $url .= $_SERVER['REQUEST_URI']; 
      
  return $url; 
}



/**
 * Re tourner un age a partir d'une date
 */
function Age($date_naissance)
{
$am = explode('-', $date_naissance);
$an = explode('-', date('Y/m/d'));
if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
return $an[2] - $am[2] - 1;
}



 function MoisName($mois){
  switch ( $mois) {
            case '1':
                 return 'Janvier';
                 break;
            case '2':
                  return 'Fevrier';
                 break;
            case '3':
                return  'Mars';
                break;
           case '4':
                return  'Avril';
                break;
           case '5':
                return     'Mais';
                 break;
           case '6':
                return  'Juint';
                break;
            case '7':
               return 'Juillet';
               break;
            case '8':
               return 'Oaut';
               break;
            case '9':
               return  'Septembre';
               break;
            case '10':
               return 'Octobre';
               break;
            case '11':
               return 'Novembre';
              break;
            case '12':
              return 'Decembre';
              break;
           default:
              return null;
               break;
}
}