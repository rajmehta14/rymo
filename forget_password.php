<?php
require('connection.php');
require('forgetpw.php');

$un=$_POST['un'];
$re=$_POST['re'];
$confirm=$_POST['confirmpw'];



if(isset($_POST['confirm'])){

    $query="SELECT * FROM `registeredusers` WHERE username='$_POST[un]'";
    $result = mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result)>0){
    
            $result_fetch=mysqli_fetch_assoc($result);
    
            if($result_fetch['username']==$_POST['un']){
               if($re==$confirm){
                
                    
        
                $password=password_hash($_POST['re'],PASSWORD_BCRYPT);
                $sql="UPDATE `registeredusers` SET `password` = '$password'  WHERE `registeredusers`.`username` = '$un'";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo"
                <script>
                    window.alert('password change');
    
                    
        
                </script>";

                }
                else{
                    echo"
                <script>
                    window.alert('password not mchange');
    
                    
        
                </script>";

                }


               }
               else{
                echo"
                <script>
                    window.alert('assword not match');
    
                    
        
                </script>";

               }
            }
    
            else{
                echo"
                <script>
                    window.alert('username not match');
    
                    
        
                </script>";
            }
    
        }
        else{
            echo"
                <script>
                    window.alert('username not match');
    
                    
        
                </script>";
        }

    }
}

 
?>