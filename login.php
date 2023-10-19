<?php session_start();?>
<?php 

$email = $_POST['email'];
$pass = $_POST['password'];

// database connection here 
$conn = new mysqli("localhost", "root", "", "ccbd_id_card_genarator");
if($conn ->connect_error){
    die("Field to connect :" .$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from register where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result =  $stmt->get_result();
    if ($stmt_result->num_rows > 0){
    $data= $stmt_result->fetch_assoc();
    if($data['password']=== $pass){
        //  echo "<h2> Login Successfully </h2>";
        // header("Location : index.php");
        session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: index.php"); // Replace with your dashboard page
            exit();
    }
    else{
        $_SESSION["user_id"] = $row["id"];
        header("Location: index.php"); // Replace with your dashboard page
        exit();
        //  echo "<h2> Invalid Email or password </h2>";
        // header("Location : register.php");
    }
    }
    else{
        $_SESSION["user_id"] = $row["id"];
        header("Location: register.php"); // Replace with your dashboard page
        exit();
        echo "<h2> Invalid Email or password </h2>";
        // header("Location : register.php");
    }
}
?>