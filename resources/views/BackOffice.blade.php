
@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')
@yield('Scripts')
@yield('HomeBt')

<body class="bg">
    

<div class="BodyBack" >

    <form action="Medics">
        <input type="submit" value="Criar Medicos" class="Button2" />
    </form>


    <form action="Patiants">
        <input type="submit" value="Criar Consultas"  class="Button2"/>
    </form>

    <form action="Enfermeiros">
        <input type="submit" value="Criar Enfermeiros " class="Button2" />
    </form>

    <form action="Permitir">
        <input type="submit" value="Editar Permissoes " class="Button2" />
    </form>

    
</div>


<svg>
    <filter id="Wavy">
        <feTurbulence type="turbulence"
        baseFrequency="0.005" numOctaves="5">
        </feTurbulence>
        <feDisplacementMap in="SourceGraphic"
        scale="50"> </feDisplacementMap>
    </filter>
</svg>
<br><br><br><br><br><br><br>
<div class="foto">
   <img src="images/logo_5.png" width="300dp" height="150dp" alt="Image">
 
</div>