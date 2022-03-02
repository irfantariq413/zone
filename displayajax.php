<?php

require_once('inc/classes.php');

					 
 if(isset($_POST['userid'])){
						 
	 $id= $_POST['userid']; 
					 
	   $show_all= new showPortfolio();              
	$value = $show_all->showAllPortfolio($id);
					 
	foreach($value as $data){
					
	?>
	  <div class="col-md-4 mb-5" style="position: relative;">
      <a class="new2" href="<?php  echo $data['link'];  ?>" target="_blank">  <img class="img" src="admin/images/<?php echo $data['name'];?>" width="300px" height="170px"></a>
      <div class="image__overlay image__overlay--primary">
      <div class="image__title"><a href="<?php  echo $data['link'];  ?>" target="_blank"><?php  echo $data['title'];  ?></a></div>
      </div>
      </div>
                        <?php
					 }}
					 ?>