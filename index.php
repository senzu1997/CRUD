<?php
include "./routes/routes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>
</head>

<body>
    <div style="margin-top:100px" class="container">
<form action="" method="post">
    <div class="col-7">
    <div class="mb-3">
    <label>The name of the club</label>
    <input type="text" class="form-control" placeholder = "Example : Real Madrid" name = "name" value= "<?= (isset($_GET['edit'])) ? $club->name : "" ?>">
  </div>
  <div class="mb-3">
    <label >The country of the club</label>
    <input type="text" class="form-control" placeholder = "Example : Spain" name = "country" value= "<?= (isset($_GET['edit'])) ? $club->country : ""  ?>"> 
  </div>
  <div class="mb-3">
    <label >The budget of the club</label>
    <input type="number" class="form-control" placeholder = "Example : 1.0"  name="budget" value= "<?= (isset($_GET['edit'])) ? $club->budget : "" ?>">
  </div>
  <div class="mb-4">
    <input type="checkbox" <?=$checked ?>  class="form-check-input" id="exampleCheck1"name = "fromEurope">
    <label class="form-check-label" for="exampleCheck1">Is it from Europe?</label>
  </div>
  <?php if(isset($_GET['edit'])){?>
    <input type="hidden" name="id" value = <?=$club->id?>>
    <button type="submit" name="update" class="btn btn-success">Update</button>
  <?php }else{ ?>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
  <?php } ?>
    </div>
 
</form>



    <div class="col-10 mt-4">  
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Club's name</th>
        <th scope="col">Club's country</th>
        <th scope="col">Club's budget (billions)</th>
        <th scope="col">Is it European club?</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clubs as $club) { ?>
            <tr>
        <td><?= $club->name ?> </td>
        <td><?= $club->country ?> </td>
        <td><?= $club->budget ?> </td>
        <td><?= ($club->isEuropean) ? 'Yes' : 'No' ?> </td>
        <form action="" method="GET">  
      <td> 
      <input type="hidden" name="id" value ="<?= $club->id?>">
      <td> <button class="btn btn-warning" name="edit" type="submit" >Update</button></td>
    </td>
        </form>
        <form action="" method="POST">  
      <td> 
      <input type="hidden" name="id" value ="<?= $club->id?>">
        <button class="btn btn-danger" name="destroy" type="submit" >Delete</button>
    </td>
        </form>
      <?php  } ?>
        
    
        </tr>
    </tbody>
</table></div>
  
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</body>
</html>