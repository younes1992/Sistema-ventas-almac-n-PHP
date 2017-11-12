<?php 
    //sacamos la edad introducida
    if ($_POST['ID']){
	    

		$ID = $_POST['ID'];
		$Nombre = $_POST['Nombre'];
		$Precio = $_POST['Precio'];
		$ProveedorId = $_POST['ProveedorId'];
		$IVA = $_POST['IVA'];
		
		include '../Conectar.php';
		$sql = "INSERT INTO productos(idProductos,nombre,precio,idproveedor,idiva) VALUES 
		(". $ID .",'" . $Nombre . "','" . $Precio . "'," . $ProveedorId . "," . $IVA.");";
		$result = $conn->query($sql);

	}
?>