<?php

//Select Tabel User dari database

$nomor = 1;

echo $nomor;

include '../koneksi database.php';

$query_mysql = mysqli_query($mysqli, "SELECT * FROM customer ")or die (mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
  ?>

<tr>
 <td><?php echo $nomor++; ?></td>
 <td><?php echo $data['nama']; ?></td>
 <td><?php echo $data['username']; ?></td>
 <td><?php echo $data['password']; ?></td>
 <td><?php echo $data['email']; ?> </td>

<?php } ?>

</tr>