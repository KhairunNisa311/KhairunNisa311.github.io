<html>
    <head>
        <title>Data Product</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <a href="insertForm.html"> Tambah Data </a>
        <table>
            <tr>
				<th> Foto </th>
                <th> Id </th>
                <th> Nama Produk </th>
                <th> Harga </th>
               
                <th> Aksi</th>
            </tr>

            <?php
            include "koneksi.php";
            
            $connect = mysqli_connect("localhost", "root", "", "prakwebdb");
            $query="SELECT * FROM product";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
						<td><img  width="100px" src='image/<?php echo $row["Foto"] ?>'> </td>; 
                        <td> <?php echo $row["id"] ?> </td>
                        <td> <?php echo $row["product_name"] ?> </td>
                        <td> <?php echo $row["harga"] ?> </td>
                        
                        <td>
                            
                        <a href="editForm.php?id=<?php echo $row['id']; ?>">
                        Edit &nbsp;
                    </a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>">
                Hapus</a>
                        </td>
                <?php
                }
            }
            else{
                echo "0 result";
            }
            ?>
            </tr>
        </table>
        </body>
        </html>