<h1>World Records</h1>

<div class=“records”>
    <?php
    $args = array("post_type"=>"statistics", "posts_per_page"=>"-1");
	$loop = new WP_Query($args);
    
	while($loop->have_posts()): $loop->the_post();
	?>
        <div class="stat-single">
            <h2><?php echo the_title(); ?></h2>
            <h3><?php echo get_field("player"); ?></h3>

        </div>

        <?php endwhile; ?>
</div>