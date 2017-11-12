<?php 
    //sacamos la edad introducida
    if ($_POST['ID']){
	    

		$ID = $_POST['ID'];
		$Nombre = $_POST['Nombre'];
		$telefono = $_POST['telefono'];
		$CIF = $_POST['CIF'];
		$direccion = $_POST['direccion'];
		
		include '../Conectar.php';
		$sql = "INSERT INTO proveedor(idproveedor,proNombre,telefono,CIF,direccion)VALUES 
		(". $ID .",'" . $Nombre . "','" . $telefono . "'," . $CIF . "," . $direccion.");";
		$result = $conn->query($sql);

	}
?>