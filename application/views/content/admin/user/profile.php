            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            You can changes your user information here.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/edit_user_profile" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-6">
                                    <h2>User Information</h2>
                                        <div class="form-group">
                                            <label>Firstname</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="Enter text" value="<?php echo $users['first_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Lastname</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Enter text" value="<?php echo $users['last_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Enter text" value="<?php echo $users['phone']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter text" value="<?php echo $users['email']; ?>">
                                        </div>
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h2>Login Information</h2>
                                        <div class="form-group">
                                            <label>Avatar (<a href="<?php echo base_url(); ?>assets/uploads/profile/<?php echo $users['avatar']; ?>" target="_blank"><?php echo $users['avatar']; ?></a>)</label>
                                            <input type="file" name="image">
                                            <span class="small">*Please leave blank if no changes</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter text" value="<?php echo $users['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Leave blank if no changes" value="">
                                            <small>*Leave blank if password not changes.</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                               <select class="form-control chosen-select" name="status" required>
                                                   <option value="1" <?php if($users['active'] == 1) { echo 'selected'; } ?>><?php echo status(1); ?></option>
                                                   <option value="0" <?php if($users['active'] == 0) { echo 'selected'; } ?>><?php echo status(0); ?></option>
                                               </select>
                                        </div>        
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $users['id']; ?>" />
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <button role="button" type="submit" class="btn btn-default">Save Changes</button>
                                    </div>
                                </div>   
                              </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->