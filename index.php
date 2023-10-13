<?php 
require 'function.php';

$buku = query("SELECT * FROM bukuku");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Punya Nabila</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">10 Buku Populer
                </div>
                <table class="table table-sm table-dark">
  <thead>
    
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Kategori</th>
      <th scope="col">Gambar</th>
    </tr>
  </thead>
  <?php $i = 1; ?>
    <?php foreach ($buku as $row) :?>
  <tbody>
    <tr>
      <td><?= $row["id"]; ?></td>
      <td><?= $row["judul"]; ?></td>
      <td><?= $row["penulis"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td><?= $row["kategori"]; ?></td>
      <td><?= $row["gambar"]; ?></td>
      <td>
        <a href="">Ubah</a>
        |
        <a href="">Hapus</a>
      </td>
    </tr>
    <?php $i++; ?>
        <?php endforeach ?>
  </tbody>
</table>
     


    </body>
</html>