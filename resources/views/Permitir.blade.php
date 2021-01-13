@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

@yield('Scripts')
@yield('BtReturnBackOffice')

<body class="bg">


    <div class="MedicsContent">

        <div class="FEKOFF">
<p>
    Email do Utilizador: 
    <input type="text" id="#Email">
</p>

<a href="Updatedat/" onclick="this.href ='Updatedat'+'/'+document.getElementById('#Email').value "   > Dar Permissao</a>
</div>
</div>