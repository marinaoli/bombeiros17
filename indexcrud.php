<?php
 include("conecta.php");
 $nomecompleto=$_POST["nomecompleto"];
 $paciente=$_POST["pacienterg"];
 $acompanhente=$_POST["acompanhante"];
 $localocorrencia=$_POST["localocorrencia"];
 $nomehospital=$_POST["nomehospital"];
 $sexo=$_POST["sexo"];
 $data=$_POST["data_nacimento"];



 $comando = $pdo->prepare("INSERT INTO arquivo  VALUES('$nomecompleto','$paciente','$acompanhente','$localocorrencia','$nomehospital','$ $sexo','$data')" );
 $resultado = $comando->execute();
 header("Location:tela2.html");
?>