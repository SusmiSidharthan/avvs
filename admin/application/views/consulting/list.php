<!DOCTYPE html>

<html>

  <head>

    <?php include('assets/include/header.php'); ?>

  </head>

  <body class="hold-transition skin-blue sidebar-mini">

    <!-- Site wrapper -->

    <div class="wrapper">



     

 <?php include('assets/include/navigation.php'); ?>

      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>Appoinments</h1>

        </section>



        <!-- Main content -->

          <section class="content">

            <div class="box">

  <div class="box-body panel-scroll">

       <table width="100%" class="table table-striped table-bordered table-hover" id="table">
                                    <thead>
                                        <tr>
                                            <th>#Serial</th>
                                            <th>Place</th>
                                            <th>Patient name</th>
                                            <th>Phone</th>
                                            <th>Dob</th>
                                            <th>Doctor</th>
                                            <th>Appoinment Date</th>
                                            <th>Timeslot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>

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
    <!--VIEW MODAL BODY -->
    
    
    
    
  

    <!-- ADD MODAL BODY -->
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
     <!-- UPDATE MODAL BODY -->
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
    <!-- DELETE MODAL BODY -->
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











        <!-- DELETE MODAL BODY -->
   
        <div class="modal fade view-modal" id="del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="project-view"></div>
                </div>
            </div>
        </div>





      <!-- Control Sidebar -->

     

      <!-- Add the sidebar's background. This div must be placed

           immediately after the control sidebar -->

      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->



    <!-- jQuery 2.1.4 -->

     <?php include('assets/include/footer.php'); ?>

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
        "url": '<?php echo site_url('Consulting/consulting_list'); ?>',
        "type": "POST",
        },
        });
    });

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
      
      
      
      $(document).ready(function () {

                $('#view-modal').on('show.bs.modal', function (e) {
                    var rowid = $(e.relatedTarget).data('id');
                    //alert(rowid);
                    $.ajax({
                type: 'post',
                url: '<?php echo site_url('Consulting/View'); ?>', //Here you will fetch records 
                data: 'rowid=' + rowid, //Pass $id
                success: function (data) {
                    $('.project-view').html(data);//Show fetched data from database
                }
        });
        });
        });
        
        
         $(document).ready(function () {

                $('#del').on('show.bs.modal', function (e) {
                    var rowid = $(e.relatedTarget).data('id');
                    //alert(rowid);
                    $.ajax({
                type: 'post',
                url: '<?php echo site_url('Consulting/delete'); ?>', //Here you will fetch records 
                data: 'rowid=' + rowid, //Pass $id
                success: function (data) {
                    $('.project-view').html(data);//Show fetched data from database
                }
        });
        });
        });


    </script>

  </body>

</html>


<style type="text/css">
  select{
  width: 150px;
  height: 30px;
  padding: 5px;
  color: green;
}
select option { color: green; }
select option:first-child { color:red; }
</style>

