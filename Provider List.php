<?php
		
		
		echo "<h1>Lista de Proveedores</h1>";
		include 'Conectar.php';

		$sql = "SELECT * FROM proveedor";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    echo '<table>';
		    while($row = $result->fetch_assoc()) {
		    	echo'<tr>';
			        echo'<th>'.$row["proNombre"].'</th>';
			        echo'<th>'.$row["telefono"].'</th>';
			        echo'<th>'.$row["CIF"].'</th>';
			        echo'<th>'.$row["direccion"].'</th>';
			        //echo'<th><button onclick="'.mostrarProductos().'">Mostrar Productos</button></th>';
			        echo'<th><a href="Product List.php?id='.$row["idproveedor"].'">hola</a></th>';

		        echo'</tr>';
		    }
		    echo '</table>';
		} else {
		    echo "0 results";
		}

		function mostrarProductos(){
			echo "hola <br>" ;
		}

		$conn->close();

?>