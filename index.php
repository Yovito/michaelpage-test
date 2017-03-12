<!DOCTYPE html>
<html lang="en">
<head>
	<script src="addons/jquery.js" type="text/javascript"></script>
	<meta charset="UTF-8">
	<title>Conjunto</title>
	<script src="addons/jquery.js" type="text/javascript"></script>

</head>
<?php require ("include/class.changestring.php") ?>

<?php require ("include/class.completerange.php") ?>

<?php require ("include/class.clearpar.php") ?>

<?php //$cs = new changeString();
    if( isset($_REQUEST["set"]) && $_REQUEST["set"] == "set" ){
      $cs = new ChangeString();
      $cs->build($_POST["char"]);

    }elseif (isset($_REQUEST["Complete"]) && $_REQUEST["Complete"] == "Complete"){
			$cr = new completeRange();
			//$array=json_decode($_POST['listaNum']);
      $cr->build($_POST['listaNum']);

		}elseif (isset($_REQUEST["clear"]) && $_REQUEST["clear"] == "clear"){
			$cp = new ClearPar();
      $cp->build($_POST['par']);
		}
?>
<body>
	<div id="contendor">
		<h1>Secuencia de Parametros</h1>
		<form action="" method="post">
			<input type="text" name="char"  /> <br /> <br />
			<input type="submit" name="set" id="set"  value="set" />
		</form>
	</div>


	<div id="contendor">
		<h1>Coleccion de Numeros</h1>

    <div id="lista">
			<ul id="lista-numeros"></ul>
		</div>
    <script type="text/javascript" language="javascript">
      $(document).on("ready", function(){

        var nro = 0;
        var listaNum = new Array();
        $("#agregar").on("click", function(){

          nro = $("#numero").val();
          // validando datos repetidos
          if((listaNum.indexOf(nro) == -1)){
            //agregando al html el valor del input
            $("#lista-numeros").append("<li>" + nro + "</li>");
            listaNum.push(nro);
						//JSON.stringify(listaNum);
						$.post('/include/class.completerange.php', {listaNum: listaNum})
          }else{
            alert("numero repetido");
          }
        });

    });

    </script>

		<form action="" method="post">
      <input type="number" id="numero" min="1" max="9" name="listnum" />

			<input type="button" name="Agregar" id="agregar" value="Agregar" /><br/><br/>
      <input type="submit" name="Complete" id="Complete" value="Complete" />

		</form>
	</div>

	<div id="contendor">
		<h1>Limpiar Par</h1>
		<form action="" method="post">
			<input type="text" name="par"  /> <br /> <br />
			<input type="submit" name="clear" id="clear"  value="clear" />
		</form>
	</div>

</body>
</html>
