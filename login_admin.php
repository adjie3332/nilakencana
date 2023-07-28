<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <br>
</head>
<body align = center>
    <form action="login_admin.php" method="post">
        <h1 align = center >Login Admin<br><br></h1>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Username" required>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <br><br><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
        session_start();
        include 'koneksi.php';
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
            $cek = mysqli_num_rows($query);
            if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header("location:admin/admin.php");
            }else{
                header("location:login_admin.php");
            }
        }
?>
<script>
    alert("Selamat Datang Admin <?= $row['username']; ?>")
    window.location = "index.html";
</body>
</html>