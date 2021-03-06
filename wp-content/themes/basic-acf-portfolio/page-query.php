
<?php /* Template Name: Query Practice */ ?>

<?php get_header(); ?>

<?php

	echo '<h1>This is an example of a very basic WP_Query Loop.</h1>';

	$query = new WP_Query([
		'post_type' => 'post'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

	echo '<h1>Now let\'s look at what get_posts does.<br>Note that i have added a posts_per_page parameter. It simply limits the number of the posts returned.</h1>';

	$posts = get_posts([
		'post_type' => 'post',
		'posts_per_page' => 1
	]);

	foreach ($posts as $post) {
		var_dump($post);
	}

	echo '<h1>Let\'s try a more advanced example of a Query:<br>I am looking for all "posts" from the category "front-end", that are tagged "css". I want them to be ordered by "modified date" and presented in ascending order. *your category and tag names may differ</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'category_in' => 'websites',
		'tag' => 'php',
		'orderby' => 'modified',
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

	echo '<h1>Task #1</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'posts_per_page' => 2,
		'orderby' => 'modified'


	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

	echo '<h1>Task #2</h1>';

	$query = new WP_Query([
		'post_type' => 'page'
		
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

	echo '<h1>Task #3</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'orderby' => 'date',
		'orderby' => 'DESC'
		
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_date();
		echo '<br>';
	}

	echo '<h1>Task #4</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'tag' => 'php, photoshop'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
		echo get_the_tag_list('Tags: ',' ');
		echo '<br>';
	}

	echo '<h1>Task #5</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'tag' => 'php, photoshop',
		'posts_per_page' => 3

	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
		echo get_the_tag_list('Tags: ',' ');
		echo '<br>';
	}

	echo '<h1>Task #6</h1>';

	$query = new WP_Query([
		'post_type' => 'page',
		'pagename' => 'sandbox'
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_author_id();
		echo '<br>';
	}


	echo "<h1>Task #7</h1>";
	
	$posts = new WP_Query([
	'post-type' => 'page',
	'pagename' => 'sandbox',
	]);
	
	while ($posts->have_posts()) {
		$posts->the_post();
		$author_id = get_the_author_meta('ID');
		$user_info = get_user_by('id', $author_id);
	
		echo 'Name: ' . $user_info->display_name . ' <br> ' . 'Email: ' . $user_info->user_email;
	}


	echo '<h1>Task #8</h1>';

	$query = new WP_Query([
		'post_type' => 'post',
		'category_in' => 'websites',
		'posts_per_page' => -1,
		'orderby' => 'title',
		'order' => 'ASC',
	]);

	while($query->have_posts()) {
		$query->the_post();
		echo the_title();
		echo '<br>';
	}

	
	echo "<h1>Task #9</h1>";

	$posts = get_posts([
	'post_type' => 'post',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC'
	]);

	?>
<ol>

	<?php
	foreach ($posts as $post) :
		$post_title = get_the_title();
		$author_id = get_the_author_meta('ID');
		$user_info = get_user_by('ID', $author_id);
		$author_name = $user_info->display_name;
		$creation_date = get_the_date();
		?>

		<li>
			<?= $post_title .  ' [' . $author_name . '] ' . ' (' . $creation_date . ') ' ?>		
		</li>

		<?php
	endforeach;
	?>

</ol>

<?php get_footer(); ?>