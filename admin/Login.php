<!--
$data = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$inp = file_get_contents('database.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('database.json', $jsonData);

$inp = file_get_contents('database.json');
$tempArray = json_decode($inp);
print_r($tempArray);
print_r($tempArray[0]);
echo $tempArray[0]->name;
-->
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        if($_POST['user_pass']=="123456" && $_POST['user_name']=="chhay"){
        $_SESSION["user_name"] = $_POST['user_name'];
        //$_SESSION["name"] = $_POST['user_pass'];
        } else {
         $message = "Invalid Username or Password!";
		 echo count($_POST);
        }
    }
    if(isset($_SESSION["user_name"])) {
		header("Location:admin.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../logo.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light "><!--fixed-top-->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../">Home</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav><div class="container pt-5"></div>
    <div class="container pt-3">
  <!-- Content here -->
       <div class="row">
           <div class="col-sm-8">

             <div class="container mb-3">
                 <div class="row mb-3">
                     <div class="col">
                       <div class="container">

                         <form name="frmUser" method="post" action="">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">User Name</label>
                              <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name="user_pass" class="form-control" id="exampleInputPassword1">
							  <div id="messageshow" class="form-text"><?php if($message!="") { echo $message; } ?></div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                          </form>

                      </div>
                     </div>

                   </div>
            </div>

           </div>

           <div class="col-sm-4 border border-start-0 p-1" >
             <div class="card">
  <div class="card-header">
    Featured
  </div>
          <div class="card-body">
            <h5 class="card-title">Debug Facebook</h5>
            
            <a href="./list.php" class="btn btn-primary">List 10</a>
          </div>
        </div>
         
             
           </div>
       </div>
  </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
