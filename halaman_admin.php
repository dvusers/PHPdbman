<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin</title>
    <link rel="shortcut icon" type=image/png" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="admin2.css">
<style type="text/css">
    @font-face{
        font-family:"product sans";
        src:url('ProductSansBold.ttf');
    }
    @font-face{
        font-family:"arial";
        src:url('arial.ttf');
    }
    </style>
</head>
<body bgcolor="#fff">

<div class="judul">        
<br/>
<br/>
<h1>Data Pengguna</h1>


</div> 

<div class="pesan">
    <?php 
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";       
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    </div>
    <br/>
        
    </div> 
    <br/>
    
    </a>

    <center><table bgcolor=white style="color:black"; class="table">
        <tr>
            <th><br/>No<br/><br/></th>
            </div>
            <th>Nama</th>
            <th>Tempat lahir</th>
            <th>Alamat</th>
            <th>Opsi</th>
        
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM data_siswa")or die(mysqli_error($host));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysqli)){
        ?>
 
 
            <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tempat_lahir'];?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
            
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>                    
            </td>
            </tr>
        
        <?php } 
        ?>
    </table></center>
</body>
</html>
    
<br/>
<br/>
        


<center><form action="logout.php"><input type="submit" class="logout" value="Logout"/><form/></center>&nbsp&nbsp
<center><form> <input type="button" value="Tambah Data" class="tbh" onclick="window.location.href='input.php'"/><form/></center>&nbsp&nbsp


<div class="tanggal">
<br/>

<script>
  function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>

<b><?php  date_default_timezone_set('Asia/jakarta');echo $tanggal=date('d-m-Y');?></b>
<div/>
</body>
</html>