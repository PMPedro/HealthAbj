<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;


class Enfermeiros extends Controller
{
    public function Enfer ($Email,$Password,$Nome, $Idade, $Area) 
    {


      $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

      $database = $factory2->createFirestore();

       $auth = $factory2->createAuth();         
       $auth->createUserWithEmailAndPassword($Email, $Password) ;
  
       $firestore = $factory->createFirestore();
       $database = $firestore->database();
       

       $auth->signInWithEmailAndPassword($Email, $Password);
       $user = $auth->getUserByEmail($Email);
       $uid = $user->uid;
  
        
  
           $data = [
         'dateNascimento'=>$Idade,
         'email'=>$Email,
         'name'=>$Nome,
         'password'=>$Password,
         'profileImageUrl'=> 'null',
         'uid'=>$uid,
         'usertype' =>'2',
         'Permissao' => '1',
         ];
          
          $data2 = [
              'email' =>  $Email,
              'name' => $Nome,
              'profileImageUrl' => 'null',
              'password' => $Password,
              'uid' =>  $uid,
              'dateNascimento' =>$Idade,
              'usertype' => '2',
      
          ];
    
          $database->collection('User')->document($Email)->set($data);
          return redirect ("Enfermeiros");


     }
}
