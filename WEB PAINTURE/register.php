<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
<link rel="stylesheet" href="tugas akhir.css" />
    <div class="Fcontainer">
    <nav class="navbar">
      <a href="landing page.php">halaman utama</a>
      <a href="layanan.php">layanan</a>
      <a href="tentang kami.php">tentang kami</a>
      <a href="register.php">register</a>
      <a href="halaman login.php">login</a>
    </nav>
    </div>

    <div class="register-container" style="text-align: center">
        <h1>Halaman Register</h1>
        <form action="RegisterAction.php" method="post">
            <div class="input-group">
                <label for="email">Username</label>
                <br>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="username">Email</label>
                <br>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <br>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            
            <style>
            .input-group [type="password"]{
        padding: 10px;
        margin-top: 5px;
        width: 250px;
       
            }  
            .input-group [type="text"]{
        padding: 10px; width: 250px;
        margin-top: 5px;
        width: 250px;
            }   
            </style>

            <select name="level">
                <option value="admin">admin</option>
                <option value="user">user</option>
                <option value="artist">artist</option>
            </select>
            <input type="Submit" name="Submit">
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