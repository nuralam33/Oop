<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <div class="container mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header">Users List
                        <a href="create.php" class="btn btn-sm btn-success float-end" >Add User</a>
                    </div></center>
                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            include 'database.php';
                            $model = new Model();
                            $rows = $model->getAllData();
                            $i = 1;
                            if(!empty($rows)){
                                foreach($rows as $row){

                        ?>  
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td>

                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">Delete</a>
                                
                                </td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
  </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

