<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class SendConsultas extends Controller
{
    public function FeckOff ($DCon,$NMedi,$NPaci) {

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
         
        
         
      
         
        ]); 

            return view ("/Patiants");
 }
}
