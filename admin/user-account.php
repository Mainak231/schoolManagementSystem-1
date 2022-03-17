<?php include('../includes/config.php')?>
<?php include('header.php')?>
<?php include('sidebar.php')?>

<!-- Content Header (Page header) -->

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_GET['user'])?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="table-responsive bg-white">
          <table class="table table-bordered"> 
              <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                  $count=1;
                  $user_query = 'SELECT * FROM accounts WHERE `type`="'.$_GET['user'].'"';
                  $user_result = mysqli_query($db_conn,$user_query);
                  //echo $users['email']."</br>";
                  //$users=mysqli_fetch_assoc($user_result);
                 //$users=mysqli_fetch_all($user_result,MYSQLI_ASSOC);
                  while($users=mysqli_fetch_array($user_result)){?>
                    <tr>
                      <td><?=$count++?></td>
                      <td><?=$users['name']?></td>
                      <td><?=$users['email']?></td>
                      <td></td>
                    </tr>
                  <?php }?>
              </tbody>
          </table>  
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
<?php include('footer.php')?>
 