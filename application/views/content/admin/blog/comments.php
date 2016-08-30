            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Post Comments Data Goes Here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="26%">Post</th>
                                            <th width="20%">Detail</th>
                                            <th width="23%">Comments</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Date</th>
                                            <th width="9%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($comments)) foreach($comments as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows['title']; ?></td>
                                            <td>
                                                <?php echo $rows['name']; ?> <br />
                                                <?php echo $rows['email']; ?> <br />
                                                <?php echo $rows['visitor_ip']; ?> 
                                            </td>
                                            <td><?php echo $rows['comment']; ?></td>
                                            <td><?php echo status($rows['is_active']); ?></td>
                                            <td><?php echo format_date($rows['added_date']); ?></td>
                                            <td class="center">
                                            <?php if($rows['is_active'] == 1) { ?>
                                            <a href="<?php echo admin_url(); ?>process/approve_comment/<?php echo $rows['id']; ?>?status=0" class="btn btn-default" title="Unactivate This Tag"><i class="fa fa-close"></i></a>
                                            <?php } else { ?>
                                            <a href="<?php echo admin_url(); ?>process/approve_comment/<?php echo $rows['id']; ?>?status=1" class="btn btn-default" title="Unactivate This Tag"><i class="fa fa-check"></i></a>
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