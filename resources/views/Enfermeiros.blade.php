@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')
@yield('Scripts')
@yield('BtReturnBackOffice')


<body class="bg">
      <div class="MedicsContent">
  
  <div class="FEKOFF">
      <p>
          Nome do Enfermeiro: 
      
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
  
  <input type="date" id="Idk2" class="data">    
  
  
  
  <p>
      
      
 
  
  <br>
  <a href="notboiola/" onclick="this.href ='notboiola'+'/'+document.getElementById('#Area').value+'/'+document.getElementById('#Idk').value+'/'+document.getElementById('#MedicName').value+'/'+document.getElementById('Idk2').value+'/'+document.getElementById('#Age').value "   > Adicionar Enfermeiro</a>
  
   
  </div>
  
  
  </div>