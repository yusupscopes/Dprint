<?php
require_once 'core/init.php';

$error ='';

//redirect kalau user sudah login
if(isset($_SESSION['user'])) {
  header('Location: profile.php');
}

//validasi register
if (isset($_POST['login'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass)) ){

    if ( cek_nama($nama) != 0) {
      // die('nama tersedia');
      if(cek_data($nama, $pass)) redirect_login($nama);
      else $error = "nama atau password ada yang salah";

    }else $error = "nama belum terdaftar";

  }else $error = "nama atau password tidak boleh kosong";
}

require_once 'view/header.php';
?>

<br><br>
<div class="container">
  <div class="row">
    <div class="col s12">
      <p>Agar dapat menambahkan percetakan, lakukan login terlebih dahulu.</p>
      <p>belum mempunyai akun ? <a href="register.php">Klik Disini</a></p>
      <br>
      <?php if($error !=''){ ?>
        <div id="error">
          <?= $error; ?>
        </div>
      <?php } ?>
    </div>
  </div>
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
            <input class="btn waves-effect waves-light" type="submit" name="login" value="Login">
          </div>
        </div>

      </form>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of container -->
<br><br>



<?php require_once 'view/footer.php' ?>
