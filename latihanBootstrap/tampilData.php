<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menampilkan Data</title>
        <!-- Menyisipkan Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    </head>
    </head>
<body>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA MAHASISWA
            </div>
            <div class="card-body">
              <a href="tambahData.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA </th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>

                <?php 

                  include('koneksi.php');
                  $query = mysqli_query($connect,"SELECT * FROM user");
                  while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $row['nim'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['telepon'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td class="text-center">
                        <a href="editData.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="hapusData.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.3.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>
</html>