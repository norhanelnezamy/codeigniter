<?php echo validation_errors(); ?>
<?php echo form_open('users/login'); ?>
    <p style="color: #004B70;">Sign in</p>
    <input type="text" name="username" class="input" placeholder="   Enter your username"><br>
    <input type="password" name="password"class="input" placeholder="   Enter password"><br>
    <button name="postLogin" style=" width: 75px; font-size: 16px; height: 35px; margin-left: 10%; border-radius: 4px;margin-top: 2%;">Login</button>
</form>


<form action="users" method="POST">
<p style="color: #004B70;">Search</p>
<input type="text" name="user_id" class="input" placeholder="   Enter your user id"><br>
<input type="submit" name="submit" value="submit"/>
</form>

