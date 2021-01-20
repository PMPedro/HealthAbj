<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class guardaConsultasr extends Controller
{
    public function guacon ($EmailMe,$EmailPa, $HoraCon, $TC,$DiaCon ) {


        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $firestore = $factory->createFirestore();
         $database = $firestore->database();


    $data = [
        'DiaConsulta' =>  $DiaCon,
        'EmailMedico' => $EmailMe,
        'EmaiPaciente' => $EmailPa, 
        'HoraConsulta' => $HoraCon,
        'Area' => $TC,
 
       ];

       $id = mt_rand(0, 999999999999999999) ;
       $database->collection('Consultas')->document($id)->set($data);
       return redirect('Patiants');



         




    }
}

/*

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $firestore = $factory->createFirestore();
         $database = $firestore->database();


    $data = [
        'DiaConsulta' =>  $DiaCon,
        'EmailMedico' => $EmailMe,
        'EmaiPaciente' => $EmailPa, 
        'HoraConsulta' => $HoraCon,
        'Area' => $TC,
 
       ];

       $id = mt_rand(0, 999999999999999999) ;
       $database->collection('Consultas')->document($id)->set($data);
       return redirect('Patiants');

       */