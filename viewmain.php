        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">view Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                 <thead>
                                        <tr>
                                            <th><h4>Profile</h4></th>
                                            <th><h4>Name</h4></th>
                                            <th><h4>Phone</h4></th>
                                            <th><h4>Email</h4></th>
                                            <th><h4>Age</h4></th>
                                            <th><h4>Category</h4></th>
                                            <th><h4>Edit</h4></th>
                                            <th><h4>Delete</h4></th>
                                            <th><h4>View</h4></th>
                                        </tr>
                                    </thead>
                                    <?php
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                       $UserID = $row['User_ID'];
                                       $UserImg = $row['User_Img'];
                                       $UserName = $row['User_Name'];
                                       $UserPhone = $row['User_Phone'];
                                       $UserEmail = $row['User_Email'];
                                       $UserAge = $row['User_Age'];
                                       $Category = $row['Category'];

                                       $sql="select * from category where ID='$Category'";
                                       $execute=mysqli_query($con,$sql);
                                       while($row1=mysqli_fetch_assoc($execute))
                                       {
                                         $value = $row1['CATEGORY'];
                                       }
                                    ?>
                                    <tbody>
                                       </tr>
                                        <td><img src="<?php echo $UserImg ?>"width="40px"height="40px"border-radius="50%"></td>
                                        <td><h4><?php echo $UserName ?></h4></td>
                                        <td><h4><?php echo $UserPhone ?></h4></td>
                                        <td><h4><?php echo $UserEmail ?></h4></td>
                                        <td><h4><?php echo $UserAge ?></h4></td>
                                        <td><h4><?php echo $value ?></h4></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>"><h4>Edit</h4></a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>"><h4>Delete</h4></a></td>
                                        <td><a href="only.php?only=<?php echo $UserID ?>"><h4>View</h4></a></td> 
                                       </tr>
                                    </tbody> 
                                    <?php
                                      }   
                                    ?>   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
