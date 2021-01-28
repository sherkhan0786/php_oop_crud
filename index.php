<?php
    include_once 'header.php';
?>
    <div class="col-md-6 mx-auto">
    
        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Contact</label>
                <input type="number" class="form-control" name="contact">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
        </form>
    <div>
    

    <?php
    include_once 'footer.php';
?>