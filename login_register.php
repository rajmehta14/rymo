<?php

require('connection.php');
$name=$_POST['name'];
$username =$_POST['username'];
$email=$_POST['email'];
session_start();

if(isset($_POST['login'])){

    $query="SELECT * FROM `registeredusers` WHERE username='$_POST[email_username]' OR email='$_POST[email_username]'";
    $result = mysqli_query($conn,$query);


    if($result){
        if(mysqli_num_rows($result)==1){

            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password'])){

                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                $user=$_SESSION['username'];
                header("location: index.php");
                $sql="create table $user(sno INT AUTO_INCREMENT,product VARCHAR(50) NOT NULL,  
                Quantity INT NOT NULL,primary key (sno))";  
                $result=mysqli_query($conn,$sql);


            }
            else{
                echo"
                <script>alert('password incorrect');
    
                window.location.href='index.php';
                
                </script>";

            }

        }
        else{
            echo"
            <script>alert('email or username not registered');

            window.location.href='index.php';
            
            </script>";
        }

    }
    else{
        echo"
                <script>alert('cannot run query');
    
                window.location.href='index.php';
                
                </script>";

    }


}







if(isset($_POST['register'])){

    $user_exist_query="SELECT * FROM `registeredusers` WHERE username='$_POST[username]' OR email='$_POST[email]'";

    $result= mysqli_query($conn,$user_exist_query);
    
     if($result){
    
    
        if(mysqli_num_rows($result)>0){
    
            $result_fetch=mysqli_fetch_assoc($result);
    
            if($result_fetch['username']==$_POST['username']){
                echo"
                <script>
                        alert('$result_fetch[username] - username already taken');
    
                         window.location.href='index.php';
        
                </script>";
    
            }
    
            else{
                echo"
                <script>
                    window.alert('email not match');
    
                    window.location.href='index.php';
        
                </script>";
            }
    
        }

    
        else{

            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `registeredusers`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
    
            if(mysqli_query($conn,$query)){
                echo"
                <script>alert('Registration Sucessful');
    
                window.location.href='index.php';
                
                </script>";
    
            }
            else{
                echo"
                <script>alert('cannot insert data');
    
                window.location.href='index.php';
                
                </script>";
            }
        }
    
    }
    
    else
    {echo"
        <script>alert('cannot run query');
    
        window.location.href='index.php';
        
        </script>";
    }
}
?>




