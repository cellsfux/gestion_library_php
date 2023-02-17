<?php 

namespace App\Controllers;

use App\Models\UsersModel;

class LoginController extends Controller
{
    public function index(){
        
        if(isset($_SESSION['user-test-covid'])){
            session_unset();
            session_destroy();
        }
        
        $this->render('login/index', [], 'Home');
    }



    public function register(){
        $this->render('login/register', [], 'Home');
    }




    public function loginparam(){

     
          
        if(!isset($_POST['email'])|| !isset($_POST['pass'])|| 
         $_POST['email']=='' || $_POST['pass']==''
        ){
            echo json_encode(['message'=>'Vous devez remplire tous les champs svp','error'=> 'empty']);   
            die;    
        }


             $emal= $_POST['email'];
              $pass=$_POST['pass'];

            if(!filter_var($emal, FILTER_VALIDATE_EMAIL)){
                   echo json_encode(['message'=>'Adrresse email pas valide', 'error'=> 'email']);
                    die;
                   }
   
        $user= new UsersModel;
        $emaiv=$user->findBy(['email'=>$emal]);

        if(!$emaiv){
             echo json_encode(['message'=>'les informations ne sont pas correctent', 'error'=> 'empty']);
             die;
        }          
       
     
       $timezone = date_default_timezone_get();
       date_default_timezone_set($timezone);
       $date = date('Y-m-d h:i:s ', time());

           foreach($emaiv as $lis){

            if(!password_verify($_POST['pass'], $lis->pass)){
                echo json_encode(['message'=>'les informations ne sont pas correctent pwd', 'error'=> 'empty']);
                die;
           }

            $update= $user
            ->setUpdateAt($date)
            ->setStatuonline(1);
            $update=$user->update($lis->id, $update);

            $user=$user->find($lis->id);
           }
        
           $_SESSION['user-test-covid']=[
                  'id'=>$user->id,
                  'prenom'=>$user->prenom,
                  'nom'=>$user->nom,
                  'email'=>$user->email,
                  'online'=>$user->statuonline,
                  'zone'=>$user->id_ecole,
                  'img'=>$user->profilpic,
                  'sexe'=>$user->genre, 
                  'role'=>$user->roles,
            ];
            
        echo json_encode(['messsage'=>'1000', 'url'=>URLROOT]);
        die;
       
    
}






 /**
     *Action save user
     *
     * @return void
     */
    public function addteachaction(){
       
        $nome=strip_tags($_POST['nom']);
        $prenom=strip_tags($_POST['prenom']);
        $email=$_POST['email'];
        $phone=strip_tags($_POST['phone']);
        $pass= password_hash($_POST['pass'], PASSWORD_ARGON2I);


       

      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];

      $file_ext= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

       
    
      $extensions= array("png","jpg", "jpeg", "PNG", "JPG", "JPEG");


      if(in_array($file_ext,$extensions)=== false){
        echo json_encode(['message'=>'Extension not allowed, please choose a "png","jpg", "jpeg", "PNG", "JPG", "JPEG" file', 'error'=> true]);
        die;
       }


     if($file_size > 2097152){
        echo json_encode(['message'=>'Le rapport ne doit pas depasser 2 MB svp!', 'error'=> true]);
        die;
     }

    
     $user= new UsersModel;
      $newName='jison_'. uniqid(md5('jison')).'.'.$file_ext;

      if(move_uploaded_file($file_tmp,"../public/uploads/img/".$newName)){
               $user=$user
               ->setNom($nome)
               ->setPrenom($prenom)
               ->setEmail($email)
               ->setPhone($phone)
               ->setProfilpic($newName)
               ->setRoles('Client')
               ->setpass($pass);

               $user=$user->create($user);

               echo json_encode(['message'=>'Votre compte a ete creer avec success']);
               die;
      }

   
    }


    
}