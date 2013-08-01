
<?php 
require_once("includes/config.php"); 

//query the database and store the results
//in the $myData variable
$sql = "SELECT * FROM site_content";
$myData = $db->query($sql);

//loop through the associative array 
//$mydaya->... pulls out the first item in the array 
while($row = $myData->fetch_assoc()) {

//row is set to "n" (no)
if($row["view"] == "n")
{
continue; 
}
//row is set to intro 
if($row["section_name"] == "intro")
{
$intro= $row["content"];
}
//row is set to blurb
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
