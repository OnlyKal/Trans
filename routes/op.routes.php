<?php

    require('../config/queries.php');
    class Router{
        
        static public function addoperation(){
            if($_POST['action']=='addop'){
                Queries::addData(
                    'toperation',
                       'type,
                        pu,
                        quantity,
                        pt,
                        iduser',
                    ':type,
                     :pu,
                     :quantity,
                     :pt,
                     :iduser',
                     [
                        'type'=>$_POST['typeop'],
                        'pu'=>$_POST['pu'],
                        'quantity'=>$_POST['qt'],
                        'pt'=>$_POST['pt'],
                        'iduser'=>$_POST['userid'],
                        // 'dateop'=>'now'
                     ]

                    
                );
            }
        }

        static public function getAllOp(){
            if($_POST["action"]=="getop"){
                 $data=Queries::getData("*","toperation","id !='KALEX001'");    
                 echo $data; 
             }       
         }

    }
 Router::addoperation();
 Router::getAllOp();

?>