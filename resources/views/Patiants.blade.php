@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

<div class="FUCKINGBITCH"> 
@yield('Scripts')
@yield('BtReturnBackOffice')

<body class="bg">
    

<div class="LoginData">
<p> Dia da Consulta: <br><input type="date" id="#DCon" class="data"></p>

<p> Email do medico: <input type="text" id="#NMedi"></p>

<p> Email do Paciente: <input type="text" id="#NPaci"></p>

<p>Tipo de Consulta: <input type="text" id="#TC"></p>

 Hora da Consulta: <br> <input type="time" id="#Hora" class="data">




<br>
<br>




<br>

<a id="#ADDCENAS"  href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#TC').value"   > <h3><b>Adicionar Consultas</b></h3></a>





</div>