<?php
require_once 'core/init.php';
require_once 'view/header.php';

$error="";
$id = $_GET['id'];
if( isset($_GET['id']) ){
  $percetakan = tampilkan_per_id($id);
  while($row = mysqli_fetch_assoc($percetakan)){
    $nama       = $row['nama_percetakan'];
    $website    = $row['website'];
    $alamat     = $row['alamat'];
    $telp       = $row['telp'];
    $foto       = $row['foto'];
  }
}

?>
<br><br>
<div class="container">
  <div class="row valign-wrapper">
    <div class="col s3">
      <img src="<?php echo "uploads/".$foto;?>" alt="" class="responsive-img z-depth-2">
    </div>

    <div class="col s9 valign center-align">
      <h3><?=$nama;?></h3>
    </div>
  </div>

  <div class="row valign-wrapper">
    <div class="col s3">
      <p>Website</p>
    </div>

    <div class="col s9 valign center-align">
      <p><?=$website;?></p>
    </div>
  </div>

  <div class="row valign-wrapper">
    <div class="col s3">
      <p>Alamat</p>
    </div>

    <div class="col s9 valign center-align">
      <p><?=$alamat;?></p>
    </div>
  </div>

  <div class="row valign-wrapper">
    <div class="col s3">
      <p>Telp</p>
    </div>

    <div class="col s9 valign center-align">
      <p><?=$telp;?></p>
    </div>
  </div>

</div>











<?php require_once 'view/footer.php' ?>
