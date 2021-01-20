@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

@yield('Scripts')
@yield('BtReturnBackOffice')



<body class="bg">
<div class="LoginData">

    <p>
        Email do Médico/Enfermeiro:
        <input type="text"  id="#EmMeEn">
    </p>
    
    <p>
        Email do Paciente: 
        <input type="text"  id="#EmPaci">
    </p>

  
    <p>
        Tipo de Consulta: 
        <input type="text"  id="#DiCo">
    </p>

    <p>
        Hora:
        <input type="time"  id="#TiCo">
    </p>
    

    <p>
        Dia da Consulta: 
        <input type="date"  id="#HoCo">
    </p>
    
    
    


 
<a id="#ADDCENAS"  href="hmFazCenaspls/" onclick="this.href ='hmFazCenaspls'+'/'+document.getElementById('#EmMeEn').value+'/'+document.getElementById('#EmPaci').value+'/'+document.getElementById('#TiCo').value+'/'+document.getElementById('#DiCo').value+'/'+document.getElementById('#HoCo').value"   > <h3><b>Adicionar Consultas</b></h3></a>






</div>