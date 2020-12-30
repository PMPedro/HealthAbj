@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

@yield('Scripts')
@yield('BtReturnBackOffice')

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

<input type="date" id="Idk2">    



<p>
    
    
 
    <a href="PEDRODEUS">Listar Medicos</a>

<br>
<a href="boiola/" onclick="this.href ='boiola'+'/'+document.getElementById('#Area').value+'/'+document.getElementById('#Idk').value+'/'+document.getElementById('#MedicName').value+'/'+document.getElementById('Idk2').value+'/'+document.getElementById('#Age').value "   > Adicionar Medicos</a>

 
 


</div>