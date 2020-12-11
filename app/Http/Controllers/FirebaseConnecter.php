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

         $auth->signInWithEmailAndPassword($Email, $Password);
         $user = $auth->getUserByEmail($Email);
         $uid = $user->uid;

         $data = [
            'Nome' =>  $Nome,
            'Idade' => $Idade,
            'Email' => $Email,
            'Area' => $Area,
            'usertype' => '1',
        ];


        $data2 = [
            'email' =>  $Email,
            'name' => $Nome,
            'profileImageUrl' => 'null',
            'password' => $Password,
            'uid' =>  $uid,
            'usertype' => '1',

        ];




       

        $database->collection('Medico')->document($Email)->set($data);
        $database->collection('User')->document($Email)->set($data2);

      
        //$userid = user.uid;
         return redirect ("Medics");



            
   }

   public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }



   
 


}





