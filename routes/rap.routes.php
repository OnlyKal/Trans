<?php
   require('../config/queries.php');
   class Route {

    static public function transation(){
        if($_POST["action"]=="get"){
             $data=Queries::getData("*","toperation","id !='KALEX001'");    
             echo $data; 
         }       
     }

   }      

   Route::transation();
