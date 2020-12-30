<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class LoginwFire extends Controller
{
    public function LoginFire ($email, $password) {



        
        $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $database = $factory2->createFirestore();
       $auth = $factory2->createAuth();
         //    $auth->signOut();        
       
       if($auth != null) {  
     return redirect("BackofficeSecret");    }


       $auth->signInWithEmailAndPassword($email, $password);




        

         if($auth == null ){
            echo '<script>alert("Credenciais Erradas! ")</script>'; 
            
             return redirect  ("LoginFire");
         }
         else{
           
            $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
            $firestore = $factory->createFirestore();
            $db = $firestore->database();
            //$usersRef = $db->collection('User');
            //$snapshot = $usersRef->documents();


            $usersRef = $db->collection('User')->document($email);


                    $snapshot = $usersRef->snapshot();

                    if ($snapshot->exists()) {
                    $tipouser =  $snapshot['usertype'];
                
                    
                    } 
                    else {
                        printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
                        }

                        if($tipouser == 0){

                            echo '<script>alert("Voce não tem permissao para aceder! ")</script>'; 
                            return redirect ('/');
                        }
                        
                        elseif ($tipouser == 1)
                        {

                            return redirect ('BackofficeSecret');
                        }
                        




           


       



         }

        
         
        
            //


    }
    public function StatusCheck () {

        $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory2->createFirestore();
         $auth = $factory2->createAuth();
         if($auth == null ){ 
            return redirect  ("LoginFire");
         }
         else {
            return redirect ('Medics');
         }


    }




}
