<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetConsultas extends Controller
{
   
    public function FeckMe () {


        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

    $database = $factory->createDatabase();
    $reference = $database->getReference('Consultas');

    $snapshot = $reference->getSnapshot();

    return $value = $snapshot->getValue();
        

    }
}
