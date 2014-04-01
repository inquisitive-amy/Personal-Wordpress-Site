<div class="sidebar">
	<ul class="xoxo">
		<?php
			echo "<div class='twitter'>";
				echo "<div class='twHead'>";
					echo "<h3>";
					echo "What I'm saying on Twitter ";
					echo "</h3>";
					echo "<a href='http://twitter.com/inquisitive_amy'>@inquisitive_amy</a>";
				echo "</div>";

				$tweets = getTweets(3);
				foreach($tweets as $tweet){
					echo "<div class='tweet'>";
						echo "<a href ='https://twitter.com/inquisitive_amy/status/". $tweet['id'] ."'target='_blank'>";
						    echo $tweet['text'];
					    echo "</a>";
					echo "</div>";
				}
			echo "<div>";
		?>
	</ul>
	<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
</div>