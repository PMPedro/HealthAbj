@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

<div class="FUCKINGBITCH"> 
@yield('Scripts')
@yield('BtReturnBackOffice')
<input type="button" value="Mais que 1 consulta"  id="myCheck" style="float: right" onclick="myFunction()">

<p> Dia da Consulta: <br><input type="date" id="#DCon"></p>

<p> Email do medico: <input type="text" id="#NMedi"></p>

<p> Email do Paciente: <input type="text" id="#NPaci"></p>

<p>Tipo de Consulta: <input type="text" id="#TC"></p>

 Hora da Consulta: <br> <input type="time" id="#Hora">


<p id="CENAS" style="display:none"  >
 Hora da Consulta: <input type="time" id="#Hora2"><br>
 Hora da Consulta: <input type="time" id="#Hora3"><br>
 Hora da Consulta: <input type="time" id="#Hora4"><br>
 Hora da Consulta: <input type="time" id="#Hora5"><br>
 Hora da Consulta: <input type="time" id="#Hora6"><br>
 Hora da Consulta: <input type="time" id="#Hora7"><br>
 Hora da Consulta: <input type="time" id="#Hora8"><br>
 Hora da Consulta: <input type="time" id="#Hora9"><br>
 Hora da Consulta: <input type="time" id="#Hora10"><br>
</p>




<br>
<br>

{{-- comment 
<a href="GODPEDRO" id="yhaoriginal" style="display: block"><h3><b>Listar Consultas</b></h3></a>
<a href="GODPEDRO2" id="yhasecundario" style="display: none"><h3><b>Listar Consultas</b></h3></a>
<br>
--}}




<br>

<a id="#ADDCENAS"  href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#TC').value"   > <h3><b>Adicionar Consultas2</b></h3></a>



<a id="#ADDCENAS3"  href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#TC').value"   > <h3><b>Adicionar Consultas2</b></h3></a>


<a id="#ADDCENAS4"  href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#TC').value"   > <h3><b>Adicionar Consultas2</b></h3></a>


<a id="#ADDCENAS5"  href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#TC').value"   > <h3><b>Adicionar Consultas2</b></h3></a>



<a id="#ADDCENAS2" style="display: none" href="POCRL2/" onclick="this.href ='POCRL2'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#Hora2').value+'/'+document.getElementById('#Hora3').value+'/'+document.getElementById('#Hora4').value+'/'+document.getElementById('#Hora5').value+'/'+document.getElementById('#Hora6').value+'/'+document.getElementById('#Hora7').value+'/'+document.getElementById('#Hora8').value+'/'+document.getElementById('#Hora9').value+'/'+document.getElementById('#Hora10').value"   > <h3><b>Adicionar Consultas</b></h3></a>



    <p>
    
    
    {{-- comment 
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    --}}
</p>



<script>
    function Hide2 ()
    {
      
        var btadd = document.getElementById("#ADDCENAS");
        var btadd2 = document.getElementById("#ADDCENAS2");




        btadd.style.display ="none";
        btadd2.style.display ="block";


 
 






    }
function Hide()
{


    var fdp = document.getElementById("CENAS");



    fdp.style.display ="block"; 
   
}
function myFunction() {
  // Get the checkbox

  // Get the output text
 

  // If the checkbox is checked, display the output text
  
   

  Hide2();
  Hide();
}

</script>









</div>