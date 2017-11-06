<?php

function register_user($nama, $pass){
  # keyword global akan membuat variabel $link bisa diakses dari mana saja. ex: $_POST, $_SERVER etc.
  global $link;

  #mysqli_real_escape_string untuk mencegah sql injection
  $nama = escape($nama);
  $pass = escape($pass);


  #password_hash() untuk mengenkrip password dari user
  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $query = "INSERT INTO tbl_user (username, password) VALUES ('$nama', '$pass')";

  if( mysqli_query($link, $query) ) {
    /*return true agar pada halaman pemanggil fungsi register_user ini jika melakukan pengecekan dengan if maka akan masuk ke blok kode yang true menurut if nya.*/
    return true;
  }else {
    return false;
  }
}


//utk menguji nama kembar di register dan login
function cek_nama($nama){
  global $link;
  $nama = escape($nama);

  $query = "SELECT * FROM tbl_user WHERE username = '$nama'";

  if ( $result = mysqli_query($link, $query) ) return mysqli_num_rows($result);
}

//untuk login
function cek_data($nama, $pass){
  global $link;

  #mysqli_real_escape_string untuk mencegah sql injection
  $nama = escape($nama);
  $pass = escape($pass);

  $query  = "SELECT password FROM tbl_user WHERE username='$nama'";
  $result = mysqli_query($link, $query);
  $hash = mysqli_fetch_assoc($result)['password'];

  if ( password_verify($pass, $hash) ) return true;
  else return false;
}

function redirect_login($nama){
  $_SESSION['user'] = $nama;
  header('Location: profile.php');
}

//fungsi utk mengecek status user 0 atau 1
function cek_status($username){
  global $link;
  $nama = escape($username);

  $query = "SELECT status FROM tbl_user WHERE username='$nama'";

  if ($result = mysqli_query($link, $query)) {
    while($row = mysqli_fetch_assoc($result)){
      $status = $row['status'];
    }
    return $status;
  }

}

function cek_id($username){
  global $link;
  $nama = escape($username);

  $query = "SELECT id_user FROM tbl_user WHERE username='$nama'";

  if ($result = mysqli_query($link, $query)) {
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id_user'];
    }
    return $id;
  }

}
?>
