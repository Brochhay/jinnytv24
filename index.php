<?php 
//$protocol = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

//if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.') {
   // header('Location: '.$protocol.'www.'.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI']);
    //exit;
//}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<link rel="icon" href="./logo.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Jinnytv24</title>
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
	@media only screen and (max-device-width: 480px){
		/* in mobile css commands */ 
		.line-clamp {
	  display: -webkit-box;
	  -webkit-line-clamp: 3;
	  -webkit-box-orient: vertical;  
	  overflow: hidden;
	  text-overflow: ellipsis;
		//white-space: nowrap;
		font-size:12px;
		padding:0px;
		width:100%;
	}
	}
  </style>
  
  </head>
  <body>
  
    <?php require 'header.php';?>

<div class="container pt-5"></div>
    <div class="container pt-3">
  <!-- Content here -->
       <div class="row">
           <div class="col-sm-8 ">

             <div class="container">

               <div class="row">
                   <div class="col">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7832902689973157"
     crossorigin="anonymous"></script>
<!-- newsads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7832902689973157"
     data-ad-slot="9322450508"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

                   </div>
                 </div>
                 <div class="row pt-3" >
                     <p class="fst-italic p-3 mb-2 bg-light text-dark">Result of Search: <span id="wordsearch"></span> ...</p>
                   </div>
                 
               <div class="row row-cols-1 g-0 bg-light position-relative content relateloadmore" id="relateloadmore">
			   <?php

			$inp1 = file_get_contents('admin/db/database.json');
			$tempArray1 = json_decode($inp1);
			$arrLength = count($tempArray1);
			//print_r($tempArray1);
			//echo $arrLength;
			$i=$arrLength-1;
			while($i>=0){
				?>
				<div class="col line-clamp pe-1" app_id="<?php echo $i;?>"> <a href="./detail.php?v=<?php echo $tempArray1[$i]->id; ?>"><img src="./thumail/<?php echo $tempArray1[$i]->thumnail; ?>" class="img-fluid" alt="..."><p class="py-1"><?php echo $tempArray1[$i]->vdtitle; ?></p></a></div>
				
				
				<?php
				$i--;
				if($i==$arrLength-9){
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
			   <p class="h5 pt-3" style="text-align:center;">Sponsored Links</p>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7832902689973157"
     crossorigin="anonymous"></script>
<!-- newsads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7832902689973157"
     data-ad-slot="9322450508"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


                 </div>

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

           </div>

           <div class="col-sm-4  p-1" >
             <?php require 'side.php';?>
			
           </div>
       </div>
  </div>

  <?php require 'footer.php';?>
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
