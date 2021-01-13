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
   public function indexo ( $Email,$Password,$Nome, $Idade, $Area ) {

   



  

    $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

         
 


    $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
    $database = $factory2->createFirestore();
     $auth = $factory2->createAuth();
    
 
     
       $auth->createUserWithEmailAndPassword($Email, $Password) ;
      
   $firestore = $factory->createFirestore();

     $database = $firestore->database();

   //return redirect ("Medics");
   
     $auth->signInWithEmailAndPassword($Email, $Password);

     $user = $auth->getUserByEmail($Email);
     $uid = $user->uid;

      
       

   
       
         $data = [
            'uid' =>  $uid,
            'name' =>  $Nome,
            'email' => $Email,
            'password' => $Password,
            'dateNascimento' =>$Idade,
            'profileImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/healthyabj.appspot.com/o/images%2F5591ddd2-4dab-4830-8642-a2810ec766de?alt=media&token=63837eb0-8527-48e7-9b44-4e830d0979ff',        
            'usertype' => '1',
            'Permissao' => '1',
        ];
    
    
        $data2 = [
            'email' =>  $Email,
            'name' => $Nome,
            'profileImageUrl' => 'https://firebasestorage.googleapis.com/v0/b/healthyabj.appspot.com/o/images%2F5591ddd2-4dab-4830-8642-a2810ec766de?alt=media&token=63837eb0-8527-48e7-9b44-4e830d0979ff',
            'password' => $Password,
            'uid' =>  $uid,
            'dateNascimento' =>$Idade,
            'usertype' => '1',
    
        ];
    
    
    
    
       
    

        $database->collection('User')->document($Email)->set($data);
        return redirect ("Medics");

 
     
     //$userid = user.uid;


    
    }


            


 

   public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }





}

 





/*

      $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $database = $factory2->createFirestore();
       $auth = $factory2->createAuth();
         $auth->createUserWithEmailAndPassword($Email, $Password) ;
         */