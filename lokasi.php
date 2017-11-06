<?php
require_once 'core/init.php';
require_once 'view/header.php';

$list_percetakan = tampilkan();
// die(print_r($list_percetakan));


?>
<br>
<div class="container">
  <p>Kamu mau suggest lokasi percetakan kepada kami?</p>
  <a href="daftar.php" class="btn waves-effect waves-light">
    <i class="material-icons left">add</i> Suggest percetakan
  </a>
  <ul class="collection">
    <?php while($row = mysqli_fetch_assoc($list_percetakan)): ?>
      <li class="collection-item avatar">
        <img src="<?php echo "uploads/".$row['foto']; ?>" alt="" class="circle">
        <a href="single.php?id=<?=$row['id_percetakan'];?>">
          <h2 class="title" id="h2lokasi"><?=$row['nama_percetakan'];?></h2>
        </a>
        <p><?=$row['website'];?></p>
      </li>
    <?php endwhile; ?>
  </ul>

  <ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<br>



<?php require_once 'view/footer.php' ?>
