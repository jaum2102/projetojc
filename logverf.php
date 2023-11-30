<php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "imperium";
    $conn = new mysqli($servername, $username, $password, $database) or die('erro');

    if(isset($_POST['u_id'])){

      $conn = new mysqli($servername, $username, $password, $database) or die('Erro!');
        $result = mysqli_query($conn,"SELECT * FROM users WHERE u_id='" . $_POST["u_id"] . "'");
        $row = mysqli_fetch_array($result);


        if(is_array($row)) {
          $_SESSION["u_id"] = $row['u_id'];
          header("Location:../index.php");
        } else {
          $message = "Usuário ou Senha Invalida!";
        }

?>