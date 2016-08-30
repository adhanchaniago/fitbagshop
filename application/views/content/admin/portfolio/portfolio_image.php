            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Portfolio Data Goes Here
                            <span class="pull-right"><a href="javascript:;" onclick="add_new_image();" class="btn btn-default btn-sm" title="Edit portfolio detail"><i class="fa fa-plus"></i></a></span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="60%">Images (Click to see)</th>
                                            <th width="23%">Last update</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($images)) foreach($images as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><a href="<?php echo base_url(); ?>assets/uploads/portfolio/<?php echo $rows['image']; ?>" target="_blank"><?php echo $rows['image']; ?></td>
                                            <td class="center"><?php echo format_date($rows['last_update']); ?></td>
                                            <td class="center">
                                            <a href="javascript:;" class="btn btn-default" title="Edit portfolio image" onclick="edit_portfolio(<?php echo $rows['id']; ?>, '<?php echo $rows['image']; ?>');" ><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo admin_url(); ?>process/delete_portfolio_image/<?php echo $rows['id']; ?>" class="btn btn-default" title="Delete this portfolio"><i class="fa fa-trash"></i></a>
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
                <!-- /.col-lg-8 -->

                <!-- Col-lg-4 -->
                <div class="col-lg-4">
                <!-- Add new portfolio image -->
                <div class="panel panel-default" id="add_portfolio" style="display: none;">
                        <div class="panel-heading">
                            Add New Portfolio Image
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/add_new_portfolio_image" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Image</label>
                                                <input type="file" name="image" required>
                                                <span class="small">*This image for displayed in portfolio detail.</span>
                                            </div>                                            
                                        </div>
                                        </div>    
                                        <input type="hidden" name="portfolio_id" value="<?php echo $portfolio_id; ?>">
                                </div>

                               
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <a href="javascript:;" class="btn btn-default" onclick="cancel_image();">Cancel</a>
                                        <button role="button" type="submit" class="btn btn-default">Add New</button>
                                    </div>
                                </div>   
                              </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel add new portfolio image -->

                    <!-- Add new portfolio image -->
                    <div class="panel panel-default" id="edit_portfolio" style="display: none;">
                        <div class="panel-heading">
                            Edit Portfolio Image (<span id="cur_image"></span>)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/edit_portfolio_image" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Image</label>
                                                <input type="file" name="image" required>
                                                <span class="small">*Current image will be replaced.</span>
                                            </div>                                            
                                        </div>
                                        </div>    
                                        <input type="hidden" name="portfolio_id" value="<?php echo $portfolio_id; ?>">
                                        <input type="hidden" name="image_id" id="port_image_id" value="">
                                </div>
                               
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <a href="javascript:;" class="btn btn-default" onclick="cancel_image();">Cancel</a>
                                        <button role="button" type="submit" class="btn btn-default">Save Changes</button>
                                    </div>
                                </div>   
                              </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel add new portfolio image -->

                </div>
                <!-- End col-lg-4 -->
            </div>
            <!-- /.row -->

<script type="text/javascript">
function add_new_image()
{
    $('#add_portfolio').fadeIn();
}    
function cancel_image()
{
    $('#add_portfolio').fadeOut();
    $('#edit_portfolio').fadeOut();
}   
function edit_portfolio(id, image)
{
    $('#cur_image').html('');
    $('#cur_image').append(image);
    $('#port_image_id').val(id);
    $('#edit_portfolio').fadeIn();
}
</script>            