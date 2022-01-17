<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: _index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: _index.php");
    } else {
        echo "<script>alert('Email hoặc Pass không đúng.')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Đăng nhập</title>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://image.freepik.com/free-vector/character-couple-solving-puzzle-pieces-illustration_53876-32627.jpg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="" method="POST">
                        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Đăng nhập</p>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input class="form-control form-control-lg" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required />
                            <label class="form-label" for="form1Example13">Địa chỉ email</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input class="form-control form-control-lg" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Nhớ thông tin </label>
                            </div>
                            <a href="#!">Quên password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-lg btn-block" style="background-color: #ee4d2d;">Đăng nhập</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">hoặc</p>
                        </div>

                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                            <i class="fab fa-facebook-f me-2"></i>Tiếp tục với Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                            <i class="fab fa-twitter me-2"></i>Tiếp tục với Twitter</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>