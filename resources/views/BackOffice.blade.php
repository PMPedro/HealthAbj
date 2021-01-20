
@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')





@yield('HomeBt')

<body class="bg3">

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
     
    
    
    

<div class="BodyBack2" >


    <form  onclick="CMedicos()">
        <input  type="button" value="Criar Medicos" class="Button2" />
    </form>


    <form onclick="CConsultas()">
        <input type="button" value="Criar Consultas"  class="Button2"/>
    </form>

    <form onclick="CEnfermeiros()">
        <input type="button" value="Criar Enfermeiros " class="Button2" />
    </form>

    <form onclick="CPermissoes()" >
        <input type="button" value="Editar Permissoes " class="Button2" />
    </form>


</div>


<div id="Criar_Medico" class="CreatemedicBt" style="display: none">

 @yield('Medics')
 

</div>





<div id="Criar_Enfermeiros" class="CreatemedicBt" style="display: none">

@yield('Enfermeiros')
      </div>


<div id="Criar_Consultas" class="CreatemedicBt" style="display: none">

    @yield('Consultas')
     
    
    </div>









        <div id="Criar_Permissoes" class="CreatemedicBt" style="display: none">
@yield('permitir')
             
            
            </div>



<script>
    function CMedicos () {




 var x = document.getElementById('Criar_Medico'); 
 var x2 = document.getElementById('Criar_Consultas'); 
 var x3 = document.getElementById('Criar_Enfermeiros'); 
 var x4 = document.getElementById('Criar_Permissoes'); 

 x2.style.display = "none";
 x3.style.display = "none";
 x4.style.display = "none";


 if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}




function CConsultas () {




var x = document.getElementById('Criar_Medico'); 
var x2 = document.getElementById('Criar_Consultas'); 
var x3 = document.getElementById('Criar_Enfermeiros'); 
var x4 = document.getElementById('Criar_Permissoes'); 

x.style.display = "none";
x3.style.display = "none";
x4.style.display = "none";


if (x2.style.display === "none") {
   x2.style.display = "block";
 } else {
   x2.style.display = "none";
 }

}



function CEnfermeiros () {




var x = document.getElementById('Criar_Medico'); 
var x2 = document.getElementById('Criar_Consultas'); 
var x3 = document.getElementById('Criar_Enfermeiros'); 
var x4 = document.getElementById('Criar_Permissoes'); 

x2.style.display = "none";
x.style.display = "none";
x4.style.display = "none";


if (x3.style.display === "none") {
   x3.style.display = "block";
 } else {
   x3.style.display = "none";
 }

}



function CPermissoes () {




var x = document.getElementById('Criar_Medico'); 
var x2 = document.getElementById('Criar_Consultas'); 
var x3 = document.getElementById('Criar_Enfermeiros'); 
var x4 = document.getElementById('Criar_Permissoes'); 

x2.style.display = "none";
x3.style.display = "none";
x.style.display = "none";


if (x4.style.display === "none") {
   x4.style.display = "block";
 } else {
   x4.style.display = "none";
 }

}












</script>




