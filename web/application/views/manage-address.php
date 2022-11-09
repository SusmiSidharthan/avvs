<?php 

//var_dump($profile); die;

include("web/assets/include/header-c.php");?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>


  <main role="main" class="my-profile-main">
    <div class="container-fluid">    
      <div class="row">
       <!-- Left side -->
        <div class="col-lg-3 col-xl-3">  
            
         <div class="my-profile-left">
             
             
        <?php foreach ($profile as $key => $row) { ?>
          <div class="my-name-txt">
            <!--<div class="my-name-pro">-->
            <!--<img height="100" width="100" id=1 class="img-responsive" src="<?= CUSTOM_BASE_URL . 'admin/uploads/profile/'.$row['prof_image']; ?>"  />-->
            <!--</div>-->
             <h3 class="my-name"><?= $row['user_name']; ?></h3>
          
          </div>
           
           <?php  }  ?>
           
           
           
           
          <ul class="my-name-lnk">
           <li>
            <a href="<?= CUSTOM_BASE_URL;?>my-profile">
             <div class="sid-ul-nam">Profile</div>   
             <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   
            </a>
           </li>
           <li>
            <a class="active" href="<?= CUSTOM_BASE_URL;?>manage-address">
             <div class="sid-ul-nam">Manage Address</div>   
             <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   
            </a>
           </li>
           <!--<li>-->
           <!-- <a href="<?= CUSTOM_BASE_URL;?>notification">-->
           <!--  <div class="sid-ul-nam">Notifications</div>   -->
           <!--  <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   -->
           <!-- </a>-->
           <!--</li>-->
           <li>
            <a href="<?= CUSTOM_BASE_URL. 'wish-list' ?>">
             <div class="sid-ul-nam">My Wishlist</div>   
             <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   
            </a>
           </li>
           <li>
            <a href="<?= CUSTOM_BASE_URL. 'my-order'?>">
             <div class="sid-ul-nam">My Order</div>   
             <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   
            </a>
           </li>
           
           <li>   
            <a href="#">
             <div class="sid-ul-nam">My Appoinment</div>   
             <span><img src="<?php echo base_url();?>assets/images/left-arrow.svg"></span>   
            </a>
           </li>
           
          </ul>
             
          <div class="logout-ab">
            <a href="<?= CUSTOM_BASE_URL. 'user_login/logout' ?>">
            <svg version="1.1" id="Capa_1" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#1138F7;" d="M255.15,511.15H63.787C28.619,511.15,0,482.53,0,447.362V64.638C0,29.47,28.619,0.85,63.787,0.85H255.15c11.737,0,21.262,9.526,21.262,21.262s-9.526,21.262-21.262,21.262H63.787c-11.716,0-21.262,9.547-21.262,21.262v382.724c0,11.737,9.547,21.262,21.262,21.262H255.15c11.737,0,21.262,9.504,21.262,21.262C276.412,501.645,266.886,511.15,255.15,511.15z"/>
            <path style="fill:#1138F7;" d="M446.512,277.262h-255.15c-11.737,0-21.262-9.504-21.262-21.262
                c0-11.737,9.526-21.262,21.262-21.262h255.15c11.758,0,21.262,9.526,21.262,21.262C467.774,267.758,458.27,277.262,446.512,277.262
                z"/>
            <path style="fill:#1138F7;" d="M361.462,404.837c-5.486,0-10.971-2.126-15.139-6.336c-8.25-8.356-8.165-21.815,0.213-30.065
                L460.46,256L346.536,143.564c-8.377-8.25-8.441-21.709-0.213-30.086c8.229-8.377,21.73-8.441,30.065-0.191l129.276,127.575
                c4.04,3.997,6.336,9.441,6.336,15.139s-2.275,11.12-6.336,15.139L376.388,398.714C372.263,402.796,366.862,404.837,361.462,404.837
                z"/>
            </svg>
            <span>Logout</span>
            </a>
          </div>
             
         </div>

        </div>
        <!-- /Left side -->          
          
        <div class="col-lg-9 col-xl-9">
         <div class="my-profile-right clearfix">
          <div class="mange-add-ac">
           <h2 class="in-heda-ab">Manage Address</h2>
              
            <div id="man-add-ac" style="display:none;">
            <div class="row">
            <div class="col-8">
                
            <div class="add-add-ab">
             <form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'delivery-address-add' ?>">
              <div class="row">
                  
               <div class="col-12">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Your Name</label>
                 <input name="name" type="text" class="pro-fld-ad" id="formGroupExampleInput" >
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Mobile Number</label>
                 <input name="mobile" type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" class="pro-fld-ad" id="formGroupExampleInput" >
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Alternate Phone</label>
                 <input name="alter_phone" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" type="text" class="pro-fld-ad" id="formGroupExampleInput" >
                </div>
               </div>
                  
               <div class="col-12">
                <div class="form-group">
                 <label class="pro-txt-ad">Full Address</label>
                 <textarea name="address" class="pro-fld-ad" id="comment"></textarea>
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Landmark</label>
                 <input name="land_mark" type="text" class="pro-fld-ad" id="formGroupExampleInput" >
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Pincode</label>
                 <input name="pincode" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)"  type="text" class="pro-fld-ad" id="formGroupExampleInput" >
                </div>
               </div>
                  
              <div class="form-group">
                <input type="submit" class="pro-btn-ad" value="Add">
                <input type="button" class="pro-btn-cnl" value="Clear">
              </div>
                  
              </div>
             </form>
            </div>
                
            </div>
            </div> 
            </div>
            
            
            <div class="row">
             <div class="col-8">
              <button id="hidea" style="display:none;">Close</button>
              <button id="showa">Add New Address +</button>
             </div>
            </div>
              
              
         <div data-toggle="buttons"> 
         
         
          
             </div> 
         

        <?php foreach ($result as $key => $row) { ?>
             
         <div class="add-del-ad">
         <div class="bt-radio-aa">
             <div class="clearfix">
                 
                 
              <label class="">
                  
                <input type="radio" name="option" id="option"  value="<?= $row['id']; ?>"  <?php if ($row['status'] == 1){  ?> checked<?php  } ?> > 
                
              </label>
                 
              <!--<label class="bt-radio-ab btn active">-->
              <!--   <input type="radio" name="options" id="option"  value="<?= $row['id']; ?>" >  -->
              <!--</label>-->
             </div>  
         </div>
          <h2 class="add-me-ae"><?= $row['name']; ?></h2>
          <h3 class="add-ph-ae"><?= $row['phone']; ?></h3>
          <p class="add-af"><?= $row['address'].' ,'.$row['pincode'].' ,'.$row['land_mark']; ?></p>
         <div class="aad-ed-ab">
             
             <a href="<?= CUSTOM_BASE_URL.'account/delivery_address_edit/'.$row['id'] ?>" class="btn btn-edit-ag" >Edit</a>
            <!--<button type="button" class="btn btn-edit-ag">Edit</button>-->
           
            <button type="button" class="btn btn-delete-ag" data-toggle="modal"  data-target="#exampleModal">Delete</button>
            
            
            <!--<a data-toggle="modal" data-id="<?= $row['id']; ?>" data-target="#del-modal" class="btn btn-delete-ag" href="#">Delete</a>-->
            
        </div>  
        </div>
                  
 

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                
                <div class="modal-body">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <h4 class="modal-title" >Are you sure want to delete ?</h4>
                 
                    <form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'account/deleteAddress' ?>">
                     <!--<form enctype="multipart/form-data" method="post" action="https://avvvs.com/web/account/deleteAddress" >-->
                         
                        <input type="submit" class="btn confirm-btn" name=delete value="Yes">
                        <input type="button" class="btn confirm-btn" value="No" data-dismiss="modal">
                         <input  name="rowid" type="hidden" value="<?= $row['id']; ?>">
                
                    </form>
                    
                </div>
    </div>
  </div>
</div>
           
     <?php } ?>       
           
             
             
             
            
          </div>
         </div>  
        </div>
        <!-- /Right side -->
          
      </div>    
    </div> 
        
 </main>    
 <?php include("web/assets/include/footer.php");?>
 
 
 
 
 
 <script >
 
 var rad = document.getElementsByName('option');
var prev = null;
for (var i = 0; i < rad.length; i++) {
    rad[i].addEventListener('change', function() {
        (prev) ? console.log(prev.value): null;
        if (this !== prev) {
            prev = this;
        }
        console.log(this.value)
        
            ajaxRequest= $.ajax({
                url: "<?= CUSTOM_BASE_URL . 'account/changeDeliveryAddressStatus' ?>",
                type: "post",
                data: 'id=' + this.value,
                
            });
        
        
        
        
    });
}

        
 </script>
 
 
 
 
 
 
 
 
 
 
 
 