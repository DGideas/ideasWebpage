<?php require_once('include.php'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php $title="" ?>
		<?php require_once('header.php'); ?>
		<?php
			if(isset($_GET["page"])){
				if($_GET["page"]<=0){$page=1;}else{$page=$_GET["page"];}
			}else{$page=1;}
		?>
	</head>
	<body>
		<div class="container">
			<?php include_once("banner.php"); ?>
			<?php
				foreach($collection as &$item)
				{
					//此处放置一些内容
				}
			?>
				<center><nav>
 				 <ul class="pagination">
 				   <li <?php if($page<=1){print('class="disabled"');} ?>>
 				     <a href="#" aria-label="Previous">
 			 	      <span aria-hidden="true">&laquo;</span>
 				     </a>
 				   </li>
					<?php if($page>=6): ?><li><a href="#"><?php endif; ?><?php if($page>=6){print($page-5);} ?><?php if($page>=6): ?></a></li><?php endif; ?>
					<?php if($page>=5): ?><li><a href="#"><?php endif; ?><?php if($page>=5){print($page-4);} ?><?php if($page>=5): ?></a></li><?php endif; ?>
					<?php if($page>=4): ?><li><a href="#"><?php endif; ?><?php if($page>=4){print($page-3);} ?><?php if($page>=4): ?></a></li><?php endif; ?>
 					<?php if($page>=3): ?><li><a href="#"><?php endif; ?><?php if($page>=3){print($page-2);} ?><?php if($page>=3): ?></a></li><?php endif; ?>
  					<?php if($page>=2): ?><li><a href="#"><?php endif; ?><?php if($page>=2){print($page-1);} ?><?php if($page>=2): ?></a></li><?php endif; ?>
  					<li class="active"><a href="#"><?php print($page); ?></a></li>
  					<li><a href="#"><?php print($page+1); ?></a></li>
  					<li><a href="#"><?php print($page+2); ?></a></li>
					<li><a href="#"><?php print($page+3); ?></a></li>
					<li><a href="#"><?php print($page+4); ?></a></li>
					<li><a href="#"><?php print($page+5); ?></a></li>
  					<li>
  				    <a href="#" aria-label="Next">
  				      <span aria-hidden="true">&raquo;</span>
   				   </a>
  				  </li>
 				 </ul>
				</nav>
			</nav></center>
			<?php include_once("footer.php"); ?>
		</div>
	</body>
</html>
