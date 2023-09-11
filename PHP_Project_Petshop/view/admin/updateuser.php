
<?php
echo "<pre>";
print_r($response);
echo "</pre>";

?>





<form action="" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $response->fullname;  ?>">
  </div>

  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $response->username; ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $response->email; ?>">
  </div>

  <div class="form-group">
    <label for="mobile">Mobiile Number</label>
    <input type="mobile" class="form-control" id="mobile" name="mobile" value="<?php echo $response->mobile; ?>">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="passwword" name="password" value="<?php echo $response->password; ?>">
  </div>

  <div class="form-group">
    <label for="role_as">Role</label>
    <input type="text" class="form-control" id="role_as" name="role_as" value="<?php echo $response->role_as; ?>">
  </div>
  
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>

  <div class="form-group mt-3 mb-3">    
    <img src="<?php echo $response->image ?>" alt="No image found" height="100px" width="100px">
  </div>

  <input type="hidden" name="old_profile_pic" id="old_profile_pic" value="<?php echo $response->image ?>">
  
  <button type="submit" class="btn btn-primary" name="update" value="<?php echo $response->id;  ?>">Submit</button>
</form>