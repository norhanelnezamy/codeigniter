
<html>
<body>
<a style="margin: 10px;text-decoration: none;" href="<?= base_url("index.php/posts/newpost")?>">Add New Post</a>
<?php
foreach($data as $post): echo json_encode($data);?>

<div style="width: auto;height: auto;margin: 10px;">
    <p> <?php echo $post->description?> </p>
    <a style="margin: 10px;text-decoration: none;" href="<?= base_url("index.php/posts/delete/$post->id")?>">delete</a>
    <a style="margin: 10px;text-decoration: none;" href="<?= base_url("index.php/posts/action/$post->id")?>" >update</a>
</div>
<?php endforeach ?>
</body>
</html>
<?php
