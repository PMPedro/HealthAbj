<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class SendConsultas extends Controller
{
    public function FeckOff ($DCon,$NMedi,$NPaci,$HCon) {

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
         $database = $factory->createDatabase();
        
        
        $ref = $database->getReference('Consultas');
   
        $ref ->push()->getKey();
        $key = 'a';
        $Key = $ref;

        $ref ->push()->getChild(str_replace("-","",$ref ->push()->getKey()))->set([
         'DiaConsulta' =>  $DCon,
         'NomeMedico' => $NMedi,
         'NomePaciente' => $NPaci, 
         'HoraConsulta' => $HCon,
         
        
         
      
         
        ]); 

            return view ("/Patiants");
 }




 //********************************************* */

 public function FDSVTF ($DCon,$NMedi,$NPaci,$HCon1,$HCon2,$HCon3,$HCon4,$HCon5,$HCon6,$HCon7,$HCon8,$HCon9,$HCon10) {

    $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
     $database = $factory->createDatabase();
    
    
    $ref = $database->getReference('Consultas');

    $ref ->push()->getKey();
    $key = 'a';
    $Key = $ref;

    $ref ->push()->getChild(str_replace("-","",$ref ->push()->getKey()))->set([
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
     
    
     
  
     
    ]); 

        return view ("/Patiants");
}



}



    
