            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo admin_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="PopupCenter('<?php echo base_url(); ?>assets/admin/bower_components/filemanager/dialog.php?type=0&editor=mce_0','Filemanager','900','500');
" target=""><i class="fa fa-folder fa-fw"></i> Filemanager</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building fa-fw"></i> Office<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo admin_url(); ?>office"><i class="fa fa-building-o"></i> Office Detail</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Blog<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/add_new"><i class="fa fa-plus"></i> Add New Post</a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog"><i class="fa fa-list-alt"></i> Post Data</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/add_new_category"><i class="fa fa-plus"></i> Add New Category</a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/category_data"><i class="fa fa-th-list"></i> Category Data</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/add_new_tag"><i class="fa fa-plus"></i> Add New Tag</a>
                                </li> 
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/tag_data"><i class="fa fa-tags"></i> Tag Data</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>blog/comments"><i class="fa fa-comment"></i> Comments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>   
                        <li>
                            <a href="#"><i class="fa fa-coffee fa-fw"></i> Portfolio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo admin_url(); ?>portfolio/add_new"><i class="fa fa-plus"></i> Add New Portfolio</a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>portfolio"><i class="fa fa-tasks"></i> My Portfolio</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>portfolio/add_new_category"><i class="fa fa-plus"></i> Add New Portfolio Category</a>
                                </li>                                
                                <li>
                                    <a href="<?php echo admin_url(); ?>portfolio/category_data"><i class="fa fa-th-list"></i> My Portfolio Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo admin_url(); ?>user/add_new"><i class="fa fa-plus"></i> Add New User</a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>user"><i class="fa fa-tasks"></i> User List</a>
                                </li>
                                <li>
                                    <a href="<?php echo admin_url(); ?>user/profile/<?php echo $this->session->userdata('user_id'); ?>"><i class="fa fa-user"></i> My Profile</a>
                                </li>   
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

<script>
function PopupCenter(url, title, w, h) {
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
            
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
            
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    if (window.focus) {
        newWindow.focus();
    }
}

</script>