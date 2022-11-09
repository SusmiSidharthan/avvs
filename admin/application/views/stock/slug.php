
                <div class="modal-header">
                    <h4 class="modal-title" >Slug Url</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

              
              <div class="row">          
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Slug</label>
                      <input  name="slug" id="slug" class="form-control"  type="text" value="<?php echo $slug; ?>" required>
                  </div>
              </div>
              </div>

                        
              <button type="submit" id="submit" class="btn-save btn btn-primary btn-sm">Save</button>
              <div style="color:orange;" id="slug_wrong"></div>
                            
                         <input name="id" id="con_id" type="hidden" value="<?php echo $_POST['rowid'] ?>">

                </div>
                
                
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    
$('select').selectpicker();

 $(function () {

  $('#submit').on('click', function (ee) {

    var slug = $('#slug').val();

    var id = $('#con_id').val();

    ee.preventDefault();

    $.ajax({
      type: 'post',
      url: '<?= CUSTOM_BASE_URL;?>Stock_update/slug_ins',
      data: 'slug=' + slug + '&id=' + id,

      success: function (data) {

        if(data==2) {

          document.getElementById("slug_wrong").innerHTML = 'Duplicate Slug';              
        }

        else{

          location.reload('<?= CUSTOM_BASE_URL;?>Stock_update');

        }          
      }

    });

  });

});

 </script>
    
</script>                
