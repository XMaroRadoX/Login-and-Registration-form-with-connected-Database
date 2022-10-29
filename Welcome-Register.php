<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap5/src/css/style.css" />
    <title>Welcome</title>
</head>

<body>


    <div class="row justify-content-center align-items-center inner-row">
        <div class="col-lg-5 col-md-7">
            <div class="form-box p-md-5 p-3" id="login-form">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">
                        <?php
                        $server_name = 'localhost';
                        $uname = 'root';
                        $upassword = '';
                        $db_name = 'registration';
                        $mysqli = mysqli_connect($server_name, $uname, $upassword, $db_name);
                        if (!$mysqli) {
                            die('No connection:' . mysqli_connect_error());
                        }
                        $emailSignup = $_POST['email-registration'];
                        $passwordSignup = md5($_POST['password-registration']);
                        $name = $_POST['username'];



                        $query = "SELECT * FROM user WHERE email = '$emailSignup'";
                        $result = mysqli_query($mysqli, $query);

                        if (mysqli_num_rows($result) > 0) {
                            header('index.php?errorSignup=yes');
                            echo $emailSignup;
                            echo "<br>";
                            echo "User already exists";
                        } else {
                            $insert = "INSERT into user (email,name,password) values('$emailSignup', '$name', '$passwordSignup')";
                            $res2 = mysqli_query($mysqli, $insert);
                            echo "Welcome $name";
                        }
                        ?>
                    </h2>
                    <br>

                </div>
            </div>
        </div>
    </div>







    <!-- ################# Background #################-->
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- ###################################-->


    <!-- <script src="control.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>