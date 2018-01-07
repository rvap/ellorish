<!DOCTYPE html>
<html lang="en">
<head>

<title>Welcome to web game - by ellorish master branch</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="best web game, tic toy toe" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->

<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body> 

	<div class="gallery-w3layouts" id="gallery">
		<div class="container">
			<h2>Welcome to the world of Games</h2>			
			<div class="gallery-grids">
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">
						<img src="images/g1.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2">
						<img src="images/g2.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog3">
						<img src="images/g3.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog4">
						<img src="images/g5.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog5">
						<img src="images/g6.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog6">
						<img src="images/g7.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="gallery-grid">
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog7">
						<img src="images/g4.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
					<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog8">
						<img src="images/g8.jpg" alt=" " class="img-responsive zoom-img" />
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--//gallery -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 	<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
	</script>
	<script type="text/javascript">

    $(document).ready(function() {
    var max_fields_limit      = 2; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container').append('<div><input type="text" name="player2" class="text" placeholder="Player Name"/><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>'); //add input field
        }
    });  
    $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});



</script>	
<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g1.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-1</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Sed Perst</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Martina</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 2GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>		
<div class="pop-up"> 
	<div id="small-dialog2" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g2big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-2</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vivamus</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Quentin</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog3" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g3big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right contact-right-w3">
				<h4>Tic Tac Toy</h4>
				<small style="color: white;">Max 2 player is allowed</small>

				<form action="tic_tac_toy/game.php" method="post">
					<input type="submit" name="submit" class="more_btn" value="Play"><br><br><br>
					<button class="btn btn-sm btn-primary add_more_button">Add Player</button>
					<br><br>
				<div class="input_fields_container">
			      <div>
			      	<input type="text" name="player1"  placeholder="Player Name" class="text" required />
			           
			      </div>
			    </div>

			</form>
			
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog4" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g5.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-4</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Interdum</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Spielberg</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog5" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g6.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-5</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Faucibus</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Cameron</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 2GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog6" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g7big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-6</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Tincidunt</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Jackson</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 4GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog7" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g4big.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-7</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vestibulum</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Daniel</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 2GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<div class="pop-up"> 
	<div id="small-dialog8" class="mfp-hide book-form">
		<div class="pop-up-content-agileits-w3layouts">
			<div class="col-md-6 w3ls-left">
				<img src="images/g8.jpg" alt=" " class="img-responsive zoom-img" />
			</div>
			<div class="col-md-6 w3ls-right">
				<h4>Game-8</h4>
				<p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
				<p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
				<div class="span span1">
					<p class="left">NAME</p>
					<p class="right">: Vehicula ligula</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span2">
					<p class="left">DEVELOPER</p>
					<p class="right">: Cyrill</p>
					<div class="clearfix"></div>
				</div>
				<div class="span span3">
					<p class="left">REQUIRES</p>
					<p class="right">: 3GB Hard Disk Space</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>		

</body>
</html>