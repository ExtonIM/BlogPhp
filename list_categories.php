<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
<?php  include('includes/public_functions.php'); ?>

	<title>LifeBlog | Sign in </title>
</head>
<body>
<div class="container">
	<?php include( ROOT_PATH . 'includes/navbar.php'); ?>
    <?php $topics = getAllTopics(); ?>
    <?php foreach ($topics as $topic) { ?>
        <div class="categories">
        <ul>
            <li><a href="""><?php echo $topic['name'] ?></a></li>
            </ul>
            <h2 class="content-title">
		Articles on <u><?php echo getTopicNameById($topic['id']); ?></u>
	</h2>
    <?php $posts = getPublishedPostsByTopic($topic['id']) ?>
	<hr>
	<?php foreach ($posts as $post): ?>
		<div class="post" style="margin-left: 0px;">
			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info">
					<h3><?php echo $post['title'] ?></h3>
					<div class="info">
						<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
						<span class="read_more">Read more...</span>
					</div>
				</div>
			</a>
		</div>
		<td>
	<?php endforeach ?>
       </div>
    <?php } ?>