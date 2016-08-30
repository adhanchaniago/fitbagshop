            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill all required field below to add new post tag.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/add_new_post_tag" method="post" name="form_add_new_tag" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tag Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter text" value="" required>
                                        </div>                      
                                        <div class="form-group">
                                            <label>Short Description of this tag</label>
                                            <textarea class="form-control" name="description" rows="3" required></textarea>
                                        </div>                                       
                                </div>

                               
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