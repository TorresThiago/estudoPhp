<?PHP

$conn = new mysqli("localhost", "root","", "dbphp7");

if ($conn->connect_error){
    echo "Error: " . $con->connect_error;
}

$result = $conn->query("select * from tb_usuarios order by des_login");

$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data,$row);
    //var_dump($row);
}

echo json_encode($data);

?>