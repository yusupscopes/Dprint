<?php
require_once 'core/init.php';
require_once 'view/header.php';
?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Dprint</h1>
        <div class="row center">
          <h5 class="header col s12 light">Tempat mencari percetakan digital di Kota Depok</h5>
        </div>
        <div class="row center">
          <a href="#percetakan" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Lihat Selengkapnya</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="assets/img/notes.jpg" alt="Unsplashed background img 1"></div>
  </div>
<!-- header center teal-text text-lighten-2 -->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="header center teal-text text-lighten-2" id="percetakan">Beberapa Percetakan</h2>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/aladin.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Aladin<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Aladin<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan aladin.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/cano.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Cano Digital Printing<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Cano Digital Printing<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan cano.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/hafidz.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Hafidz Printing<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Hafidz Printing<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan Hafidz printing.</p>
          </div>
        </div>
      </div><!--end of column-->
      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/coqelat.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Coqelat Print<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Coqelat Print<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan coqelat.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/data.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Data Digital Print<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Data Digital Print<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan data digital print.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card small z-depth-3">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="assets/img/era.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Era Digital Print<i class="material-icons right">more_vert</i></span>
            <p><a href="#!">Lihat Detail</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Era Digital Print<i class="material-icons right">close</i></span>
            <p>Ini adalah informasi mengenai percetakan Era Digital Print.</p>
          </div>
        </div>
      </div><!--end of column-->
    </div><!--end of row-->
    <p>Klik tombol dibawah ini untuk mulai mencari</p>
    <a href="lokasi.php" class="btn waves-effect waves-light">
      <i class="material-icons left">search</i> Cari Percetakan
    </a>

  </div><!--end of container-->

  <div class="container">
    <h2 class="header center teal-text text-lighten-2">Mengapa Harus Kami</h2>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Akses Informasi Cepat</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Fokus Kepada User</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Mudah Bekerjasama</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
      <!-- Features Section -->
      <div class="row">
          <!-- <div class="col s12">
              <h2 class="header center brown-text">Fitur Dprint</h2>
          </div> -->
          <!-- <div class="col s12 m6 light">
              <ul class="collection with-header">
                  <h4 class="collection-header">Pada Dprint terdapat beberapa fitur yaitu:</h4>
                  <li class="collection-item">Halaman web yang responsive</li>
                  <li class="collection-item">Terintegrasi Google Maps</li>
                  <li class="collection-item">Melakukan suggest tempat percetakkan.</li>
              </ul>
              <p>Klik tombol dibawah ini untuk mulai mencari</p>
              <a href="lokasi.php" class="btn waves-effect waves-light">
                <i class="material-icons left">search</i> Cari Percetakan
              </a>
              <p>Kamu mau suggest lokasi percetakan kepada kami?</p>
              <a href="login.php" class="btn waves-effect waves-light">
                <i class="material-icons left">add</i> Suggest percetakan
              </a>
          </div> -->
          <div class="col s12 m12">
              <div class="section center-align">
                <div class="center-align">
                  <div id="map"></div>
                </div>
              </div>
          </div>
      </div>
      <!-- /.row -->
  </div>

<?php require_once 'view/footer.php' ?>
