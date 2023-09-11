
<?php
echo "<pre>";
print_r($response);
echo "</pre>";

?>





<form action="" method="post">


  <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="full_name" value="<?php echo $response->full_name;  ?>">
  </div>

  <div class="form-group">
    <label for="user_name">User Name</label>
    <input type="text" class="form-control" id="username" name="user_name" value="<?php echo $response->user_name; ?>">
  </div>

  <div class="form-group">
    <label for="phone_no">Phone Number</label>
    <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $response->phone_no; ?>">
  </div>

  <div class="form-group">
    <label for="email_id">Email ID</label>
    <input type="email_id" class="form-control" id="email_id" name="email_id" value="<?php echo $response->email_id; ?>">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="passwword" name="password" value="<?php echo $response->password; ?>">
  </div>

  <div class="form-group">
    <label for="role_as">Role</label>
    <input type="text" class="form-control" id="role_as" name="role_as" value="<?php echo $response->role_as; ?>">
  </div>

  <button type="submit" class="btn btn-primary" name="update" value="<?php echo $response->id;  ?>">Submit</button>
</form>