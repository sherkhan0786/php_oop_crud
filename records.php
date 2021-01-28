<?php
include_once 'header.php';
include_once 'model.php';

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $mod = new Model();
  $rows = $mod->fetch();
  $counter = 1;
    if(!empty($rows)){
      foreach($rows as $row){
  ?>
    <tr>
      <th scope="row"><?php echo $counter++ ?>.</th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td>
      <a href="read.php?id=<?php echo $row['id'] ?>" class="badge bg-info text-dark text-decoration-none">Read</a>
      <a href="delete.php?id=<?php echo $row['id'] ?>" class="badge bg-danger text-dark text-decoration-none">Delete</a>
      <a href="edit.php?id=<?php echo $row['id'] ?>" class="badge bg-success text-dark text-decoration-none">Edit</a>
      </td>
    </tr>
    <?php
    }
  }else{
    echo "No data Found";
  }
    ?>
  </tbody>
</table>

<?php include_once 'footer.php' ?>