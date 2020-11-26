<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class GetConsultas extends Controller
{
   
    public function idkFECKME () {


      $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $firestore = $factory->createFirestore();
      $db = $firestore->database();
      $usersRef = $db->collection('ConsultasExis');
      $snapshot = $usersRef->documents();

      foreach ($snapshot as $ConsultasExis) {
        printf('<br><br>Dia da Consulta: %s <br>' . PHP_EOL, $ConsultasExis['DiaConsulta']);
        printf('Nome do Medico: %s <br>' . PHP_EOL, $ConsultasExis['NomeMedico']);
        printf('Nome do Paciente: %s <br>' . PHP_EOL, $ConsultasExis['NomePaciente']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta']);
      
        printf(PHP_EOL);
    }

        
     
    return redirect('Patiants');
        

    }







    public function idkFECKME2 () {

      $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
      $firestore = $factory->createFirestore();
      $db = $firestore->database();
      $usersRef = $db->collection('ConsultasExis');
      $snapshot = $usersRef->documents();

      foreach ($snapshot as $ConsultasExis) {
        printf('<br><br>Dia da Consulta: %s <br>' . PHP_EOL, $ConsultasExis['DiaConsulta']);
        printf('Nome do Medico: %s <br>' . PHP_EOL, $ConsultasExis['NomeMedico']);
        printf('Nome do Paciente: %s <br>' . PHP_EOL, $ConsultasExis['NomePaciente']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta1']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta2']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta3']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta4']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta5']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta6']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta7']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta8']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta9']);
        printf('ArHora da Consultaea: %s <br>' . PHP_EOL, $ConsultasExis['HoraConsulta10']);
        
        printf('================================================== <br><br><br><br><br>' . PHP_EOL, $ConsultasExis['Area']);
        printf(PHP_EOL);
    
      }

      return redirect('/');

    }
    
}
