<?php
    include 'database.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);

    if($delete){
        echo "<script>alert('Users has been deleted')</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }

?>  