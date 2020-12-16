<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class SendConsultas extends Controller
{
    public function FeckOff ($DCon,$NMedi,$NPaci,$HCon,$Area) {

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $firestore = $factory->createFirestore();
         $database = $firestore->database();



         $data = [
         'DiaConsulta' =>  $DCon,
         'EmailMedico' => $NMedi,
         'EmaiPaciente' => $NPaci, 
         'HoraConsulta' => $HCon,
         'Area' => $Area,

         
        
         
      
         
        ];
        $id = mt_rand(0, 999999999999999999) ;
        $database->collection('Consultas')->document($id)->set($data);
        return redirect('Patiants');
 }




 //********************************************* */

 public function FDSVTF ($DCon,$NMedi,$NPaci,$HCon1,$HCon2,$HCon3,$HCon4,$HCon5,$HCon6,$HCon7,$HCon8,$HCon9,$HCon10) {

    $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

    $firestore = $factory->createFirestore();
     $database = $firestore->database();



     $data = [
     'DiaConsulta' =>  $DCon,
     'NomeMedico' => $NMedi,
     'NomePaciente' => $NPaci, 
     'HoraConsulta1' => $HCon1,
     'HoraConsulta2' => $HCon2,
     'HoraConsulta3' => $HCon3,
     'HoraConsulta4' => $HCon4,
     'HoraConsulta5' => $HCon5,
     'HoraConsulta6' => $HCon6,
     'HoraConsulta7' => $HCon7,
     'HoraConsulta8' => $HCon8,
     'HoraConsulta9' => $HCon9,
     'HoraConsulta10' => $HCon10,
     
    
     
  
     
    ];
    $database->collection('ConsultasExis')->document($DCon)->set($data);
    return redirect('Patiants');
}



}



    
