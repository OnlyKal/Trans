<?php
   
   require('../config/queries.php');
   class Route {         

      // GET USER
       static public function newuser() {
     
               if($_POST['action']=="add"){
                Queries::addData(
                  "tuser",
                  "firstname,phone,email,password,role",
                  ":firstname,:phone,:email,:password,:role",
                  [
                    ":firstname"=>$_POST['fullname'],":phone"=>$_POST['phone'],":email"=>$_POST['email'],":password"=>$_POST['password'],":role"=>$_POST['role'],
                  ]                   
           );
        }
      }

    static public function getUsers(){
       if($_POST["action"]=="get"){
            $data=Queries::getData("*","tuser","id !='KALEX001'");    
            echo $data; 
        }       
    }
    static public function loginUser(){
       if($_POST["action"]=="login"){
            $data=Queries::authentication("*","tuser","firstname='".$_POST["fullname"]."' and password='".$_POST["password"]."'");   
            $user=json_decode($data,true);
            echo '{
                  "type":"'.count($user).'"
            }';
            if(count($user)==1){
                 session_start();
                 $_SESSION['user']['id']=$user[0]["id"];
                 $_SESSION['user']['type']=$user[0]["role"];
                 $_SESSION['user']['mail']=$user[0]["email"];
                 $_SESSION['user']['name']=$user[0]["firstname"];
            }
        }       
    }

   }


Route::newuser();
Route::getUsers();
Route::loginUser();