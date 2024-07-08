<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM pengunjung ORDER BY ktp DESC");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd.table.min.css'>
  <link rel="stylesheet" href="css/tabel.css">

  
</head>

<body>
  <h2>Data Pengunjung</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive" data-pattern="priority-columns">
        <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
          <caption class="text-center"><b><h4>Data Pengunjung Hotel</h4></b></caption>
          <thead>
            <tr>
                <th><center>KTP</center></th>
                <th><center>Nama</center></th>
                <th><center>Check In</center></th>
                <th><center>Check Out</center></th>
                <th><center>Kamar</center></th>
                <th><center>Action</center></th>
            </tr>
          </thead>
          <tbody>
          <?php if(mysqli_num_rows($query)>0){ ?>
            <?php
                $ktp = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><center><?php echo $data['ktp'];?></center></td>
                <td><center><?php echo $data["nama"];?></center></td>
                <td><center><?php echo $data["checkin"];?></center></td>
                <td><center><?php echo $data["checkout"];?></center></td>
                <td><center><?php echo $data["kamar"];?></center></td>
                <td>
                    <center><a href="hapus_data.php?ktp=<?php echo $data['ktp']; ?>">Hapus</a></center>
                </td> 
            </tr>
            <?php $ktp++; } ?>
        <?php } ?>
          </tbody>
        </table>
            <center>
              <a class="btn btn-sm btn-dark rounded py-2 px-4" href="logout.php"><h4>Log Out</h4></a>
            </center>
      </div>
    </div>
  </div>
</div>


<p class="p">Halaman Khusus Admin.</p>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd-table-patterns.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
