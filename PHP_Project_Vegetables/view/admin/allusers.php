

<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Full_Name</th>
      <th scope="col">User_Name</th>
      <th scope="col">Phone_Number</th>
      <th scope="col">Email_Id</th>
      <th scope="col">Password</th>
      <th scope="col">Role_as</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php if(isset($fetch))
{
  foreach($fetch as $value)
  { ?>

<tr>
         <td><?php echo $value->id ?></td>
         <td><?php echo $value->full_name ?></td>
         <td><?php echo $value->user_name ?></td>
         <td><?php echo $value->phone_no ?></td>
         <td><?php echo $value->email_id ?></td>
         <td><?php echo $value->password ?></td>
         <td><?php echo $value->role_as ?></td>
         <td>
         <form action="admin-update" method="post">
              <button class="btn-primary btn-sm" name="update_btn" value="<?php echo $value->id ?>">Update</button>
            </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
              </form>
            </td>
        </tr>
<?php
  }
}

else 
{
  echo "<tr>
<th style='text-align:center;' colspan=8>No Data Found</th>
 </tr>";
}
?>

  </tbody>
  </table>