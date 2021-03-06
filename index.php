<?php 
include 'header.php';
include 'baglan.php';
$text_id=51;
$indexKart = $bag->cek("ASSOC", "texts", "*", "ORDER BY id ASC", array());

$userInfo = $bag->cek("ASSOC", "n_users", "username,picture,first_name,last_name", "WHERE id=?", array($indexKart['yazar_id']));

	
if($userInfo['first_name'] != NULL && $userInfo['last_name'] != NULL)
$userName= $userInfo['first_name']." ".$userInfo['last_name'];
else
$userName=$userInfo['username'];

//echo count($indexKart['picture']);
?>
<!--sidebar-->

<div class="index-banner">

	<canvas id="indexCanvasBanner"></canvas>
	<div id="particles-js">

	</div>
</div>
<!--content-->
<div class="placeholder"></div>
<div class="indexContent">
	<div class="row">
		<!--card-->


		<?php  for ($i=0; $i < count($indexKart) ; $i++) 
			  { ?>
			<div class="col s12  mainCard">

				<div class="blog-card alt z-depth-4">
					<div class="meta">
						<div class="photo" style="background-image: url(https://wonderfulengineering.com/wp-content/uploads/2014/04/code-wallpaper-8.jpg)"></div>
						<ul class="details">
							<li class="author"></li>
							<li class="date">Mart,25,2019</li>
							<li class="tags">
          <ul><i class="fas fa-tag" style="margin-right: 5px"></i>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">JavaScript</a></li>
        </ul>
        <i class="fab fa-github metaGithub"></i>
    </li>
</ul>
</div>
<div class="description">
	<div class="description-text-grid">
		<h1><?php echo $indexKart['baslik'] ; ?></h1>
		<h2 style="display: none;">Java is not the s</h2></div>
		<p><?php echo substr($indexKart['icerik'], 0,100 )."...";; ?></p>
		<p class="read-more">
			<a href="#">Read More</a>
		</p>
		<div class="chip chidPositon">
			<img src=<?php echo "'".$userInfo['picture']."'"; ?> alt="Contact Person">
			<?php echo $userName; ?>
		</div>
	</div>
</div>

</div>
<?php } ?> 	 






</div>


</div>





<!--index login -->
<script src="js/particles.js"></script>
<script>
	
	/*
*
* GRADİENT BANNER
*
*/



var granimInstance = new Granim({
	element: '#indexCanvasBanner',
	direction: 'diagonal',
	isPausedWhenNotInView: true,
	states : {
		"default-state": {
			gradients: [
			['#1d3e45', '#144a55'],
			['#1d4d42', '#2c4f4d'],
			['#2e2f49', '#1d3e45']
			]
		}
	}
});



 /*
  *
  *
  * PARTİCLES
  *
  */


  particlesJS.load('particles-js', 'particlesSetting.json', function() {
    //console.log('çalıştı');
});




</script>
<script src="js/fitty.min.js"></script>
  <script>
$(document).ready(function(){  

     fitty('.description-text-grid h1', {
      minSize: 20,
      maxSize: 30,
      observeMutations: false,
    }); 

});
  </script>
<!--index login -->
<?php 
include 'loginCard.php';
include 'footer.php';
?>