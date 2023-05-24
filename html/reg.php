<?PHP
    $name = $_GET['rname'];
    $email = $_GET['remail'];
    $pass1 = $_GET['renterPass'];
    $pass2 = $_GET['rconfirmPass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con){
        die("Error : ".mysqli_connect_error());
    }
    if($pass1 == $pass2){
        $sql = "INSERT INTO `registration`(`name`, `email`, `password`) VALUES('$name','$email','$pass1');";
        if(mysqli_query($con,$sql)){
            echo '<script>
                window.location.href = "registration.html";
                alert("Registration Successful!")
            </script>';
        }
        else{
            echo '<script>
                window.location.href = "registration.html";
                alert("Something Went Wrong...")
            </script>';
        }
    }
    else {
        echo '<script>
            window.location.href = "registration.html";
            alert("Password Not Matched!")
        </script>';
    }
?>