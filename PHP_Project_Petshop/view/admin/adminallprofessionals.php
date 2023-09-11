<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
<div class="row">





<div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="mb-3">
                <form action="admin-add-professor" method="post">
                    <button class="btn  btn-primary float-end">Add Trainer</button>
                </form>
            </div>





<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if(isset($professional))
    {
        foreach($professional as $value)
        { ?>

        <tr>
         <td><?php echo $value->id ?></td>
         <td><?php echo $value->name ?></td>
         <td><?php echo $value->designation ?></td>
         <td><img src="<?php echo $value->image ?>" alt="No Profile Picture Found" height="70" width="70px"></td>
         <td>
           <form action="admin-updateprofessional" method="post" enctype="multipart/form-data">
              <button class="btn-primary btn-sm" name="update-pro" value="<?php echo $value->id ?>">Update</button>
            </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
              </form>
            </td>
        </tr>
        <?php } 
                    }
                    else 
                    {
                      echo "<tr>
                      <th style='text-align:center;' colspan=8>No Data Found</th>
                      </tr>";
                    }?>
      
      
      
      
      
      
</tbody>
</table>
</div>
</div>
 </div>