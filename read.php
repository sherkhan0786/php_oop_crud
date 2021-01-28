<?php
    include_once 'header.php';
    include_once 'model.php';
    $id = $_REQUEST['id'];
    $rd = new Model();
    $read = $rd->read($id);

    if(!empty($read)){
?>

<div class="card mx-auto mt-5" style="width: 18rem;">
  <div class="card-header">
    Record:
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name : <?php echo $read['name'] ?></li>
    <li class="list-group-item">Email : <?php echo $read['email'] ?></li>
    <li class="list-group-item">Contact : <?php echo $read['contact'] ?></li>
    <li class="list-group-item">Password : <?php echo $read['password'] ?></li>
  </ul>
</div>
<?php
    }else{
        echo "No data Found";
    }
?>

<?php
include_once 'footer.php';
?>