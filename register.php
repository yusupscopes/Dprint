<?php
require_once 'core/init.php';

$error='';

//redirect kalau user sudah login
if(isset($_SESSION['user'])) {
  header('Location: profile.php');
}


//validasi register
if (isset($_POST['daftar'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass)) ){

    if( cek_nama($nama) == 0){
      //memasukkan ke database
      if(register_user($nama, $pass)) redirect_login($nama);
      else $error = "gagal daftar";

    }else $error = "nama sudah dipakai user lain";

  }else $error = "nama atau password tidak boleh kosong";
}


require_once 'view/header.php';
?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col s12"><br>
      <h5 class="center">Harap mengisi field dengan lengkap</h5>
    </div>
    <?php if($error !=''){ ?>
      <div id="error">
        <?= $error; ?>
      </div>
    <?php } ?>
  </div><br>
  <div class="row">
    <div class="col s12">
      <form action="" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="username">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
          <div class="input-field col s12">
            <input class="btn waves-effect waves-light" type="submit" name="daftar" value="Daftar">
          </div>
        </div>

      </form>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of container -->
<br><br>





<?php require_once 'view/footer.php' ?>
