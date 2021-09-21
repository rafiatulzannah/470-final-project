<?php
 Class Product extends Controller{

   function index(){

     $data['page_title']= "Product";
     if(isset($_POST['email'])){
       $user= $this-> loadModel("user");
       $user->product($_POST);
     }
     elseif(isset($_POST['username']) && !isset($_POST['email'])){
       header("Location:" . ROOT . "home" );
       die;
     }
     $this->view("BeautyE-commerce/product",$data);
   }
 }

?>
