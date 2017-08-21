<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "list";


foreach($db as $key => $value){
    
define(strtoupper($key), $value);
    
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($connection){
   
  // echo "connected";   
}

?>

<html>
<head>
    <style>
        table {
            border-collapse: separate;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        th {
            background-color: #006666;
            color: white;
        }
    </style>
</head>

<body>

	<h1 style="text-align:center">REGISTER</h1>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>ROLE</th>

			</tr>
		</thead>

		<tbody>

			<?php
    
	$query = "SELECT * FROM list";
    $list_query = mysqli_query($connection, $query);
		
    while($row = mysqli_fetch_assoc($list_query)) {
    	
		$id = $row['id'];
		$name = $row['name'];
		$role = $row['role'];
		
			echo "<tr>";
		
			echo "<td>{$id}</td>";
			echo "<td>{$name}</td>";
			echo "<td>{$role}</td>";
		
			echo "</tr>";
	}
			
?>
		</tbody>
	</table>

</body>

</html>
