<?php
		
		echo "<h1>Lista de productos</h1>";
		include 'Conectar.php';

		mysqli_query($conn,"INSERT INTO productos (nombre,precio,idproveedor,idiva) VALUES ('CONOS CHOCOLATE', '1.15', 1, 1)");

		$sql = "SELECT * FROM productos where idproveedor = '".$_GET['id']."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    echo '<table>';
		    while($row = $result->fetch_assoc()) {
		    	echo'<tr>';
			        echo'<th>'.$row["nombre"].'</th>';
			        echo'<th>'.$row["precio"].'</th>';
		        echo'</tr>';
		    }
		    echo '</table>';
		} else {
		    echo "0 results";
		}


?>