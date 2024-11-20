<?php
//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){
//cek username & password
if($_POST["username"] == "admin" && $_POST["password"] == 
   "123" ) {
//jika benar , redirect ke halaman admin
header("location: admin.php");
exit;
   } else {
//jika salah tampilkan pesan kesalahan
     $eror = true;

 }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login bro</h1>
    <?php if( isset($error)): ?>
    <p style="color: red; font-style: italic;">username/password salah!!!</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">
         <li>
            <label for="user">Username :</label>
            <input type="text" name="username" id="user">
         </li>
         <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">gass</button>
        </li>


    </form>
</ul>
</body>
</html>