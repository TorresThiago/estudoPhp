<?PHP

$conn = new mysqli("localhost", "root","", "dbphp7");

if ($conn->connect_error){
    echo "Error: " . $con->connect_error;
}

$stmt = $conn->prepare("insert into tb_usuarios (des_login, des_senha) values (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();


$login = "root";
$pass = "&&&&";

$stmt->execute();

?>