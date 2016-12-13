<h1>Main Stats</h1>

<div class=“players”>
    <?php
    $args = array("post_type"=>"player", "posts_per_page"=>"-1");
	$loop = new WP_Query($args);
    
	while($loop->have_posts()): $loop->the_post();
	?>
        <div class="player-single">
            <h2><?php echo the_title(); ?></h2>
            <h3 class="font">Goals: <?php echo get_field("goals"); ?></h3>
            <h3 class="font">Assists: <?php echo get_field("assists"); ?></h3>

        </div>

        <?php endwhile; ?>
</div>