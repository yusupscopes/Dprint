<?php
require_once "core/init.php";

if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}

$super_user = $login = false;

require_once "view/header.php";


if ( isset($_SESSION['user']) ) {
  $login = true;
  if ( cek_status($_SESSION['user']) == 1) {
    $super_user = true;
  }
}



?>
<div class="">
  <div class="row valign-wrapper">
    <div class="col s2 valign">
      <div class="collection">
          <?php if($super_user == true) {?>
          <a href="#" class="collection-item">Tambah Percetakan</a>
          <a href="#" class="collection-item">List Percetakan</a>
          <a href="#" class="collection-item">Cetak Laporan</a>
        <?php } ?>
        <a href="edit.php" class="collection-item">Edit Percetakan</a>
        <a href="logout.php" class="collection-item">Logout</a>
      </div>
    </div>

    <div class="col s10">
      <h4>Halo <?=$_SESSION['user']; ?>, selamat datang!</h4>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 require_once 'view/footer.php';
 ?>
