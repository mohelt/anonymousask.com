<?php
require_once("menu_logged_in.php");
?>
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
		<!-- comments section -->
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- comment form -->
			<form class="clearfix" action="index.php" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
			</form>

			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count">0</span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
						<img src="profile.png" alt="" class="profile_pic">
						<div class="comment-details">
							<span class="comment-name">Melvine</span>
							<span class="comment-date">Apr 24, 2018</span>
							<p>This is the first reply to this post on this website.</p>
							<a class="reply-btn" href="#" >reply</a>
						</div>
						<div>
							<!-- reply -->
							<div class="comment reply clearfix">
								<img src="profile.png" alt="" class="profile_pic">
								<div class="comment-details">
									<span class="comment-name">Awa</span>
									<span class="comment-date">Apr 24, 2018</span>
									<p>Hey, why are you the first to comment on this post?</p>
									<a class="reply-btn" href="#">reply</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- // comments wrapper -->
		</div>
		<!-- // comments section -->
	</div>
</div>
<?php
require_once("footer.php");
?>
