@extends('layouts.Cenas')
@include('layouts.Cenas')
@yield('Css')

<div class="FUCKINGBITCH"> 
@yield('Scripts')
@yield('HomeBt')


<p> Dia da Consulta: <input type="date" id="#DCon"></p>

<p> Nome do medico: <input type="text" id="#NMedi"></p>

<p> Nome do Paciente: <input type="text" id="#NPaci"></p>

<p> Hora da Consulta: <input type="time" id="#Hora"></p>


<p id="CENAS" style="display:none">
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

<a href="GODPEDRO"><h3><b>Listar Consultas</b></h3></a>
<br>

<a id="#ADDCENAS" href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value"   > <h3><b>Adicionar Consultas</b></h3></a>



<a id="#ADDCENAS2" style="display: none" href="POCRL/" onclick="this.href ='POCRL'+'/'+document.getElementById('#DCon').value+'/'+document.getElementById('#NMedi').value+'/'+document.getElementById('#NPaci').value+'/'+document.getElementById('#Hora').value+'/'+document.getElementById('#Hora2').value+'/'+document.getElementById('#Hora3').value+'/'+document.getElementById('#Hora4').value+'/'+document.getElementById('#Hora5').value+'/'+document.getElementById('#Hora6').value+'/'+document.getElementById('#Hora7').value+'/'+document.getElementById('#Hora8').value+'/'+document.getElementById('#Hora9').value+'/'+document.getElementById('#Hora10').value"   > <h3><b>Adicionar Consultas</b></h3></a>



    
    
    Checkbox: <input type="button" value="Adolf"  id="myCheck" onclick="myFunction()">
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<p id="text" style="display:none">Checkbox is CHECKED!</p> 



<script>
    function Hide2 ()
    {
        var text = document.getElementById("text");
        var btadd = document.getElementById("#ADDCENAS");
        var btadd2 = document.getElementById("#ADDCENAS2");

        text.style.display = "block";
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