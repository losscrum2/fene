<?php
require("../mod_configuracion/conexion.php");
require("../theme/header_inicio.php");
?>
<br />
<div class="titulo"><H6>ACTUALIZAR TRATAMIENTO DEL AGUA </H6></div>
<?php
/************************************************************
****************** Eliminar Registros ***********************
************************************************************/
if(strtolower($_POST["del"]) == "eliminar")
{
	$sqldelexp = "delete from ttratamiento where ttratamiento_id='".(int)$_REQUEST["ttratamiento_id"]."'";
	
	if(  mysql_query($sqldelexp, $con)  )
	{
			cuadro_mensaje("Datos Eliminados Correctamente...");
			 			echo "<br><br><br><br><br>";
						require("../theme/footer_inicio.php");
						exit;
			
	}
	
}

/************************************************************
****************** Editar Registros ***********************
************************************************************/
if (strtolower($_REQUEST["acc"])=="guardar")
{
				
			$sql="update ttratamiento set ttratamiento_descripcion=UPPER('".$_REQUEST["ttratamiento_descripcion"]."') where ttratamiento_id='".$_REQUEST["ttratamiento_id"]."' ";
			if(mysql_query($sql,$con))
			{
				
					cuadro_mensaje("TRATAMIENTO DEL AGUA actualizado correctamente...");
					 echo "<br><br><br><br><br>";
					require("../theme/footer_inicio.php");
					exit;
						
			}
			else
			{
			cuadro_error(mysql_error());
			}
		//////////////

		
}

?>
<form action="act_tratamiento.php" method="post">
	<table align="center" class="tabla">
		<tr>
			<td colspan="2" align="center">Seleccione el TRATAMIENTO DEL AGUA</td>
			<tr>
			<?php
			echo '<td>
				
					<select name="ttratamiento_id" id="ttratamiento_id" >
					';	
					//listamos grupos para componer el select
					$consulta_uoi = mysql_query("SELECT * FROM ttratamiento ORDER BY ttratamiento_descripcion");
					$n_uoi = mysql_num_rows($consulta_uoi);
					for($d=0;$d<$n_uoi;$d++)
					{
					$reg_consulta_uoi = mysql_fetch_array($consulta_uoi);
					echo '<option value="'.$reg_consulta_uoi['ttratamiento_id'].'">'.$reg_consulta_uoi['ttratamiento_descripcion'].' </option>';
					}
				echo '	
				</select>
			
			</td>';
			?>
			<td><input type="submit" value="Buscar"></td>
			</tr>
		</tr>
	</table>
</form>
<?php
//busqueda en la base de datos
if($_REQUEST["ttratamiento_id"]!="")
{
$result=mysql_query("select * from ttratamiento where ttratamiento_id='".quitar($_REQUEST["ttratamiento_id"])."' ",$con);
if(mysql_num_rows($result) == 1)
{
$ttratamiento_id=mysql_result($result,0,"ttratamiento_id");
$ttratamiento_descripcion=mysql_result($result,0,"ttratamiento_descripcion");
echo '<br />';
?>

<form name="registro" action="act_tratamiento.php" method="post" enctype="multipart/form-data">
	
	<table width="650" align="center" class="tabla">
		<tr>
			<td class="tdatos" colspan="2" align="center"><h3>DATOS DEL TRATAMIENTO DEL AGUA</h3></td>
		</tr>
		<tr>
			<td class="tdatos">Codigo</td>
			<td><input type="text" name="ttratamiento_id" readonly="readonly" value="<?php echo $ttratamiento_id; ?>" size="60" /></td>
		</tr>
		<tr>
			<td class="tdatos">Nombre del TRATAMIENTO DEL AGUA</td>
			<td><input type="text" name="ttratamiento_descripcion" value="<?php echo $ttratamiento_descripcion; ?>" size="60" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="acc" value="Guardar">    
			&nbsp; 
		<input type="submit" name="del" value="Eliminar" onclick="confirmation();"></td>
		</tr>
	</table>
</form>
<?php
}else{
	echo "<br>";
	cuadro_error("TRATAMIENTO DEL AGUA No Encontrado <b><a href=reg_tratamiento.php  target=\"_self\">    Ir a Registrar</a></b>");	
}
}
?>

<?php
 echo "<br><br><br><br><br>";
require("../theme/footer_inicio.php");
?>
