<?php 
$vdid=$_GET['v'];
//echo $vdid;
$inp = file_get_contents('admin/json/'.$vdid.'.json');
			$tempArray = json_decode($inp);
			//print_r($tempArray);
			if(is_null($tempArray) or $tempArray==''){
				header("Location:https://www.jinnytv24.us/");die();
			}
			//print_r($tempArray[0]);
			//echo $tempArray->vdtitle;
			
			
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script async src="//www.instagram.com/embed.js"></script>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
        />


<title>Animals | <?php echo $tempArray->vdtitle;?></title>
<link rel="canonical" href="https://www.jinnytv24.us/detail.php?v=<?php echo $tempArray->id;?>"/>
<link rel="icon" href="https://www.jinnytv24.us/logo.png" type="image/x-icon" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="google-site-verification" content="" />
<meta name="description" content="<?php echo $tempArray->vdtitle;?>" />
<meta name="author" content="Mohamith.me" />
<meta name="keywords" content="animals, Cat, Dog, Bear , Wild Cat, Wild animals, Domistic animals, Adorable Cat, Cut Cat, Funny Cat">
<meta name="pinterest" content="nohover">
<meta name="medium" content="image">
<meta property="article:section" content="<?php echo $tempArray->vdtitle;?>" />
<meta property="article:published_time" content="2021-04-29T22:35:52">
<meta property="article:modified_time" content="2021-04-29T22:35:52">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

<meta property="og:updated_time" content="2021-04-29T22:35:52">
<meta property="og:image" content="https://www.jinnytv24.us/thumail/<?php echo $tempArray->thumnail;?>" />
<meta property="og:url" content="https://www.jinnytv24.us/thumail/<?php echo $tempArray->thumnail;?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $tempArray->vdtitle;?>" />
<meta property="og:description" content="<?php echo $tempArray->maintext;?>" />
<meta property="og:locale" content="en_US" />
<meta property="fb:app_id" content="15770719248243890" />
<meta property="og:site_name" content="jinnytv24" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
	
	<style>
    a { text-decoration: none; color:#212529;font-size:14px;}
	.line-clamp {
	  display: -webkit-box;
	  -webkit-line-clamp: 3;
	  -webkit-box-orient: vertical;  
	  overflow: hidden;
	  text-overflow: ellipsis;
		//white-space: nowrap;
		font-size:12px;
	}
	
	.navbar-nav{
    width: 100%;
}

body{
	font-family:'IBM Plex Serif',sans-serif;
	font-size:18px;
}





#nav-items li a,#profile{
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black;
}




.comment{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    
}
.comment h4,.comment span,.darker h4,.darker span{
    display: inline;
}

.comment p,.comment span,.darker p,.darker span{
    color: rgb(184, 183, 183);
}

h1{
    
    font-weight: bold;
}
h4{
    color:white;
    font-weight: bold;
}
label{
    color: rgb(212, 208, 208);
}

#align-form{
    margin-top: 20px;
}
.form-group p a{
    color: white;
}

#checkbx{
    background-color: black;
}

#darker img{
    margin-right: 15px;
    position: static;
}


  </style>
	<script>
	function SHARE(){
              window.open("https://www.facebook.com/sharer/sharer.php?u=https://www.jinnytv24.us/detail.php?v=<?php echo $tempArray->id;?>","_blank");
	}
	function loadmore(){
		var app_id=$('.relateloadmore').children().last().attr('app_id');
		//var app_id="a";
		//alert(app_id);
		$.ajax({
				type: "POST",
				url: "function.php",
				async: false,
				data: "app_id="+app_id+"&app_loadhome=",
				success: function(html){
									//alert(html);
									document.getElementById("relateloadmore").innerHTML += html;
                                   // $('.part-content').append(html);
                                    //$(html).insertAfter(".part-content");
                                   // $("#loading_gif").html("");
				},
				beforeSend:function()
				{
				  //$("#loading_gif").html('Loading...');
				  //document.getElementById("relateloadmore").innerHTML ="Loading...!";
				}
        });
		//return false;
	}
	</script>
  </head>
  <body>
    <?php require 'header.php';?>
	<span id="wordsearch" style="display:none;"></span>
	<div class="container pt-5"></div>
    <div class="container pt-3">
  <!-- Content here -->
       <div class="row">
           <div class="col-sm-8 ">
             
               <div class="row  pt-1">
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
              <div class="row pt-1">
                  <div class="col">
                    <img src="./thumail/<?php echo $tempArray->thumnail;?>" class="img-fluid" alt="Lioness Lola gave birth to triplet cubs at Chelyabinsk . (Video)">
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                    <p class="h5 pt-2"><?php echo $tempArray->vdtitle;?></p>
                  </div>
              </div>
              <div class="row  pt-1">
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
             <div class="row  pt-1">
                 <div class="col">
                   
                 </div>
            </div>
            <div class="row  pt-1">
                <div class="col">
				<p class="h5 pt-1" style="text-align:center;">Sponsored Links</p>
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
           <div class="row pt-1">
               <div class="col">
			   <h1>Comments</h1>
                <div class="comment mt-4 text-justify float-left">
                    <img src="./yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4>
                    <span>-  October, 2022</span>
                    <br>
                   <p style="font-weight: bold;"><?php echo $tempArray->maintext;?></p>
                </div>
                 
               </div>
           </div>
           <div class="row pt-1">
               <div class="col">


                 <div class="d-grid gap-2">
                   <button type="button" class="btn btn-primary" onclick="SHARE()">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg> SHARE
                   </button>

                </div>
              </div>
          </div>
           <div class="row pt-1">
               <div class="col ratio ratio-4x3" id="showvdo">
