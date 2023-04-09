<script>
	
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
                                   
				},
				beforeSend:function()
				{
				  //$("#loading_gif").html('Loading...');
				  //alert("home");
				  
				}
        });
		//return false;
	}
	
	function searchbox(val,col){
		
		
		//var wc=document.getElementById("wc").getAttribute("value");
		
		
		//var app_id=$('.row-cols-2').children().last().attr('app_id');
		//var app_id="a";
		//document.getElementById("wordsearch").innerHTML=val;
		localStorage.setItem("word", val);
		
		//alert(val);
		$.ajax({
				type: "POST",
				url: "search.php",
				async: false,
				data: "app_id=122&textsch="+val+"&col="+col,
				success: function(html){
									//alert(html);
									if(html!=''){
										
										localStorage.setItem("key", html);
										document.getElementById("relateloadmore").innerHTML = localStorage.getItem("key");
										
									}else{
										document.getElementById("relateloadmore").innerHTML = "No result found! ";
									}
									
                                   
				},
				beforeSend:function()
				{
				  //document.getElementById("searchresult").innerHTML ="Loading...!";
				  
				}
        });
		//return false;
	}
	$(document).ready(function(){
		console.log(localStorage.getItem("key"));//null
		var glble=localStorage.getItem("key");
		var fromurl=localStorage.getItem("fromurl");
		//var work=0;
		//localStorage.setItem("work", 0);
		
		var current = window.location.pathname;
			console.log(current);
			console.log(localStorage.getItem("fromurl"));
			
			  if(glble!='' && glble!=null){//replace / with /
				  if (current == '/'&& fromurl=='/') {//check home page url website.
					document.getElementById("relateloadmore").innerHTML=glble;
					localStorage.setItem("key", '');
					localStorage.setItem("fromurl", '');
					//document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
					location.href='./';
					console.log('on the homepage.');
				 } else {
					//location.href='./';
					document.getElementById("relateloadmore").innerHTML=glble;
					localStorage.setItem("key", '');
					localStorage.setItem("fromurl", '');
					document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
				    console.log('Not on the homepage.');
				}
			}else{
				console.log('Not data.')
				//localStorage.setItem("fromurl", '');
			}
			
		
		//search box input
		$("#btsearch").click(function(){
			var textsch=document.getElementById("textsch").value;
			searchbox(textsch,"vdtitle");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			if(currenturl1!='/'){
				location.href='./';
			}
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
		});
		$("#wc").click(function(){
			var wc=document.getElementById("wc").getAttribute("value");
			searchbox(wc,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		//select search animals category
		$("#dg").click(function(){
			var dg=document.getElementById("dg").getAttribute("value");
			searchbox(dg,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#br").click(function(){
			var br=document.getElementById("br").getAttribute("value");
			searchbox(br,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#bd").click(function(){
			var bd=document.getElementById("bd").getAttribute("value");
			searchbox(bd,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#da").click(function(){
			var da=document.getElementById("da").getAttribute("value");
			searchbox(da,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#wa").click(function(){
			var wa=document.getElementById("wa").getAttribute("value");
			searchbox(wa,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#cat").click(function(){
			var cat=document.getElementById("cat").getAttribute("value");
			searchbox(cat,"category");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		//select search Video from type
		$("#yt").click(function(){
			var yt=document.getElementById("yt").getAttribute("value");
			searchbox(yt,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#fb").click(function(){
			var fb=document.getElementById("fb").getAttribute("value");
			searchbox(fb,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#ig").click(function(){
			var ig=document.getElementById("ig").getAttribute("value");
			searchbox(ig,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#tt").click(function(){
			var tt=document.getElementById("tt").getAttribute("value");
			searchbox(tt,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#pt").click(function(){
			var pt=document.getElementById("pt").getAttribute("value");
			searchbox(pt,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		$("#nv").click(function(){
			var nv=document.getElementById("nv").getAttribute("value");
			searchbox(nv,"type");
			
			var currenturl1 = window.location.pathname;
			localStorage.setItem("fromurl", currenturl1);
			document.getElementById("wordsearch").innerHTML=localStorage.getItem("word");
			document.getElementById("navbarSupportedContent").className="navbar-collapse collapse";
			if(currenturl1!='/'){
				location.href='./';
			}
		});
		// Get the input field
		var input = document.getElementById("myInput");
		var textsch=document.getElementById("textsch");
		// Execute a function when the user presses a key on the keyboard
		textsch.addEventListener("keypress", function(event) {
		  // If the user presses the "Enter" key on the keyboard
		  if (event.key === "Enter") {
			// Cancel the default action, if needed
			event.preventDefault();
			// Trigger the button element with a click
			document.getElementById("btsearch").click();
		  }
		});
		
		
	});
	</script>
	<style>
	.nav-item a {
		font-size:17px;
		
		
	}
	</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"><!--fixed-top-->
  <div class="container-fluid">
    <a class="navbar-brand" href="./">
      <img src="./icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Animals
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="cat" value="cat">Cats</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Animals
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<li><a class="dropdown-item" href="#" id="wc" value="wildcat" >Wild Cat</a></li>
            <li><a class="dropdown-item" href="#" id="dg" value="dog" >Dog</a></li>
            <li><a class="dropdown-item" href="#" id="br" value="bear" >Bear</a></li>
            <li><a class="dropdown-item" href="#" id="bd" value="bird" >Bird</a></li>
			<li><a class="dropdown-item" href="#" id="wa" value="wildanimals" >Wild Animals</a></li>
			<li><a class="dropdown-item" href="#" id="da" value="domesticanimals" >Domestic Animals</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Videos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<li><a class="dropdown-item" href="#" id="yt" value="youtube" >Youtube</a></li>
            <li><a class="dropdown-item" href="#" id="fb" value="facebook" >Facebook</a></li>
            <li><a class="dropdown-item" href="#" id="ig" value="instagram" >Instagram</a></li>
			<li><a class="dropdown-item" href="#" id="pt" value="pinterest" >Pinterest</a></li>
            <li><a class="dropdown-item" href="#" id="tt" value="twitter" >Twitter</a></li>
			<li><a class="dropdown-item" href="#" id="nv" value="novideo" >No Video</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php" tabindex="-1" >About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="./privacy.php" tabindex="-1" >Privacy Policy</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search one keyword ..." aria-label="Search" id="textsch">
        <a class="btn btn-outline-success" id="btsearch">Search</a>
      </form>
    </div>
  </div>
</nav>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140613736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140613736-1');
</script>
