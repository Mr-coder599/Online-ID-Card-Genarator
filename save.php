<?php session_start(); ?>
<?php 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "ccbd_id_card_genarator";
//    create post for all field 
if(isset($_POST['data_saved']))
{
    $fullname = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
// end of post field 
   // Create a connection
   $conn = mysqli_connect($servername, $username, "", $database);
   $query = "INSERT INTO register (fullname, gender, phone, email,password)VALUES('$fullname', '$gender', '$phone', '$email', '$password')";
   $mysqli_query_run = mysqli_query($conn, $query);
    if($query)
    {
        $_SESSION['status']="Information Saved Successfully";
        header("Location : register.php");
    }else{
        $_SESSION['status']="Data not Saved try again!! ";
        header("Location : register.php");
    }
}
?>