<?php
$vdtype=$tempArray->type;
if($vdtype=='youtube'){
	echo '<style type="text/css">#showvdo{height: auto;}</style>';
	echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$tempArray->id.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    echo '</div></div>';
}
else if($vdtype=='pinterest'){
	
	echo '<style type="text/css">#showvdo{height: 650px;}</style>';
	echo '<iframe src="https://assets.pinterest.com/ext/embed.html?id='.$tempArray->id.'" height="336" width="236" frameborder="1" scrolling="no" ></iframe>';
   echo '</div></div>';
}
else if($vdtype=='facebook'){
	
	echo '<style type="text/css">#showvdo{height: auto;}</style>';
	$str_arr = explode ("_", $tempArray->id); 
	$pagename=$str_arr[0];
	$id=$str_arr[1];
	echo '<iframe src="https://www.facebook.com/plugins/video.php?height=276&href=https://www.facebook.com/'.$pagename.'/videos/'.$id.'&show_text=false&width=327&t=0" width="327" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>';
    echo '</div></div>';
}
else if($vdtype=='instagram'){
	
	echo '<style type="text/css">#showvdo{height: 550px;}</style>';
	echo '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/'.$tempArray->id.'/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/2xW6qM6AfFk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/2xW6qM6AfFk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Maine Coon Gram (@mainecoongram)</a></p></div></blockquote>';
    echo '</div></div>';
}
else if($vdtype=='twitter'){
	
	echo '<style type="text/css">#showvdo{height: 850px;}</style>';
	
	$str_arr = explode ("_", $tempArray->id); 
	$pagename=$str_arr[0];
	$id=$str_arr[1];
	
	echo '<blockquote class="twitter-tweet" data-lang="en" data-dnt="true" data-theme="light" > <a href="https://twitter.com/'.$pagename.'/status/'.$id.'?ref_src=twsrc%5Etfw"></a></blockquote> ';
    echo '</div></div>';
}
else if($vdtype=='novideo'){
	echo '<style type="text/css">#showvdo{height: 5px;}</style>';
	//close div and start div 
	
	echo '</div></div><div class="row pt-1"><div class="col" ><p><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7832902689973157"
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
<p>';
	echo '<p>'.$tempArray->txt1.'</p><br><img src="./images/'.$tempArray->img1.'" class="img-fluid" alt=""><br><br>';
	echo '<p><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7832902689973157"
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
</p><br><br>';
	echo '<p>'.$tempArray->txt2.'</p><br><img src="./images/'.$tempArray->img2.'" class="img-fluid" alt=""><br><br>';
	echo '<p>'.$tempArray->txt3.'</p><br><img src="./images/'.$tempArray->img3.'" class="img-fluid" alt=""><br><br>';
	echo '<p><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7832902689973157"
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
</p>';
	echo '</div></div>';
}
else{}
?>
                 
                
				

             

          <div class="row  pt-1">
              <div class="col">
                <!-- Composite Start -->
				<!-- Composite Start -->

<p class="h5 pt-2" style="text-align:center;">You May Like:</p>
<!-- Composite article End -->
              </div>
         </div>
		 
		 <div class="row row-cols-2 relateloadmore" id="relateloadmore">
		 
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
				if($i==$arrLength-5){
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
			   
                 <button class="btn btn-primary my-5" id="" type="button" onclick="loadmore();">
				 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg> Load More</button>
             </div>
               </div>
        </div>
        <div class="row border border-1 pt-1">
            <div class="col">
              <h5>6 Most Common Cat Health Problems</h5>
              <p>Cats are good at self-maintenance. But even your fastidious feline can't prevent some of these more common cat diseases and health issues.
              </p>
              <h5>1. Vomiting</h5>
              <p>Vomiting is a very common problem with cats with a multitude of causes. They range from eating something poisonous or inedible (like string), to infection, urinary tract disease, or diabetes to hairballs.
              </p>
              <h5>2. Feline Lower Urinary Tract Diseases (FLUTD)</h5>
              <p>
              TSome estimates say as many as 3% of cats seen by vets have feline lower urinary tract disease (FLUTD), which is actually a group of feline diseases with multiple causes.
              </p>
              <li> List bellow:
              <ul>
                <li>Drinking more</li>
                <li>Straining to urinate</li>
                <li>Bloody urine</li>
                <li>Urinating in unusual places</li>
                <li>Crying when urinating</li>
                <li>Licking around the urinary area (often because of pain)</li>
              </ul></li>
              <h5>3. Fleas</h5>
              <li>Fleas are a very common external feline health problem. But it's one you can easily treat. Signs your cat has fleas include:
                  <ul>
                    <li>Flea dirt on its skin (they look like tiny black dots)</li>
                    <li>Constant scratching</li>
                    <li>Frequent licking</li>
                    <li>Red or irritated skin</li>
                    <li>Hair loss</li>
                    <li>Skin infections or hot spots</li>
                  </ul>
              </li>
              <h5><a href="https://pets.webmd.com/cats/6-most-common-cat-health-problems">Read More</a></h5>
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
