<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class Consultinhasporra extends Controller
{
    public function FeckingFeck ($DCon1,$NMedi1, $NPaci1, $Hora1,$TC1) {

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $firestore = $factory->createFirestore();
         $database = $firestore->database();


        $a = str_replace("|",".",$NMedi1);
        $v = str_replace("|",".",$NPaci1);
         $datagg = [
         'DiaConsulta' =>  $DCon1,
         'EmailMedico' => $a,
         'EmaiPaciente' => $v, 
         'HoraConsulta' => $Hora1,
         'Area' => $TC1,

        ];
        $idgg = mt_rand(0, 999999999999999999) ;
        $database->collection('Consultas')->document($idgg)->set($datagg);
        return redirect('BackofficeSecret');


        

       
    }
}
