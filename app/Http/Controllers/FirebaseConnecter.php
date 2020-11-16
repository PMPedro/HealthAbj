<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;



//////////////////////////////////////////////////////////////////


use Firebase\Auth\Token\Domain\Generator as TokenGenerator;
use Firebase\Auth\Token\Domain\Verifier;
use Firebase\Auth\Token\Exception\ExpiredToken;
use Firebase\Auth\Token\Exception\InvalidSignature;
use Firebase\Auth\Token\Exception\InvalidToken;
use Firebase\Auth\Token\Exception\IssuedInTheFuture;
use Firebase\Auth\Token\Exception\UnknownKey;
use Kreait\Firebase\Auth\ActionCodeSettings;
use Kreait\Firebase\Auth\ActionCodeSettings\ValidatedActionCodeSettings;
use Kreait\Firebase\Auth\ApiClient;
use Kreait\Firebase\Auth\CreateActionLink;
use Kreait\Firebase\Auth\CreateActionLink\FailedToCreateActionLink;
use Kreait\Firebase\Auth\IdTokenVerifier;
use Kreait\Firebase\Auth\SendActionLink;
use Kreait\Firebase\Auth\SendActionLink\FailedToSendActionLink;
use Kreait\Firebase\Auth\SignIn\FailedToSignIn;
use Kreait\Firebase\Auth\SignIn\Handler as SignInHandler;
use Kreait\Firebase\Auth\SignInAnonymously;
use Kreait\Firebase\Auth\SignInResult;
use Kreait\Firebase\Auth\SignInWithCustomToken;
use Kreait\Firebase\Auth\SignInWithEmailAndOobCode;
use Kreait\Firebase\Auth\SignInWithEmailAndPassword;
use Kreait\Firebase\Auth\SignInWithIdpCredentials;
use Kreait\Firebase\Auth\SignInWithRefreshToken;
use Kreait\Firebase\Auth\UserRecord;
use Kreait\Firebase\Exception\Auth\ExpiredOobCode;
use Kreait\Firebase\Exception\Auth\InvalidOobCode;
use Kreait\Firebase\Exception\Auth\OperationNotAllowed;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;
use Kreait\Firebase\Exception\Auth\UserDisabled;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Kreait\Firebase\Exception\InvalidArgumentException;
use Kreait\Firebase\Util\Deprecation;
use Kreait\Firebase\Util\DT;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\Value\ClearTextPassword;
use Kreait\Firebase\Value\Email;
use Kreait\Firebase\Value\PhoneNumber;
use Kreait\Firebase\Value\Provider;
use Kreait\Firebase\Value\Uid;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Throwable;
use Traversable;

////////////////////////////



class FirebaseConnecter extends Controller
{
   public function indexo ($Email,$Password,$Nome,$Idade,$Area) {



        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');

         $database = $factory->createDatabase();
        
        
        $ref = $database->getReference('Teste');
   
        $ref ->push()->getKey();
        $key = 'a';
        $Key = $ref;


       // $auth.auth().signInWithEmailAndPassword($email, $password);
       //  $key = 'healthyabj,firebaseio,com';
       //var cleanEmail = email.replace('.','`');
   

        $ref ->push()->getChild(str_replace("-","",$ref ->push()->getKey()))->set([
         'Nome' =>  $Nome,
         'Idade' => $Idade,
         'Email' => $Email,
         'Idade' => $Idade,
         'Area' => $Area,
        
         
      
         
        ]); 
        //$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
      
        //$serviceAccount = withServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $factory2 = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory2->createDatabase();
        $ref ->push()->getKey();
       
        $auth = $factory2->createAuth();
           $auth->createUserWithEmailAndPassword($Email, $Password) ;
         // Handle Errors here.
         
         // ...
       



            return view('ContacUs');



            
   }

   public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }



   public function Auth(Type $Email, $Password)
   {
   
      $auth = $factory->createAuth();
      $auth = app('firebase.auth');
      $uid = 'some-uid';
   
$customToken = $auth->createCustomToken($uid);
$database.auth().createUserWithEmailAndPassword($Email, $Password);
      
   }


}

