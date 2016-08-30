    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin Css -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap-chosen-master/bootstrap-chosen.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/datetimepicker-master/jquery.datetimepicker.css" rel="stylesheet" type="text/css">


    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/datatables-responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Tiny MCE COde Editor -->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
            selector: "#tinymce",theme: "modern",height: 500,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking fullscreen",
                 "table contextmenu directionality emoticons paste textcolor responsivefilemanager code jbimages"
           ],
           image_advtab: true,
           relative_urls: false,
           toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
           toolbar2: "| responsivefilemanager jbimages image media | link unlink anchor | print preview code  | youtube | qrcode | flickr | picasa | forecolor backcolor | easyColorPicker",    

           external_filemanager_path:"<?php echo base_url(); ?>assets/admin/bower_components/filemanager/",
           filemanager_title:"ASoft Filemanager" ,
           external_plugins: { "filemanager" : "<?php echo base_url(); ?>assets/admin/bower_components/tinymce/plugins/responsivefilemanager/plugin.min.js"}
         });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->