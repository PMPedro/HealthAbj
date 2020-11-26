<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



use Illuminate\Http\Request;

class GetData extends Controller
{



  /*

  $usersRef = $db->collection('users');
$snapshot = $usersRef->documents();
foreach ($snapshot as $user) {
    printf('User: %s' . PHP_EOL, $user->id());
    printf('First: %s' . PHP_EOL, $user['first']);
    printf('Last: %s' . PHP_EOL, $user['last']);
    printf('Born: %d' . PHP_EOL, $user['born']);
    printf(PHP_EOL);
}

*/


    public function FUCKME () {


        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $firestore = $factory->createFirestore();
        $db = $firestore->database();
        $usersRef = $db->collection('MedicosExis');
        $snapshot = $usersRef->documents();
    


   // $snapshot = $reference->getSnapshot();
   
   foreach ($snapshot as $MedicosExis) {
    printf('<br><br>Nome: %s <br>' . PHP_EOL, $MedicosExis['Nome']);
    printf('Email: %s <br>' . PHP_EOL, $MedicosExis['Email']);
    printf('Idade: %s <br>' . PHP_EOL, $MedicosExis['Idade']);
    printf('Area: %s <br>' . PHP_EOL, $MedicosExis['Area']);
    printf('================================================== <br><br><br><br><br>' . PHP_EOL, $MedicosExis['Area']);
    printf(PHP_EOL);
}

return redirect ("Medics");

    

    }
}


/*
*/