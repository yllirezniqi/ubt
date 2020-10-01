<?php 

include 'partials/header.php'; 

$isAdmin = false;
if($loggedin) {-
  $isAdmin = ($_SESSION['role'] === 1) ? true : false;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'kerkopune';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
  die ('Konektimi me MySQL dështoj: ' . mysqli_connect_error());
}

$result;
if ($stmt = $con->prepare('SELECT id, img FROM gallery')) {
  $stmt->execute();

  $result = $stmt->get_result();
}
$stmt->close();

if(isset($_POST['insert'])) {
  if($_FILES["image"]["tmp_name"] !== '') {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    if($stmt = $con->prepare("INSERT INTO gallery(img) VALUES ('$file')")) {
      $stmt->execute();
      echo "
      <script>
        alert('Fotoja u ruajt me sukses.');
        location.href = 'gallery.php';
      </script>";
    } 
    else echo "<script>
      alert('Error!');
      location.href = 'gallery.php';
    </script>";
    
  }
  else {
    echo "<script>
      alert('Ju lutem, së pari zgjedhni një fotografi!');
      location.href = 'gallery.php';
    </script>";
  }
}

?>

<div id = "mesi" >
  <div class = "gallery">
    <?php 
      while($row = $result->fetch_assoc()) {
    ?>
        <figure class="gallery__item">
          <img src="data:image/jpeg;base64,<?php echo base64_encode($row['img']); ?>" class="gallery__img" alt="Image 1">
          <?php
            if($isAdmin) :
          ?>
              <div class="div-btns">
                <button onclick="location.href = 'delete.php?id=<?php echo $row['id']; ?>'">Fshije</button>
              </div>
          <?php endif; ?>
        </figure>

    <?php } ?>

    <?php 
      if($isAdmin) :
    ?>

    <form method="post" enctype="multipart/form-data">
      <figure class="gallery__item add-img">
        <!-- <h1>+</h1> -->
        <input type="file" name="image">
        <button type="submit" name="insert">Ruaj</button>
      </figure>
    </form>

    <?php endif; ?>
    <!-- <figure class="gallery__item gallery__item--2">
      <img src="images\2.png" class="gallery__img" alt="Image 2">
    </figure>
    <figure class="gallery__item gallery__item--3">
      <img src="images\3.png" class="gallery__img" alt="Image 3">
    </figure>
    <figure class="gallery__item gallery__item--4">
      <img src="images\4.png" class="gallery__img" alt="Image 4">
    </figure>
    <figure class="gallery__item gallery__item--5">
      <img src="images\5.png" class="gallery__img" alt="Image 5">
    </figure>
    <figure class="gallery__item gallery__item--6">
      <img src="images\6.png" class="gallery__img" alt="Image 6">
    </figure> -->
  </div>
</div>

<?php include 'partials/footer.php'; ?>