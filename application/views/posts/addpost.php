<html>
<body>

<form method="POST" action="<?= base_url("index.php/posts/addpost")?>" >

    <textarea name="new_post" maxlength="100" style="width: 320px;"></textarea><br>
    <input type="submit" name="add" style="margin: 10px;text-decoration: none;" value="add" />
</form>
</body>
</html>
