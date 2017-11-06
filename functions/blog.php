<?php
//untuk menampilkan data
function tampilkan(){
  $query = "SELECT * FROM tbl_percetakan ORDER BY id_percetakan DESC";
  return tampil_data($query);
}

//utk menampilkan data berdasarkan id
function tampilkan_per_id($id){
  $query = "SELECT * FROM tbl_percetakan WHERE id_percetakan=$id";
  return tampil_data($query);
}

function tampilkan_per_user_id($id_user){
  $query = "SELECT * FROM tbl_percetakan WHERE id_user=$id_user";
  return tampil_data($query);
}


//fungsi untuk menjalankan query dari menampilkan data dan hasil_cari
function tampil_data($query){
  //global $link agar variabel $link bisa diakses dari mana saja scope nya.
  global $link;
  if($result = mysqli_query($link, $query) or die('gagal menampilkan data')){
    return $result;
  }
}



function tambah_data($nama, $website, $alamat, $telp, $lat, $lng, $nama_file, $id_user){
  global $link;
  $nama    = escape($nama);
  $website = escape($website);
  $alamat  = escape($alamat);
  $telp    = escape($telp);
  $lat     = escape($lat);
  $lng     = escape($lng);
  // $last_id = mysqli_insert_id($link);

  $query = "INSERT INTO tbl_percetakan (nama_percetakan, website, alamat, telp, lat, lng, foto, id_user) VALUES ('$nama','$website','$alamat','$telp','$lat','$lng','$nama_file', $id_user)";
  return run($query);
}

function edit_data($nama, $website, $alamat, $telp, $lat, $lng, $nama_file, $id_user){
  global $link;
  $nama    = escape($nama);
  $website = escape($website);
  $alamat  = escape($alamat);
  $telp    = escape($telp);
  $lat     = escape($lat);
  $lng     = escape($lng);

  $query = "UPDATE tbl_percetakan SET nama_percetakan='$nama', website='$website', alamat='$alamat', telp='$telp', lat='$lat', lng='$lng', foto='$nama_file' WHERE id_user=$id_user";
  return run($query);

}

//utk menjalankan query
function run($query){
  global $link;

  if (mysqli_query($link, $query)) return true;
    else return false;
}


//utk mencegah sql injection
function escape($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}


?>
