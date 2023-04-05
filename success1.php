<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
                $name=$_POST['nm1'];
                $email=$_POST['em1'];
                $phone=$_POST['ph1'];
                 $password=$_POST['ps1'];
                
                $servername="localhost";
                $username="root";
                $password="";
                $database="paridhi";
                $conn=mysqli_connect($servername,$username,$password,$database);

                if(!$conn){
                    die("failed".mysqli_connect_error());
                }else{
                    echo "successful";

                }

                $sql="INSERT INTO `tbl`(`name`,`email`,`phone`,`password`) VALUES('$name','$email','$phone','$password')";

                if(mysqli_query($conn,$sql)){
                    echo "done";

                }else{
                    echo "failed".mysqli_connect_error($conn);
                }
                mysqli_close($conn);

?>

           
                           
                
                

   
</body>
</html>