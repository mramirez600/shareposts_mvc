<?php require APPROOT . '/views/inc/header.php'; ?>


<!-- <ul>
  <?php foreach($data['posts'] as $post) : ?>
<li><?php echo $post->post; ?></li>
<?php endforeach; ?>
</ul> -->
<div class="jumbotron jumbotron-fluid text-center">
<div class="container">
<h1><?php echo $data['title']; ?></h1>
<p class="lead"><?php echo $data['description'] ?></p> 
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
