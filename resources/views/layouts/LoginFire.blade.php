
@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')
@yield('Scripts')
@yield('HomeBt')


<body class="bg2">
    

<div id="Cenas Login">

<div class="LoginData">
<p>
    Email:
    <input type="text"  id="#emaillogin">
</p>

<p>
    Password:
    <input type="password"  id="#Password">
</p>



    <div class="login">
        <a href="LoginFire/" onclick="this.href ='LoginFire'+'/'+document.getElementById('#emaillogin').value+'/'+document.getElementById('#Password').value"   >      <h2> Login   </h2>     </a>    

    </div>
   
</div>


    {{-- 
        <a href=""> <h6> Create Account </h6></a> 
    --}}




</div>




