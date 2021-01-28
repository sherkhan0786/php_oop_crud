<?php
    include_once 'model.php';
    $model = new Model();
    $model->insert();
    header('location:records.php')
?>