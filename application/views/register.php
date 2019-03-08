<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/Welcome/index">Go Smart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/tentang">Tentang Kami</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/artikel">Artikel</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/komen">Komentar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/log_in">Masuk</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/register">Daftar</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>

    <center>
      <h1>Daftar ikut bimbingan belajar Go Smart</h1>
      <form action="<?php echo base_url()?>index.php/welcome/proses_register" method="post">
        <table>
          <tr>
            <td>Nama</td>
            <td> : </td>
            <td><input type="text" name="nama_siswa"></td>
          </tr>
          

           <tr>
            <td>Tempat Lahir</td>
            <td> : </td>
            <td><input type="text" name="tempat_lahir"></td>
          </tr>

          <tr>
            <td>Tanggal lahir</td>
            <td> : </td>
            <td><input type="date" name="tgl_lahir"></td>
          </tr>

           <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><input type="text" name="alamat"></td>
          </tr>

          <tr>
            <td>Asal Sekolah</td>
            <td> : </td>
            <td><input type="text" name="asal_sekolah"></td>
          </tr>

          <tr>
            <td>Alamat Sekolah</td>
            <td> : </td>
            <td><input type="text" name="alamat_sekolah"></td>
          </tr>

          <tr>
            <td>Kelas / Jurusan</td>
            <td> : </td>
            <td><select name="kelas">
              <option value="">--Pilih--</option>
              <option value="12ipa">12 - IPA</option>
              <option value="12ips">12 - IPS</option>
              <option value="12bahasa">12 - BAHASA</option>

            </select></td>
          </tr>

           <tr>
            <td>Email</td>
            <td> : </td>
            <td><input type="text" name="email"></td>
          </tr>

          <br>

          <tr>
            <td> <button type="submit" class="btn btn-primary" name="submit">Daftar</button></td>
          </tr>

        </table>

    <br>
    <br>

    </center>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy;2019 - Bimbel Go Smart</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>