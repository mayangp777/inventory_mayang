

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href='../barang/index.php'>Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='../jenis/index.php'>Jenis</a>
        </li>
      </form>
    </div>
  </div>
</nav>

  <div class="container">
    <h1>Edit Data Jenis</h1>
    <br>
    <?php
        include '../../config/koneksi.php';
        $id_jenis=$_GET['id_jenis'];
        $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
        $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="text" class="form-control" name="id_jenis"
    value="<?php echo $result['id_jenis']?>" id="exampleInputPassword1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Jenis</label>
    <input type="text" class="form-control" name="nama_jenis"
    value="<?php echo $result['nama_jenis']?>" id="exampleInputPassword1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</body>
</html>


