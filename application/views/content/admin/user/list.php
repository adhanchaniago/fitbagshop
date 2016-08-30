            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All User Data Goes Here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="15%">Name</th>
                                            <th width="35%">Information</th>
                                            <th width="28%">Last Login</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($users)) foreach($users as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows['first_name'].' '.$rows['last_name']; ?></td>
                                            <td>
                                                <li>Username : <?php echo $rows['username']; ?> </li>
                                                <li>Phone : <?php echo $rows['phone']; ?></li>
                                                <li>Email : <?php echo $rows['email']; ?></li>
                                            </td>
                                            <td>
                                                <li>Login Attempt : <?php echo $rows['login_attempt']; ?></li>
                                                <li>Last Login : <?php echo $rows['last_login']; ?> </li>
                                                <li>Last IP    : <?php echo $rows['ip_address']; ?></li>
                                            </td>
                                            <td class="center"><?php echo status($rows['active']); ?></td>
                                            <td class="center">
                                            <a href="<?php echo admin_url(); ?>user/profile/<?php echo $rows['id']; ?>" class="btn btn-default" title="Edit portfolio detail"><i class="fa fa-pencil"></i></a>
                                            <?php if($rows['active'] == 1) { ?>
                                            <a href="<?php echo admin_url(); ?>process/user_status/<?php echo $rows['id']; ?>?status=0" class="btn btn-default" title="Delete this portfolio"><i class="fa fa-close"></i></a>
                                            <?php } else { ?>
                                            <a href="<?php echo admin_url(); ?>process/user_status/<?php echo $rows['id']; ?>?status=1" class="btn btn-default" title="Delete this portfolio"><i class="fa fa-check"></i></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->