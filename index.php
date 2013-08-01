
<?php 
require_once("includes/config.php"); 


$sql = "SELECT * FROM site_content";
$myData = $db->query($sql);

while($row = $myData->fetch_assoc()) {

if($row["section_name"] == "intro")
{
$intro= $row["content"];
}
if($row["section_name"] == "blurb")
{
$blurb= $row["content"];
}


}









?>




<?php $page = "home"; ?> 







<?php require_once("includes/top.inc.php"); ?> 




<body>
<div class="gridContainer clearfix">
  		
		<?php require_once("includes/header.inc.php"); ?> 
  
  		<section class="main">
  		  <h2>Welcome!</h2>
  			<figure>
			<img src="baseball.jpg" />
  				<figcaption>
  				  <p>According to Lawson, figcaption is NOT another DIV</p>
  				</figcaption>
  			</figure>
            
            <p><?php echo @$intro;?></p>
            <p><?php echo @$blurb;?></p>
  		</section>
		
		<?php include_once("includes/sidebar.inc.php"); ?>
		<?php include_once("includes/footer.inc.php"); ?>
        
  </div>
</body>
</html>
