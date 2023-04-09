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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script>
	
	function loadmore(){
		var app_id=$('.relateloadmore').children().last().attr('app_id');
		//var app_id="a";
		//alert(app_id);
		
		$.ajax({
				type: "POST",
				url: "functionlist.php",
				async: false,
				data: "app_id="+app_id+"&app_loadhome=",
				success: function(html){
									//alert(html);
									document.getElementById("relateloadmore").innerHTML += html;
                                   
				},
				beforeSend:function()
				{
				  //$("#loading_gif").html('Loading...');
				  //alert("home");
				  
				}
        });
		//return false;
	}
	</script>
    <title>20 List Content</title>
	<style>
    a { text-decoration: none;color:#212529;font-size:14px; }
	.line-clamp {
	  display: -webkit-box;
	  -webkit-line-clamp: 3;
	  -webkit-box-orient: vertical;  
	  overflow: hidden;
	  text-overflow: ellipsis;
		//white-space: nowrap;
		font-size:12px;
		width:50%;
		padding-left:5px;
	}
	</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light "><!--fixed-top-->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Animals
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../" target="_blank">Home Page</a>
        </li>
        
       
    </div>
  </div>
</nav><div class="container pt-5"></div>
    <div class="container pt-3">
  <!-- Content here -->
       <div class="row">
           <div class="col-sm-8">

             
			 <p>Debug On Facebook - Before Debug, you need log in to FB Acc first.</p>
                 <div class="row row-cols-2 g-0 bg-light position-relative content relateloadmore" id="relateloadmore">
                     <?php

			$inp1 = file_get_contents('./db/database.json');
			$tempArray1 = json_decode($inp1);
			$arrLength = count($tempArray1);
			//print_r($tempArray1);
			//echo $arrLength;
			$i=$arrLength-1;
			while($i>=0){
				?>
				<div class="col line-clamp p-3" app_id="<?php echo $i;?>"><a href="https://developers.facebook.com/tools/debug/?q=https://www.jinnytv24.us/detail.php?v=<?php echo $tempArray1[$i]->id; ?>" target="_blank" ><p style="border:1px solid;" class="p-3">Debug Link</p></a> <a href="https://www.jinnytv24.us/detail.php?v=<?php echo $tempArray1[$i]->id; ?>" target="_blank"><img src="../thumail/<?php echo $tempArray1[$i]->thumnail; ?>" class="img-fluid" alt="..."><p class="py-1"><?php echo $tempArray1[$i]->vdtitle; ?> </p></a></div>
				
				
				<?php
				$i--;
				if($i==$arrLength-21){
					//$arrLength=$i-5;
					
					break;
					
				}
			}
			//print_r($tempArray[0]);
			//echo $tempArray->vdtitle;
			
		?>

                   </div>
            <div class="row">
               <div class="col">
                 <div class="d-grid gap-2">
  <button class="btn btn-primary mb-5 mt-3" id="" type="button" onclick="loadmore();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/></svg> Load More</button>

</div>

                 </div>

             </div>

           </div>

           <div class="col-sm-4  p-1" >
             <div class="card">
  <div class="card-header">
    Featured
  </div>
          <div class="card-body">
            <h5 class="card-title">Post</h5>
            
            <a href="./admin.php" class="btn btn-primary">Post Video</a>
          </div>
        </div>
          
             
           </div>
       </div>
  </div>

  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
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
