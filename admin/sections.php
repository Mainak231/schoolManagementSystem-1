<?php include('../includes/config.php')?>
<?php include('header.php')?>
<?php include('sidebar.php')?>


<!-- will send the details to database-->
<?php
    
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        mysqli_query($db_conn,"INSERT INTO sections(title) VALUE ('$title')") or die("ERROR!!!");
    }
?>

<!-- Content Header (Page header) -->

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Sections</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Sections</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <?php 
        if(isset($_GET['action'])){?>
          <!-- Info boxes -->
          <div class="card bg-white">
                <div class="card-header py-2 ">
                    <h3 class="card-title">
                       Add Sections
                    </h3>
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" placeholder="Enter Section" required class="form-control bg-white">
                    </div>
                    <button class="btn btn-success" name="submit">Submit</button>
                  </form>
                </div>  
          </div>
        <!-- /.row -->
       <?php }else{ ?>
        <!-- Info boxes -->
          <div class="card bg-white">
                <div class="card-header py-2 ">
                    <h3 class="card-title">
                        Sections
                    </h3>
                    <div class="card-tools">
                        <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"></i>Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive bg-white">
                    <table class="table table-bordered"> 
                        <thead>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                        $query=mysqli_query($db_conn,'SELECT * FROM sections');
                        $count=1;
                        while($section=mysqli_fetch_object($query)){ ?>
                               <td><?=$count++?></td>
                               
                               <td><?=$section->title?></td>
                               
                               <td></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                    </table>  
                    </div>
                </div>  
          </div>
        <!-- /.row -->
        <?php } ?>
      </div><!--/. container-fluid -->
    </section>
<?php include('footer.php')?>
 