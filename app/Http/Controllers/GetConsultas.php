<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class GetConsultas extends Controller
{
   
    public function idkFECKME () {


        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

        $database = $factory->createDatabase();
        $reference = $database->getReference('Consultas');
    
        $snapshot = $reference->getSnapshot();
    
        return $value = $snapshot->getValue();
        
      /*  dd($value);
    
        return dd($value);*/
        

    }
}
