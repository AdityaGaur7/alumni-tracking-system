               <!DOCTYPE html>
               <html lang="en">
               <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
               </head>
               <body>
              
               
               <?php
               $fname=$_POST['fn'];
                $lname=$_POST['ln'];
                $dob=$_POST['dob'];
                $uni=$_POST['uni'];
                $pos=$_POST['pos'];
                $dep=$_POST['dep'];
                $email=$_POST['em2'];
                $num=$_POST['no'];
                $pass=$_POST['pass'];
                 $cpass=$_POST['cpass'];
                
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

                $sql="INSERT INTO `tbl1`(`fname`,`lname`,`dob`,`university`,`position`,`dept`,`email`,`phone`,`password`,`cpassword`) VALUES('$fname','$lname','$dob','$uni','$pos','$dep','$email','$num','$pass','$cpass')";

                if(mysqli_query($conn,$sql)){
                    echo "done";

                }else{
                    echo "failed".mysqli_connect_error($conn);
                }
                mysqli_close($conn);
                ?>
        
                
               </body>
               </htl>