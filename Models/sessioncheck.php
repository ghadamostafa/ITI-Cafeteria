<?php
      
       


       if(!isset($_COOKIE["PHPSESSID"]))
            {
             session_start();
            }

         
                if(isset($_SESSION['name'])&&!empty($_SESSION['name']))
                {

                }else{
                    header("Location:../Views/login.php");

                }
            


?>