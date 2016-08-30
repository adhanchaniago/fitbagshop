            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            You can changes your user information here.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/add_new_user" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-6">
                                    <h2>User Information</h2>
                                        <div class="form-group">
                                            <label>Firstname</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Lastname</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter text" value="" required>
                                        </div>
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h2>Login Information</h2>
                                        <div class="form-group">
                                            <label>Avatar </label>
                                            <input type="file" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Leave blank if no changes" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                               <select class="form-control chosen-select" name="status" required>
                                                   <option value="1" ><?php echo status(1); ?></option>
                                                   <option value="0" ><?php echo status(0); ?></option>
                                               </select>
                                        </div>        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <button role="button" type="submit" class="btn btn-default">Add New</button>
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