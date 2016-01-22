<html>
<body>

<form method="POST" action="<?=base_url("index.php/posts/action/$post_id")?>" >
    <textarea name="new_description" maxlength="100" style="width: 320px;"></textarea><br>
    <input type="submit" name="submit" style="margin: 10px;text-decoration: none;" value="update" />
</form>
</body>
</html>
