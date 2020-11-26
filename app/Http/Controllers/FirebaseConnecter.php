<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;



//////////////////////////////////////////////////////////////////



////////////////////////////



class FirebaseConnecter extends Controller
{
   public function indexo ($Email,$Password,$Nome,$Idade,$Area) {



      $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $database = $factory2->createFirestore();
       $auth = $factory2->createAuth();
         $auth->createUserWithEmailAndPassword($Email, $Password) ;
  

         
        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $firestore = $factory->createFirestore();
         $database = $firestore->database();

         $data = [
            'Nome' =>  $Nome,
            'Idade' => $Idade,
            'Email' => $Email,
            'Area' => $Area,
        ];
        
        $database->collection('MedicosExis')->document($Email)->set($data);




         return redirect('Medics');



            
   }

   public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }



   
 


}





