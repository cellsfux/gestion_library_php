<?php 
namespace App\Controllers;

use App\Models\BookModel;
use App\Models\LectureModel;

class MainController extends Controller
{
    public function index()
    {
        $this->render('main/index',[], 'Home');
    }


    public function booklist()
    {
        $book=new BookModel;
        $book= $book->findAll();

        $this->render('main/Booklist',compact('book'), 'Home');
    }


    public function viewbook(string $slug){
        $book= new BookModel;
        $book=$book->findBy(['slug'=>$slug]);

        $this->render('main/views', compact('book'), 'Home');
    }

    public function readpermition(){
//$_POST['slug']
        if(!isset( $_SESSION['user-test-covid'])){
            echo json_encode(['message'=>'Vous devez etre <a class="text-success" href="'.URLROOT.'login"> connecter </a>  pour lire un livre ou 
            <a class="text-success" href="'.URLROOT.'login/register"> creer  </a> un compte si vous n\'avez pas', 'error'=>true]);
           die;
        }
        $book= new BookModel;
        $book=$book->findBy(['slug'=>$_POST['slug']]);
        $lecture= new LectureModel;
      

        foreach($book as $ls){
            $lecture=$lecture
            ->setIdBook($ls->id)
            ->setIdUser($_SESSION['user-test-covid']['id'])
            ->setDateLecture(date('D-M-Y h:i:s'));
            $lecture=$lecture->create($lecture);
       
        }

        echo json_encode(['url'=>URLROOT.'main/read/'.$_POST['slug']]);

    }


    public function read(string $slug){
        $book= new BookModel;
        $book=$book->findBy(['slug'=>$slug]);
        $this->render('main/reader', compact('book'), 'Home');
        
    }


    
    
}
