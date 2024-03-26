<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Halaman Login</h1></title>
    <style>
      body {
        background-color: azure;
      }
      .login {
        text-align: center;
      }
      .login form {
        display: inline-block;
      }
      .login label {
        display: block;
        margin-top: 10px;
      }
      .login input[type="text"],
      .login input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
      }
      .login input[type="submit"] {
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
  <link rel="stylesheet" href="tugas akhir.css" />
    <div class="Fcontainer">
    <nav class="navbar">
    <a href="versi admin landing page.php">halaman utama</a>
      <a href="versi admin layanan.php">layanan</a>
      <a href="versi admin tentang kami.php">tentang kami</a>
      <a href="versi admin register.php">register</a>
      <a href="versi admin halaman login.php">login</a>
      <a href="CRUD admin.php">tabel admin</a>
    </nav>
    </div>


    <div class="login">
      <h1>Halaman Login</h1>
      <form action="php login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" />
      
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password"/>

        <input type="submit" name="submit" value="Login"/>
      </form>
      </form>
    </div>
    <footer>
      <p>&copy; 2023 Painture. All rights reserved.</p>
        </footer>

        <style>
        footer {
            background-color: rgb(203, 243, 249);
  color: black;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
  margin-top: 10px;
}
</style>
        
  </body>
</html>