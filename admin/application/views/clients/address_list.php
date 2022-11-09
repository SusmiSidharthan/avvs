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

          <h1>Address List</h1>

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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Pincode</th>
                                            <th>Address</th>
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






    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
 
 
    <!-- VIEW MODAL BODY -->
   
     <div class="modal fade view-modal" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="project-view"></div>
            </div>
        </div>
    </div>
    
    
    

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
              <div class="del"></div>
            </div>
        </div>
    </div>





      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

   <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
   <script src="<?php echo base_url() ?>layout/assets/javascript.js"></script>
      

<?php include('assets/include/footer.php'); ?>




<script type="text/javascript">
    var table;
    $(document).ready(function() {

        var user_id = $("#user_id").val();

        //datatables id
        table = $('#table').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
        "url": '<?php echo site_url('Clients/address_list'); ?>',
        "type": "POST",
        "data":{user_id:user_id},
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

                $('#del').on('show.bs.modal', function (e) {
                    var rowid = $(e.relatedTarget).data('id');
                    var pid = $(e.relatedTarget).data('pid');
                    //alert(rowid);
                    $.ajax({
                type: 'post',
                url: '<?php echo site_url('Delivery_charge/delete_kg'); ?>', //Here you will fetch records 
                data: 'rowid=' + rowid + '&pincode_id=' + pid, //Pass $id
                success: function (data) {
                    $('.del').html(data);//Show fetched data from database
                }
        });
        });
        });

    </script>

<script>
    $(document).ready(function () {

        $('#kg-modal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: '<?php echo site_url('Delivery_charge/kg_details'); ?>',
                data: 'rowid=' + rowid, //Pass $id
                //data: 'rowid=' + rowid + '&name=' + name, //Pass $id
                success: function (data) {
                    $('.kg').html(data);
                }
            });
        });
    });
</script> 



  </body>

</html>

