<?php
require_once 'core/init.php';
require_once 'view/header.php';

$error="";

if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}


if( isset($_POST['daftar']) ){
  $nama    = $_POST['nama'];
  $website = $_POST['website'];
  $alamat  = $_POST['alamat'];
  $telp    = $_POST['telp'];
  $lat     = $_POST['lat'];
  $lng     = $_POST['lng'];

  $nama_file   = $_FILES['gambar']['name'];
  $error  = $_FILES['gambar']['error'];
  $size   = $_FILES['gambar']['size'];
  $asal   = $_FILES['gambar']['tmp_name'];
  $format = $_FILES['gambar']['type'];
  $path = 'uploads/'. $nama_file;
  $time = time();
  $id_user = cek_id($_SESSION['user']);
//untuk mengetahui ekstensi dari file
// $format2 = pathinfo($nama, PATHINFO_EXTENSION);
// die($format2);

if( $error == 0){

    if ( $size < 1000000 /*satuan dalam byte == 1MB*/) {

        if( $format == 'image/png' || $format == 'image/png'){

              //kalo format nama ada yang sama maka ubah dulu namanya terus tambahin angka unique random bisa pake fungsi time()
              if(file_exists($path)){
                $path = str_replace(".png", "", $path);
                $path = $path. "_" . $time . ".png";
              }
                //mengupload
                move_uploaded_file($asal, $path);
                echo "upload berhasil";

        }elseif( $format == 'image/jpeg' ) {

              //kalo format nama ada yang sama maka ubah dulu namanya terus tambahin angka unique random bisa pake fungsi time()
              if(file_exists($path)){
                $path = str_replace(".jpg", "", $path);
                $path = $path. "_" . $time . ".jpg";
              }
                //mengupload
                move_uploaded_file($asal, $path);
                echo "upload berhasil";

        }else {
          echo "formatnya harus jpeg / png";
        }

    }else {
      echo "filenya kegedean gan";
    }

}else {
  echo "ada error gan";
}
  // die($nama."<br>".$website."<br>".$alamat."<br>".$telp."<br>".$lat."<br>".$lng);
  if ( !empty(trim($nama)) && !empty(trim($website))
    && !empty(trim($alamat)) && !empty(trim($telp))
    && !empty(trim($lat)) && !empty(trim($lng))) {
    if (tambah_data($nama, $website, $alamat, $telp, $lat, $lng, $nama_file, $id_user)) {
        header('Location: lokasi.php');
    }else {
        $error = "ada masalah saat menambah data";
    }
  }else {
    $error = "Data harus diisi dengan lengkap";
  }
}


// die(print_r($nama."<br>".$website."<br>".$alamat."<br>".$telp."<br>".$lat."<br>".$lng));


?>

<div class="container">
  <div class="row">
    <div class="col s12"><br>
      <h5 class="center">Daftarkan Percetakanmu!</h5>
    </div>
    <div id="error"><?=$error ?></div><br>
  </div>
  <div class="row">
    <div class="col s12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <input id="nama" type="text" name="nama">
            <label for="nama">Nama Percetakan</label>
          </div>

          <div class="input-field col s12">
            <input id="website" type="text" name="website">
            <label for="website">Website</label>
          </div>

          <div class="input-field col s12">
            <textarea id="alamat" class="materialize-textarea" name="alamat"></textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="input-field col s12">
            <input id="telp" type="text" name="telp">
            <label for="telp">Telp</label>
          </div>

          <div class="input-field col s12">
            <input id="lat" type="text" name="lat">
            <label for="lat">Latitude</label>
          </div>
          <div class="input-field col s12">
            <input id="lng" type="text" name="lng">
            <label for="lng">Longitude</label>
          </div>

        <div class="row">
            <div class="file-field input-field col s12">
              <div class="btn">
                <span>Foto</span>
                <input type="file" name="gambar">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
        </div>


          <div class="input-field col s12">
            <input class="btn waves-effect waves-light" type="submit" name="daftar" value="Daftar">
          </div>
        </div>

      </form>
    </div>
  </div> <!-- end of row -->
</div> <!-- end of container -->






<?php require_once 'view/footer.php' ?>
