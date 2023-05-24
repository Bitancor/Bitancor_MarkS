<?PHP
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reg";
   
    if(isset($_POST['sub'])){
        $con = mysqli_connect($servername,$username,$password,$dbname);
        
        $getusername=$_POST['getusername'];
        $getpassword=$_POST['getpass'];

        $sql1="select * from registration where name = '$getusername' and password = '$getpassword';";
        $sqlres=mysqli_query($con, $sql1);
        $countrows=mysqli_num_rows($sqlres);

        if($countrows == 0){
            echo '<script>
                window.location.href = "login.html";
                alert("Account not available. Please Sign In")
            </script>';
        }
        else{
            header("location: home.html");
        }
    }
?>