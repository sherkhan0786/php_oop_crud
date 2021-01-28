<?php
    include_once 'header.php';
    include_once 'model.php';
    $id = $_REQUEST['id'];
    $data = new Model();
    $show = $data->read($id);

    if(isset($_POST['update'])){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['password'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['password'])){
                $data1['id'] = $id;
                $data1['name'] = $_POST['name'];
                $data1['email'] = $_POST['email'];
                $data1['contact'] = $_POST['contact'];
                $data1['password'] = $_POST['password'];

                $update = $data->update($data1);

                if($update){
                    echo "<script>alert('record update successfully');</script>";
                    echo "<script>window.location.href = 'records.php';</script>";
                  }else{
                    echo "<script>alert('record update failed');</script>";
                    echo "<script>window.location.href = 'records.php';</script>";
                  }
            }
            else{
                echo "<script>alert('empty');</script>";
                // header("Location: edit.php?id=$id");
              }
        }
    }

?>

<div class="col-md-6 mx-auto">
    
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $show['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $show['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Contact</label>
                <input type="number" class="form-control" name="contact" value="<?php echo $show['contact'] ?>">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $show['password'] ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
        </form>
    <div>

<?php
    include_once 'footer.php';
?>