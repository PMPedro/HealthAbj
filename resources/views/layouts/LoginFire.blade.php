
@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')
@yield('Scripts')
@yield('HomeBt')



<div id="Cenas Login">


<p>
    Email:
    <input type="text"  id="#emaillogin">
</p>

<p>
    password:
    <input type="password"  id="#Password">
</p>




    
    <a href="LoginFire/" onclick="this.href ='LoginFire'+'/'+document.getElementById('#emaillogin').value+'/'+document.getElementById('#Password').value"   >      <h2> Login2   </h2>     </a>    



    {{-- 
        <a href=""> <h6> Create Account </h6></a> 
    --}}




</div>




