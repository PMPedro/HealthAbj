@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

<div class="FUCKINGBITCH"> 
@yield('Scripts')
@yield('BtReturnBackOffice')

<body class="bg">
    

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


<a id="#ADDCENAS"  href="hmFazCenaspls/" onclick="this.href ='hmFazCenaspls'+'/'+document.getElementById('#NMedi1').value+'/'+document.getElementById('#NPaci1').value+'/'+document.getElementById('#DCon1').value +'/'+document.getElementById('#Hora1').value+'/'+document.getElementById('#TC1').value"   > <h3><b>Adicionar Consultas</b></h3></a>



<a id="#ADDCENAS"  href="FDSPOCRL/" onclick="this.href ='FDSPOCRL'+'/'+document.getElementById('#DCon1').value+'/'+document.getElementById('#NMedi1').value+'/'+document.getElementById('#NPaci1').value+'/'+document.getElementById('#Hora1').value+'/'+document.getElementById('#TC1').value"   > <h3><b>Funciona Crl</b></h3></a>













</div>