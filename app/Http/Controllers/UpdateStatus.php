<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class UpdateStatus extends Controller
{
    public function UpdateSt ($Email) {

      
         
 


        $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
  
        $database = $factory2->createFirestore();

        

        $firestore = $factory2->createFirestore();
         $database = $firestore->database();



                                
                    $docRef =   $database->collection('User')->document($Email);
                    $docRef->update([
                        ['path' => 'permissao', 'value' => 1]
                    ]);

                    


                    
             
                    return redirect ("Permitir");
    }





}
