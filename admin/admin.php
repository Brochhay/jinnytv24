<?php
session_start();
$message="";
if(count($_POST)>0) {
        $id = strval($_POST['id']);
		$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
		$title = strval($_POST['title']);
		$article = strval($_POST['article']);
		$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
		
		
		
		//echo $type;
		if($_FILES['thumnail']['name']!='' && $id!='' && $title!=''){
			// ============= upload thumail img=====
		    $file_nameapp = $_FILES['thumnail']['name'];
			$file_nameapp = $id.".jpg";
	        $file_tmp =$_FILES['thumnail']['tmp_name'];
	        move_uploaded_file($file_tmp,"../thumail/".$file_nameapp);
			//=================Optional upload images 1-3
			if($_FILES['img1']['name']!=''){
				$text1 = strval($_POST['text1']);
				$img1tmp = $_FILES['img1']['tmp_name'];
				
				$img1name = $id."a.jpg";
				move_uploaded_file($img1tmp,"../images/".$img1name);
			}else{$img1name='';$text1='';}
			
			if($_FILES['img2']['name']!=''){
				$text2 = strval($_POST['text2']);
				$img2tmp = $_FILES['img2']['tmp_name'];
				
				$img2name = $id."b.jpg";
				move_uploaded_file($img2tmp,"../images/".$img2name);
				
			}else{$img2name='';$text2='';}
			
			if($_FILES['img3']['name']!=''){
				$text3 = strval($_POST['text3']);
				$img3tmp = $_FILES['img3']['tmp_name'];
				$img3name = $id."c.jpg";
				
				move_uploaded_file($img3tmp,"../images/".$img3name);
			}else{$img3name='';$text3='';}
			echo $id;
			//add array data to database.json file
			$data = array("id"=>$id, "type"=>$type, "category"=>$category,"vdtitle"=>$title, "maintext"=>$article, "thumnail"=>$file_nameapp,"img1"=>$img1name, "txt1"=>$text1, "img2"=>$img2name,"txt2"=>$text2, "img3"=>$img3name,"txt3"=>$text3);
			//print_r ($data);
			$inp = file_get_contents('db/database.json') or die("Unable to open file database!");;
			$tempArray = json_decode($inp);
			array_push($tempArray, $data);
			$jsonData = json_encode($tempArray);
			file_put_contents('db/database.json', $jsonData);
			
			//creat json for each id video in json folder
			$myfile = fopen("json/".$id.".json", "w+") or die("Unable to open file create!");
			$jsonfile = json_encode($data);
			file_put_contents("json/".$id.".json", $jsonfile);
			
			

			$inp = file_get_contents('db/database.json');
			$tempArray = json_decode($inp);
			//print_r($tempArray);
			//print_r($tempArray[1]);
			//echo $tempArray[1]->vdtitle;

			$message="Saved Your Data, Successed !";
		}else{
			$message="Please Fill Video Id, Video Title , and Video Thumnail*";
		}
		//====================
		/*$msg = 'not found';
		foreach($some_array as $obj)
		{
			if ($obj->id == $id)
			{
				$msg = 'found';
				break;
			}
		}
		echo $msg;
		if (stripos($text, "world") !== false) {
			echo "True";
		}
		*/
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

    <title>Post Video</title>
<script>
function getRandomString(length) {
    var randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var result = '';
    for ( var i = 0; i < length; i++ ) {
        result += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
    }
  //console.log("id:"+result);
    document.getElementById("idvideo").value = result;
}

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"><!--fixed-top-->
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
          <a class="nav-link active" aria-current="page" href="../" target="_blank"><- Home  |</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./admin.php">   Refresh     | </a>
        </li>
		<li class="nav-item">
          <?php
if(isset($_SESSION["user_name"])) {
?>
<a href="logout.php" tite="Logout" class="nav-link active" aria-current="page" style="color:blue;">Logout</a>
<?php
}else{
	
	?><script type="text/javascript">location.href = 'Login.php';</script><?php
	
}
?>
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
                 <div class="container mb-5">


                   <form name="frmInset" method="POST" action="" enctype="multipart/form-data">
                      <div class="mb-3">
					  <div id="messageshow" class="form-text" style="color:#fff;background-color:#d95509;"><?php if($message!="") { echo $message; } ?></div>
                        <label for="exampleInputEmail1" class="form-label ">ID Video*</label>
						<div class="row mb-3">
                            <div class="col-sm-8"><input type="text" placeholder="Copy&Past Video Id here" class="form-control mb-3" name="id" id="idvideo" aria-describedby="emailHelp"></div>
							<div class="col-sm-4"><button href="#" onclick="getRandomString(28);" type="button">Generate uniq id</button></div>
						</div>
                        
						<label for="exampleFormControlTextarea1" class="form-label">Video From</label>
                        <select class="form-select form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
                          <option selected>Select Video Type</option>
                          <option selected value="youtube">Youtube -id</option>
                          <option value="instagram">Instagram -id</option>
						  <option value="pinterest">Pinterest -id</option>
						  <option  value="facebook">Facebook -pagename_id</option>
						  <option value="twitter">Twitter -username_id</option>
						  <option value="novideo">No Video -generate uniq id</option>
                        </select>
                        <label for="exampleInputEmail1" class="form-label " >Title Video*</label>
                        <input type="text" class="form-control mb-3" id="tillevideo" name="title" aria-describedby="emailHelp">
                        <label for="exampleFormControlTextarea1" class="form-label">Article</label>
                        <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="article" rows="3"></textarea>
                        
                          <div class="row mb-3">
                            <div class="col">
							<label for="exampleFormControlTextarea1" class="form-label">Category</label>
                              <select class="form-select" aria-label=".form-select-lg example" name="category">
                                <option >Select Animals</option>
                                <option selected value="cat">Cat</option>
								<option value="wildcat">Wild Cat</option>
                                <option value="dog">Dog</option>
                                <option value="bird">Bird</option>
								<option value="bear">Bear</option>
								<option value="wildanimals">Wild Animals</option>
								<option value="domesticanimals">Domestic Animals</option>
                              </select>
                            </div>
                            <div class="col">
							<label for="exampleFormControlTextarea1" class="form-label">Thumnail Image*</label>
                              <input type="file" class="form-control" name="thumnail"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="col">
                              <label for="exampleFormControlTextarea1" class="form-label">Fill Video Id First*</label>
							 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="getValueInput()">
  Get Youtube thumnail
</button>
<script> 

    const getValueInput = () =>{
      let inputValue = document.getElementById("idvideo").value; 
      document.getElementById("imgeyoutube").innerHTML = "<img src='https://img.youtube.com/vi/"+inputValue+"/maxresdefault.jpg' class='img-fluid' id='showyoutubethum'>";
     
	}

    
  </script> 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-2">
	Note*: If no thumnail, Don't worry! mean that you not fill youtube Id or incorrect id or youtube video no HD Image :)
      <div class="row" id="imgeyoutube">
	  
		  
		  
    </div>
	
      <div class="modal-body">
	  
        To Download: Right Click -> Save Image As
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                            </div>
                          </div>
                        
                        
                          <div class="row mb-3">
                            <div class="col">
                              <label for="exampleFormControlTextarea1" class="form-label">Text (Optional)</label>
                              <input type="text" name="text1" class="form-control mb-3"  aria-describedby="emailHelp">
                              <input type="file" name="img1" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="col">
                              <label for="exampleFormControlTextarea1" class="form-label">Text (Optional)</label>
                              <input type="text" name="text2" class="form-control mb-3"  aria-describedby="emailHelp">
                              <input type="file" name="img2" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="col">
                              <label for="exampleFormControlTextarea1" class="form-label">Text (Optional)</label>
                              <input type="text" name="text3" class="form-control mb-3"  aria-describedby="emailHelp">
                              <input type="file" name="img3" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                          </div>
                        
                      </div>


                      <button type="submit" class="btn btn-primary">Save Post</button>
					  

                    </form>


                 </div>
               </div>
               </div>
            </div>

           </div>

           <div class="col-sm-4 p-1" >
             <div class="card">
  <div class="card-header">
    Featured
  </div>
          <div class="card-body">
            <h5 class="card-title">List Contents</h5>
            <p class="card-text">It will show List of 10 contents </p>
            <a href="./list.php" class="btn btn-primary">Go List 10</a> 
          </div>
        </div>
          
             
           </div>
       </div>
  </div>

  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="https://www.jinnytv24.us/">jinnytv24.us</a>
    </div>
    <!-- Copyright -->
  </footer>
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
