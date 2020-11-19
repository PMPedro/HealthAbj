@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

<div class="FUCKINGBITCH"> 
@yield('Scripts')
@yield('HomeBt')


<p> Dia da Consulta: <input type="date" id="#DCon"></p>

<p> Nome do medico: <input type="text" id="#NMedi"></p>

<p> Nome do Paciente: <input type="text" id="#NPaci"></p>


<a href="GODPEDRO"><h3><b>Listar Consultas</b></h3></a>
<br>
<a href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value"   > <h3><b>Adicionar Consultas</b></h3></a>

</div>