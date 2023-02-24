<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
     <div class="container mt-5">
        <div class="card">
            <center><div class="card-header">Users create
            <a href="index.php" class="btn btn-sm btn-success float-end" >Users List</a>
            </div></center>
            <div class="card-body">

                <?php
                include 'database.php';
                $model = new Model();
                $insert = $model->insert();
                ?>                

            <form action= "" method="POST" >
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputPhone">
                </div>
                
                <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>


     </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>