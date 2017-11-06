<?php
require_once 'core/init.php';
require_once 'view/header.php';

$error="";

if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}

$id_user = cek_id($_SESSION['user']);

$article = tampilkan_per_user_id($id_user);
  // die(print_r($article));
  while($row = mysqli_fetch_assoc($article)){
    $nama     = $row['nama_percetakan'];
    $website  = $row['website'];
    $alamat   = $row['alamat'];
    $telp     = $row['telp'];
    $lat      = $row['lat'];
    $lng      = $row['lng'];
  }



if( isset($_POST['submit']) ){
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
    if (edit_data($nama, $website, $alamat, $telp, $lat, $lng, $nama_file, $id_user)) {
        header('Location: lokasi.php');
    }else {
        $error = "ada masalah saat update data";
    }
  }else {
    $error = "Data harus diisi dengan lengkap";
  }
}


// die(print_r($nama."<br>".$website."<br>".$alamat."<br>".$telp."<br>".$lat."<br>".$lng));


?>

<div class="row">
  <div class="col s2">
    <div class="collection">
      <a href="edit.php" class="collection-item">Edit Percetakan</a>
      <a href="logout.php" class="collection-item">Logout</a>
    </div>
  </div>

  <div class="col s10">

  <div id="error"><?=$error ?></div><br>
  <div class="row">
    <div class="col s12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12">
            <input id="nama" type="text" name="nama" value="<?=$nama;?>">
            <label for="nama">Nama Percetakan</label>
          </div>

          <div class="input-field col s12">
            <input id="website" type="text" name="website" value="<?=$website;?>">
            <label for="website">Website</label>
          </div>

          <div class="input-field col s12">
            <textarea id="alamat" class="materialize-textarea" name="alamat"><?=$alamat;?></textarea>
            <label for="alamat">Alamat</label>
          </div>

          <div class="input-field col s12">
            <input id="telp" type="text" name="telp" value="<?=$telp;?>">
            <label for="telp">Telp</label>
          </div>

          <div class="input-field col s12">
            <input id="lat" type="text" name="lat" value="<?=$lat;?>">
            <label for="lat">Latitude</label>
          </div>
          <div class="input-field col s12">
            <input id="lng" type="text" name="lng" value="<?=$lng;?>">
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
            <input class="btn waves-effect waves-light" type="submit" name="submit" value="Update">
          </div>
        </div>

      </form>
    </div>

  </div>
  </div>

</div><!--end of row-->








<?php require_once 'view/footer.php' ?>
