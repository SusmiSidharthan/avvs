
                <div class="modal-header">
                    <h4 class="modal-title" >KG Amount Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                     <form method="post" action="<?= CUSTOM_BASE_URL. 'Delivery_charge/kg_ins' ?>">
              
              <div class="row">          
              <div class="col-md-6">
                  <div class="form-group">
                      <label>From KG</label>
                      <input  name="from" class="form-control"  type=number step=0.001>
                       <?php echo form_error('from', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>
              </div>


              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label>To KG</label>
                      <input name="to" class="form-control"  type=number step=0.001>
                       <?php echo form_error('to', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>
              </div>
              

              <div class="row">          
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Amount</label>
                      <input type="text" name="amount" class="form-control"  onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">
                       <?php echo form_error('amount', '<p class="help-block error-info">', '</p>'); ?>
                  </div>
              </div>
              </div>
                        
                        <button type="submit" class="btn-save btn btn-primary btn-sm">Save</button>
              
                            
                         <input name="id" type="hidden" value="<?php echo $_POST['rowid'] ?>">
                    </form>
                </div>
                
                
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    
$('select').selectpicker();
    
</script>                
