<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class FirebaseConnecter extends Controller
{
   public function indexo ($Email,$Password,$Nome,$Idade,$Area) {


 /*   $ServiceAccount = ServiceAccount::fromJsonFile (
        __DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($ServiceAccount)
        ->create();



        $database = $firebase ->getDatabase(); */

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

         $database = $factory->createDatabase();
        
            
       
        
        
        $ref = $database->getReference('Teste');
   
        $ref ->push()->getKey();
        $key = 'a';
        $Key = $ref;


       // $auth.auth().signInWithEmailAndPassword($email, $password);

     //  $key = 'healthyabj,firebaseio,com';
        //var cleanEmail = email.replace('.','`');
   

        $ref ->push()->getChild(str_replace("-","",$ref ->push()->getKey()))->set([
         'Nome' =>  $Nome,
         'Idade' => $Idade,
         'Email' => $Email,
         'Idade' => $Idade,
         'Area' => $Area,
        
         
      
         
        ]); 


return view('ContacUs');

   }
}

