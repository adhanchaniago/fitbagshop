            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill all required field below to add new post category.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/edit_post_category" method="post" name="form_add_new_category" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter text" value="<?php echo $category['name']; ?>" required>
                                        </div>                      
                                        <div class="form-group">
                                            <label>Short Description of this category</label>
                                            <textarea class="form-control" name="description" rows="3" required><?php echo $category['description']; ?></textarea>
                                        </div>  
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control chosen-select" name="status" required>
                                                    <option value="0" <?php if($category['is_active'] == 0) { echo 'selected'; } ?>><?php echo status(0); ?></option>
                                                    <option value="1" <?php if($category['is_active'] == 1) { echo 'selected'; } ?>><?php echo status(1); ?></option>
                                                </select>
                                        </div>                                       
                                </div>

                               <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>" />
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