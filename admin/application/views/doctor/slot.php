
 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" >Select Slot</h4>
                    <!--<p>Are you sure that you want to permenently delete the selected item?</p>-->
                     <form method="post" action="<?= CUSTOM_BASE_URL. 'Consulting/slot_ins' ?>">
                        
                        <div class="row">
                            <div class="col-md-12">
   
                             <button type="submit" class="btn-save btn btn-primary btn-sm" style="float: right;">Save</button>

                         
                        <select data-width="100%" title="slot" name="slot[]" class="selectpicker" multiple data-actions-box="true" data-live-search="true">
                        <?php  foreach ($slot as $rows) {  ?>

                           <?php $from_time = date('h:i a', strtotime($rows['from_time']));   

                            $to_time = date('h:i a', strtotime($rows['to_time'])); ?>
                 
                            <?php if($rows['status']==1){ ?>
                            
                            <option value="<?php echo $rows['id']; ?>" selected="selected"><?php echo $from_time; ?> - <?php echo $to_time; ?></option>
                            
                            
                        <?php }  else { ?>
                        
                        <option value="<?php echo $rows['id']; ?>"><?php echo $from_time; ?> - <?php echo $to_time; ?></option>
                        
                        <?} }?>

                        </select> 
                           
                            </div>
                        </div>
              
                            
                         <input name="id" type="hidden" value="<?php echo $_POST['rowid'] ?>">
                    </form>
                </div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

                <script>
                    
                $('select').selectpicker();
                    
                </script>