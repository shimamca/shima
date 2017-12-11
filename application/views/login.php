<div class="container">  

<div class="col-md-6"><h1>Welcome to Login!</h1></div>
<div class="col-md-6">
<?php 
echo form_open(base_url('index.php/login'));
echo validation_errors();
echo "<p>Username ";
echo form_input('user_name');
echo "</p>";
echo "<p>Password ";
echo form_password('user_password');
echo "</p>";
echo "<p>";
echo form_submit('login_submit','Login');
echo "</p>";
echo form_close();
?>
</div>
</div>