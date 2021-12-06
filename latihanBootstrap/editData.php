<?php

include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM user WHERE nim = $id LIMIT 1";

  $result = mysqli_query($connect, $query);

  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit Data</title>
     <!-- Menyisipkan Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA MAHASISWA
            </div>
            <div class="card-body">
              <form action="updateData.php" method="POST">
                
                <div class="form-group">
                  <label>Nim</label>
                  <td> <input type="number" name="nim" value="<?php echo $row['nim'];?>"> </td>
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <td> <input type="text" name="nama" value="<?php echo $row['nama'];?>"> </td>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <td> <input type="text" name="telepon" value="<?php echo $row['telepon'];?>"> </td>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <td> <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"> </td>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>