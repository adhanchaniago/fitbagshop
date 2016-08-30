            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Tag Data Goes Here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="28%">Tag Name</th>
                                            <th width="48%">Short Desc</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($tag)) foreach($tag as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows['name']; ?></td>
                                            <td><?php echo short_string($rows['description']); ?></td>
                                            <td><?php echo status($rows['is_active']); ?></td>
                                            <td class="center">
                                            <a href="<?php echo admin_url(); ?>blog/edit_tag_data/<?php echo $rows['id']; ?>" class="btn btn-default" title="Edit Detail Tag"><i class="fa fa-pencil"></i></a>
                                            <?php if($rows['is_active'] == 1) { ?>
                                            <a href="<?php echo admin_url(); ?>process/delete_post_tag/<?php echo $rows['id']; ?>?status=0" class="btn btn-default" title="Unactivate This Tag"><i class="fa fa-close"></i></a>
                                            <?php } else { ?>
                                            <a href="<?php echo admin_url(); ?>process/delete_post_tag/<?php echo $rows['id']; ?>?status=1" class="btn btn-default" title="Unactivate This Tag"><i class="fa fa-check"></i></a>
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