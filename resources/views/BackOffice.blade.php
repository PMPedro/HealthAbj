
@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')
@yield('Scripts')
@yield('HomeBt')

<body class="bg">
    

<div class="BodyBack" >

    <form action="Medics">
        <input type="submit" value="Criar Medicos" />
    </form>


    <form action="Patiants">
        <input type="submit" value="Criar Consultas" />
    </form>


    
</div>