<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\CategorieModel;
use App\Models\LectureModel;
use App\Models\UsersModel;

class AdminController extends Controller
{
    public function index(){
        $this->isAdmin();
        $book= new BookModel;
        $books= $book->findAll();
        $this->render('admin/index',compact('books'), 'Home');
    }


    public function addbook(){
        $this->isAdmin();
  
        $categorie= new CategorieModel;
        $categorie=$categorie->findAll();
     
        $this->render('admin/addbook', compact('categorie'), 'Home');
    }


    public function lecture(){
        $this->isAdmin();
        $book= new BookModel;
        $user= new UsersModel;
        $lecture= new LectureModel;

        $lecture= $lecture->findAll();

        $html='';
        $i=0;
        if($lecture){
            foreach($lecture as $lis){
                $users=$user->find($lis->id_user);
                $books= $book->find($lis->id_book);

                if($user && $books){

                    $i+=1;

                    $html.='<tr>';
                    $html.='<td>'.$i.'</td>';
                    $html.='<td>'. ucfirst($users->nom.' '. $users->prenom) .'</td>';
                    $html.='<td>'. ucfirst($books->title) .'</td>';
                    $html.='<td>'. ucfirst($lis->date_lecture) .'</td>';

                    $html.='</tr>';

                }
            }
        }
     

        $this->render('admin/lecture',compact('html'), 'Home');
    }


    public function categorie(){
        $this->isAdmin();
        $categorie= new CategorieModel;
        $categorie=$categorie->findAll();

        $this->render('admin/categorie', compact('categorie'), 'Home');
    }

    public function users(){
        $this->isAdmin();
        $user= new UsersModel;
        $user=$user->findAll();

        $this->render('admin/users', compact('user'), 'Home');
    }

    public function addcategorie(){
        $this->isAdmin();
        $this->render('admin/addcategorie', [], 'Home');
    }





    /**
     * Ajouter un book
     */
 public function createbook(){
              
                $titre= strip_tags(ucfirst($_POST['title']));
                $langue= strip_tags(ucfirst($_POST['langue']));
                $auteur= strip_tags(ucfirst($_POST['auth']));
                $ville= strip_tags(ucfirst($_POST['ville']));
                $annee= strip_tags($_POST['annee']);
                $categorie= strip_tags($_POST['categorie']);
                $description= strip_tags($_POST['description']);

                $book = new BookModel;
                $bookv= $book->findBy(['title'=>$titre]);

                if($bookv){
                    echo json_encode(['message'=>'Ce nom de livre existe déjà veillez spécifier voici nos suggetion '.$titre.'+ nom ou version du livre <br> exemple : '.ucfirst($titre).' version 23', 'error'=>true]);
                    die;
                }
                $slug= str_replace(' ', '-', $titre);


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
     if($file_size > 5097152){
        echo json_encode(['message'=>'L\'image ne doit pas depasser 5 MB svp!', 'error'=> true]);
        die;
     }
      $newName='jison_'. uniqid(md5('jison')).'.'.$file_ext;





      $file_name_file = $_FILES['file']['name'];
      $file_size_file =$_FILES['file']['size'];
      $file_tmp_file =$_FILES['file']['tmp_name'];
      $file_type_file=$_FILES['file']['type'];
      $file_ext_file= strtolower(pathinfo($file_name_file, PATHINFO_EXTENSION));
      $extensions_file= array("pdf", "PDF");
      if(in_array($file_ext_file,$extensions_file)=== false){
        echo json_encode(['message'=>'Extension not allowed, please choose a "pdf" file', 'error'=> true]);
        die;
       }
     if($file_size_file > 10097152){
        echo json_encode(['message'=>'Le fichier livre ne doit pas depasser 10 MB svp!', 'error'=> true]);
        die;
     }
      $newName_file='jison_'. uniqid(md5('jison')).'.'.$file_ext_file;




      if(move_uploaded_file($file_tmp,"../public/uploads/img/".$newName) && 
      move_uploaded_file($file_tmp_file,"../public/uploads/files/".$newName_file) ){

        $booksdata= $book
        ->setTitle($titre)
        ->setSlug($slug)
        ->setAnneeFab($annee)
        ->setVilleFab($ville)
        ->setIdCategorie($categorie)
        ->setCoverImage($newName)
        ->setFilePah($newName_file)
        ->setDescription($description)
        ->setAutheur($auteur)
        ->setLangue($langue);

        $save= $book->create($booksdata);
        echo json_encode(['message'=>'Vous avez ajouter avec succes un ouvrage']);
        die;

      }

}



    /**
     * This is create categorie
     */
    public function createcate(){
        if(empty($_POST['title'])){
            echo json_encode(['message'=>'Le titre de la catégorie dois être pas vide ', 'error'=>true]);
            die;
        }

        $categories= new CategorieModel;

        $verifier= $categories->findBy(['title'=>strip_tags(ucfirst($_POST['title']))]);
          if($verifier){
            echo json_encode(['message'=>'Cette catégorie existe déjà '.$_POST['title'].' ', 'error'=>true]);
            die;
          }
        $categorie=$categories->setTitle(strip_tags(ucfirst($_POST['title'])));
        $categorie=$categories->create($categorie);
        echo json_encode(['message'=>'Vous avez créer avec succes une catalogue " '.$_POST['title'].' "']);
        die;
    }


//delete book
    public function deletbook(int $id){
        $book = new BookModel;
        $bookdata= $book->find($id);
         
        if($bookdata){
            unlink('../public/uploads/img/'.$bookdata->cover_image);
            unlink('../public/uploads/files/'.$bookdata->file_pah);
        }
        $dele= $book->delete($id);
        header('location:'. URLROOT.'admin');
        
    }




    public function isAdmin(){
        if(isset( $_SESSION['user-test-covid']) &&  $_SESSION['user-test-covid']['role']=='Admin'){
             return true;
             die;
        }else{
            header('location:'.URLROOT);
            die;
        }
    }


    public function deleteuser(int $id){
        $user= new UsersModel;
        $users=$user->find($id);

        if(  $users->roles=='Admin'){
            header('location:'.URLROOT.'admin/users');
            die;
        }

        unlink('../public/uploads/img/'.$users->profilpic);

        $user=$user->delete($id);
        header('location:'.URLROOT.'admin/users');
        die;
        
    }


    public function deletecat(int $id){
        $categorie= new CategorieModel;
        $categorie=$categorie->delete($id);
        header('location:'.URLROOT.'admin/categorie');
    }
}

