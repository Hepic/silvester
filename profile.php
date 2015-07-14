<?php
	if(session_id() == "")
		session_start();
		
	$sessionUserId = isset($_SESSION['userid']) ? $_SESSION['userid'] : "-1";
?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="communicationCss.css" />
	</head>
	
	<body>
		<?php include("bar.html") ?>
		
		<div id='container'>
			<div id='post_write'>
				<form action="publish_post.php" method="post">
					<textarea id="post_msg" placeholder="What are you thinking..." name='post_msg'></textarea>
					<input type="submit" value="Publish" />
				</form>
			</div>
			
			<?php
				include("includeDB.php");

				
				$postRes = mysql_query("SELECT * FROM posts WHERE userid='$sessionUserId'");
				
				while($postRow = mysql_fetch_array($postRes))
				{
					echo "<div id='post_comment'>";
					
						echo "<div id='post_print'>".$postRow['username'].": ".$postRow['message']."</div>";
					
						echo "<span id='line'></span>";
						
						$postId = $postRow['id'];
						$commentRes = mysql_query("SELECT * FROM comments WHERE postid = '$postId'");
						
						while($commentRow = mysql_fetch_array($commentRes))
							echo "<div id='comment_print'>".$commentRow['username'].": ".$commentRow['message']."</div>";
						
					?>
						<form action="publish_comment.php" method="post">							
							<textarea id="comment_msg" placeholder="comment..." name="comment_msg" ></textarea>
							<input type="hidden" name="post_id" value="<?php echo $postId; ?>" />
							<input type="submit" value="Comment" />
						</form>
					<?php
					echo "</div>";
				}
			?>	
			
		</div>		
	</body>
</html>

