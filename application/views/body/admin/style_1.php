<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php if(!empty($title)) { echo $title; } else { echo 'Untitled'; } ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        
        <!-- Codeigniter load view for css -->
        <?php if(!empty($css)) { $this->load->view($css); } else { $this->load->view('body/admin/css/style_default'); } ?>

        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md page-header-menu-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container-fluid">
                    <!-- Codeigniter load view for left navbar (title page) -->
                    <?php $this->load->view('common/admin/left_navbar'); ?>
                    
                    <!-- Codeigniter load view for right navbar (user profile, logout goes here) -->
                    <?php $this->load->view('common/admin/right_navbar'); ?>

                </div>
            </div>
            <!-- END HEADER TOP -->

            <!-- Codeigniter load view for sidebar menu (All admin menu goes here) -->
            <?php $this->load->view('common/admin/menu'); ?>

        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container-fluid">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php if(!empty($title)) { echo $title; } else { echo 'Untitled'; } ?></h1>
                        </div>
                        <!-- END PAGE TITLE -->                       
                        
                        <!-- Codeigniter load view for toolbar (All admin menu goes here) -->
                        <?php $this->load->view('common/admin/toolbar'); ?>

                    </div>
                </div>
                <!-- END PAGE HEAD-->
                
                <div class="page-content">
                    <div class="container-fluid">
                        <?php $this->load->view('common/admin/notification'); ?> 
                    </div>
                </div>

                <!-- Codeigniter load view for page content here -->
                <?php $this->load->view($content); ?>

            </div>
            <!-- END CONTENT -->
            
            <!-- Codeigniter load view for page content quick sidebar here -->
            <?php $this->load->view('common/admin/quick_sidebar'); ?>

        </div>
        <!-- END CONTAINER -->
        
        <!-- Codeigniter load view for page footer -->
        <?php $this->load->view('common/admin/footer'); ?>
        
        <!-- Codeiniter begin js part -->
        <?php if(!empty($js)) { $this->load->view($js); } else { $this->load->view('body/admin/js/js_default'); } ?>

    </body>

</html>