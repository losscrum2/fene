<?php
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header('Content-type: application/vnd.ms-excel;charset=utf8_decode()');
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=list_empresa_todos.xls");
?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
include('funciones.php');
require('config.php');
conecta();
//$coord = $_GET['p1'];
$sucursal_id=$_GET['p1'];
$estado=$_GET['p2'];
$ini=$_GET['p3'];
$fin=$_GET['p4'];

$sql = "
SELECT
                       tseguimientoemp.*,
			tempresa.nombre,sucursal.sucursal_nombre
			
			FROM
                           tseguimientoemp
INNER JOIN
			tempresa on tseguimientoemp.id_empresa=tempresa.id_empresa
INNER JOIN
			sucursal on tempresa.id_sucursal=sucursal.sucursal_id
where tseguimientoemp.asunto LIKE  'V%'
";
$result=mysql_query($sql);
 
?>
 
<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
						<td>CÓDIGO</td>
						<td>FECHA</td>
						<td>CONTACTO</td>
						<td>ASUNTO</td>
						<td>EMPRESA</td>
						<td>SUCURSAL</td>
	
</TR>
<?php
while($row = mysql_fetch_array($result)) 
{
printf("<tr>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s</td>
</tr>"

,$row["id_seguimientoemp"],$row["fecha"],$row["contacto"],$row["asunto"],$row["nombre"],
$row["sucursal_nombre"]

);
		
}
mysql_free_result($result);

?>
</table>
</body>
</html>