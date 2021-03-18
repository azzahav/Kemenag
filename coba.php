<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- datatable style -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    
        <!-- bootstrap resource  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <br>
            <div class="alert alert-success">
                <h1>Latihan Membuat Multiple Select</h1>
                <p>sahretech.com Blog pemrograman | tutorial komputer | windows | android | Blog dan Wordpress</p>
            </div>
            <br>
            <form action="proseshapus.php" method="post">
                <!-- membuat tombol reset data terpilih  -->
                <a href="index.php" class="btn btn-primary">Unceklis Data Terpilih</a>
                <!-- jika tombol diklik maka akan diproses ke halaman proseshapus.php  -->
                <button class="btn btn-danger" type="submit">Hapus</button>
                <br><br>
                <table id="table_id" border=1 class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // mysqli ke database
                            include_once "./config.php";
                            // mengambil data dari tabel mahasiswa 
                            $select = mysqli_query($mysqli, "select * from pengguna");
    
                            //membuat variabell index penomoran
                            $no = 1;
    
                            //melakukan perualangan data dengan while
                            while($data= mysqli_fetch_array($select)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['nip']; ?></td>
                            <td><?php echo $data['jabatan']; ?></td>
                            <td width="20px">
                            <!-- membuat checkbox dengan name="hapus[]" tanda [] digunakan untuk menampung banyak data  -->
                                <input type="checkbox" name="hapus[]" value="<?php echo $data['idmahasiswa']; ?>">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    
        <!-- jquery datatable -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
        </script>
    
        <!-- fungsi datatable -->
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
    
        </script>
    </body>
    
    </html>