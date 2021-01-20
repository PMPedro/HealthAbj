@section('Css')

<div>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    <link rel="stylesheet" href="assets/css/mystyle.css" />

   


    </div>

    
@endsection

@section('Teste')


<div>   <p> <h1>    TESTE TESTE TESTE TESTE TESTE TESTE TESTE TESTE TESTE </h1></p></div>


@endsection

@section('Database')

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.0.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

@endsection

@section('Css')

<html>
<head>
<title>Contact us</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
          </head>
<body>

    
@endsection

@section('Scripts')


<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="/__/firebase/6.2.0/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="/__/firebase/6.2.0/firebase-auth.js"></script>
<script src="/__/firebase/6.2.0/firebase-firestore.js"></script>


    
@endsection



@section('HomeBt')



<form action="/">
    <input type="submit" value="Home" class="buttonhome" />
</form>

    
@endsection

@section('BtReturnBackOffice')


<form action="BackofficeSecret">
    <input type="submit" value="Back Office" />
</form>

    
@endsection

@section('Medics')








@yield('Scripts')



    <div class="MedicsContent">

<div class="FEKOFF">
    <p>
        Nome do Medico: 
    
<input type="text" id="#MedicName">    

<p>
    Area: 

<input type="text" id="#Age">    
<p>
    Email: 

<input type="text" id="#Area">    
<p>
    Password: 

<input type="text" id="#Idk" >    
<p>
    Data de Nascimento: 

<input type="date" id="Idk2" class="data">    



<p>
    
    
 


<a href="boiola/" onclick="this.href ='boiola'+'/'+document.getElementById('#Area').value+'/'+document.getElementById('#Idk').value+'/'+document.getElementById('#MedicName').value+'/'+document.getElementById('Idk2').value+'/'+document.getElementById('#Age').value "   > Adicionar Medicos</a>

 
</div>


</div>

    
@endsection



@section('Consultas')












    

<div class="LoginData">
<p> Dia da Consulta: <br><input type="date" id="#DCon1" class="data"></p>

<p> Email do medico: <input type="email" id="#NMedi1"></p>

<p> Email do Paciente: <input type="email" id="#NPaci1"></p>

<p>Tipo de Consulta: <input type="text" id="#TC1"></p>

 Hora da Consulta: <br> <input type="time" id="#Hora1" class="data">




<br>
<br>




<br>
{{-- --}}






<a id="#ADDCENAS"  href="FDSPOCRL/" onclick="this.href ='FDSPOCRL'+'/'+document.getElementById('#DCon1').value+'/'+document.getElementById('#NMedi1').value+'/'+document.getElementById('#NPaci1').value+'/'+document.getElementById('#Hora1').value+'/'+document.getElementById('#TC1').value"   > <h3><b>Registar Consulta</b></h3></a>







</div>










    
@endsection


@section('Enfermeiros')





      <div class="MedicsContent">
  
  <div class="FEKOFF">
      <p>
          Nome do Enfermeiro: 
      
  <input type="text" id="#MedicName">    
  
  <p>
      Area: 
  
  <input type="text" id="#Age">    
  <p>
      Email: 
  
  <input type="text" id="#Area">    
  <p>
      Password: 
  
  <input type="text" id="#Idk" >    
  <p>
      Data de Nascimento: 
  
  <input type="date" id="Idk2" class="data">    
  
  
  
  <p>
      
      
 
  
  <br>
  <a href="notboiola/" onclick="this.href ='notboiola'+'/'+document.getElementById('#Area').value+'/'+document.getElementById('#Idk').value+'/'+document.getElementById('#MedicName').value+'/'+document.getElementById('Idk2').value+'/'+document.getElementById('#Age').value "   > Adicionar Enfermeiro</a>
  
   
  </div>
  
  
  </div>




    
@endsection



@section('permitir')
    

<div class="MedicsContent">

    <div class="FEKOFF">
<p>
Email do Utilizador: 
<input type="text" id="#Email">
</p>

<a href="Updatedat/" onclick="this.href ='Updatedat'+'/'+document.getElementById('#Email').value "   > Dar Permissao</a>
</div>
</div>
@endsection