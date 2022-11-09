<!DOCTYPE html>

<html>

  <head>

    <?php include('assets/include/header.php'); ?>

  </head>

  <body class="hold-transition skin-blue sidebar-mini">

    <!-- Site wrapper -->

    <div class="wrapper">

    <?php include('assets/include/navigation.php'); ?>


      <div class="content-wrapper">

        <!-- Content Header -->

        <section class="content-header">

          <h1>SMS List</h1>

        </section>


        <!-- Main content -->

          <section class="content">

            <div class="box">


       <div class="box-body">
                 <div class="panel panel-default">
                  <div class="panel-body panel-scroll">
       <table width="100%" class="table table-striped table-bordered table-hover" id="table">
                                    <thead>
                                        <tr>
                                            <th>#Serial</th>
                                            <th>Patient Name</th>
                                            <th>Mobile Number</th>
                                            <th>Apponment Date</th>
                                            <th>Apponment Time</th>
                                            <th>Created Date</th>
                                        </tr>
                                    </thead>
                                </table>
                  </div>
                 </div>
                </div><!-- /.box-body -->

              </div><!-- /.box -->

               

          </section>

<!-- /.content -->

      </div><!-- /.content-wrapper -->


       <!-- VIEW MODAL BODY -->
       <div class="modal fade view-modal" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="project-view"></div>
            </div>
        </div>
    </div>

      <!-- DELETE MODAL BODY -->
      <div class="modal fade del-modal" id="del-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
               <div class="del"></div>
            </div>
        </div>
    </div>


    <!-- ADD flash message MODAL BODY -->
    <div class="modal fade sucs-modal" id="add_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4 class="modal-title" >Added successfully !</h4>
                    <button type="button" class="btn confirm-btn" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
     <!-- UPDATE flash message MODAL BODY -->
    <div class="modal fade sucs-modal" id="update_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4 class="modal-title" >Updated successfully !</h4>
                    <button type="button" class="btn confirm-btn" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DELETE flash message MODAL BODY -->
    <div class="modal fade sucs-modal" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4 class="modal-title" >Deleted successfully !</h4>
                    <button type="button" class="btn confirm-btn" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

 <!--Special case flash message Edit MODAL BODY -->
 <div class="modal fade sucs-modal" id="fee_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4 class="modal-title" >Fee confirmation added successfully !</h4>
                    <button type="button" class="btn confirm-btn" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>




      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->



     <?php include('assets/include/footer.php'); ?>

     </script>
  </body>
</html>



     <script>


    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


<script type="text/javascript">
    var table;
    $(document).ready(function() {
        //datatables id
        table = $('#table').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
        "url": '<?php echo site_url('Sms/list'); ?>',
        "type": "POST",
        },
        });
    });

    //sucessfuly add edit delete popup with fals data
    <?php if ($this->session->flashdata('add')) { ?>
        $("#add_confirm").modal('show');<?php } ?>
    <?php if ($this->session->flashdata('update')) { ?>
        $("#update_confirm").modal('show');<?php } ?>
    <?php if ($this->session->flashdata('delete')) { ?>
        $("#delete_confirm").modal('show');<?php } ?>

    <?php if ($this->session->flashdata('confirm')) { ?>
        $("#fee_confirm").modal('show');<?php } ?>

      $(function () {

        $("#example1").DataTable();

        $('#example2').DataTable({

          "paging": true,

          "lengthChange": false,

          "searching": false,

          "ordering": true,

          "info": true,

          "autoWidth": false

        });

      });


    </script>
