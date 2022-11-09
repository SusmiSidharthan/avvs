<?php include("web/assets/include/header-checkout.php");?>


  <main role="main" class="cht-main cart-main">
      
    <div class="container-fluid cht-main-pos">
      
      
      <div class="row">
       <!-- Left side -->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8"> 
         <div class="cht-left-main">
           <div class="col-lg-12 col-xl-12">   
           <h2 class="cht-head-txt">Checkout</h2>
      <div>
          
            <?php if($responce = $this->session->flashdata('address_msg')): ?>
                
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $responce;?>.</strong> 
                    </div>
            
            <?php endif;?>
                
                
        <div class="multiPageForm">
            <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1">Address</a></li>
               <?php if(!empty($address)) { ?>
                <li class="tabs-title"><a href="#panel3">Order Summary</a></li>
                <li class="tabs-title"><a href="#panel4">Payment Options</a></li>
                 <?php } else { ?>
                   <li class="tabs-title"><a href="#">Order Summary</a></li>
                <li class="tabs-title"><a href="#">Payment Options</a></li>
              <?php } ?>
            </ul>
            
              
            <div class="tabs-content" data-tabs-content="example-tabs">
                
      
                          
     <div class="tabs-panel is-active" id="panel1"> 
               
        <div class="checkout-ab"> 
          <?php if(!empty($address)) { 
              
                foreach ($address as $key => $address_rows) { 

                    if($address_rows['status'] == 1)
                    {
                      $active = 'bt-radio-ab btn active';
                      
                      $active_status = 1;
        
                    }
                    else{
        
                      $active = 'bt-radio-ab btn';
                      
                      $active_status = 2;
        
                    }

            ?>
         <div class="add-del-ad">
             <div class="bt-radio-aa">
                 <div class="clearfix">
                     
                        
              <!--<label class="">-->
              <!--  <input type="radio" name="options" id="option"  value="<?=$address_rows['address_id']; ?>" > -->
              <!--</label>-->
              
               <label class="">
                  
                <input type="radio" name="option" id="option"  value="<?=$address_rows['address_id']; ?>"  <?php if ($address_rows['status'] == 1){  ?> checked<?php  } ?> > 
                
              </label>
              
              
                  <!--<label class="<?= $active; ?>">-->
                    <!--<input type="radio" name="options" id="option1" autocomplete="off" checked=""> -->
                  <!--   <input type="radio" name="options" id="option<?= $address_rows['address_id']; ?>" autocomplete="off" checked=""> -->
                  <!--</label>-->
                  
                  
                  
                  
                 </div>  
             </div>
              <h2 class="add-me-ae"><?= $address_rows['name']; ?></h2>
              <h3 class="add-ph-ae"><?= $address_rows['phone']; ?></h3>
              <p class="add-af"><?= $address_rows['address']; ?></p>
              <p class="add-af">Pin: <?= $address_rows['pincode']; ?></p>
             <div class="aad-ed-ab">
                 
                <!--<button type="button" class="btn btn-edit-ag">Edit</button>-->
                  <a href="<?= CUSTOM_BASE_URL.'account/checkout_delivery_address_edit/'.$address_rows['address_id'] ?>" class="btn btn-edit-ag" >Edit</a>
                  <button type="button" class="btn btn-delete-ag" data-toggle="modal"  data-target="#exampleModal">Delete</button>
                
                <!--<a data-toggle="modal" data-id"<?= $address_rows['address_id']; ?>"  data-target="#delModal" class="btn btn-delete-ag" href="#"></a>Delete</button>-->
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
                         
                            <form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'account/deleteCheckoutAddress' ?>">
                                 
                                <input type="submit" class="btn confirm-btn" name=delete value="Yes">
                                <input type="button" class="btn confirm-btn" value="No" data-dismiss="modal">
                                 <input  name="rowid" type="hidden" value="<?= $address_rows['address_id']; ?>">
                        
                            </form>
                            
                        </div>
            </div>
          </div>
        </div>





 
         <?php } } else { ?>
          <a  href="<?= CUSTOM_BASE_URL;?>account/checkout_delivery_address_add">Please add Delivery Address</a>
          <!--<a target="_blank" href="<?= CUSTOM_BASE_URL;?>account/add_checkout_address">Please add Delivery Address</a>-->
   
        <?php } ?>
     </div>
     
      <div class="cht-log-control">
        <?php if(!empty($address)) { ?>
        
     <a href="<?= CUSTOM_BASE_URL;?>view-cart" class="cht-log-btn prev-tab">Back to Cart</a>
     <a href="#" class="cht-log-btn next-tab">CONTINUE</a>
      <?php } else { ?>
     
     <a href="#" class="cht-log-btn">CONTINUE</a>
      <?php } ?>
      </div>
      </div>
      <!--- /tab 2 --->   
      
                 <div class="tabs-panel" id="panel3">
                   <?php foreach ($product as $key => $stock_rows) { ?>

                  <section class="shopping-cart">
                    <div class="ui-list shopping-cart--list" id="shopping-cart--list">
                      <div id="shopping-cart--list-item-template">
                        <div class="_grid shopping-cart--list-item">
                          <div class="cart-img-out">
                            <img class="product-image--img" src="<?= CUSTOM_BASE_URL . 'admin/uploads/product_multimage/'.$stock_rows['image']; ?>" alt="Item image" />
                          </div>
                          <div class="_column crt-product-info">
                            <h4 class="product-name font-w600"> <?= $stock_rows['stock_name']; ?></h4>
                            <div class="crt-price product-single-price font-w600">₹ <?= $stock_rows['list_price']; ?></div>
                            <button class="_btn entypo-trash product-remove">x Remove</button>
                          </div>
                          <div class="crt-product-col _column product-modifiers" data-product-price="<?= $stock_rows['list_price']; ?>">
                            <div class="_grid">
                              <button class="_btn _column product-subtract">&minus;</button>
                              <div class="_column product-qty"><?= $stock_rows['qty']; ?></div>
                              <button class="_btn _column product-plus">&plus;</button>
                              </div>
                            <div class="price product-total-price">₹ <?= $stock_rows['list_price'] * $stock_rows['qty']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                      <?php } ?>
                  </section>
                    <div class="cht-log-control">
                     <a href="#" class="cht-log-btn prev-tab">Previous</a>
                     <a href="#" class="cht-log-btn next-tab">CONTINUE</a>
                    </div>
                </div>
                <!--- /tab 3 --->      
      
                
                
                
                
                
                
                
                
                
                
                
                
                
                 <div class="tabs-panel" id="panel4">

                   <form id="upload_form" enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'cart-order-placed' ?>">

                <?php if($active_status == 1){ ?>

                   <div class="bt-radio-aa">
                 <div class="clearfix">
                  <label >
                    
                    <input type="radio" name="payment_metod" id="option1" autocomplete="off" checked="" value="1">
                    
                  </label>

                  Cash on Delivery
                 </div>  
                 
                 <div class="clearfix">
                    <label >
                        <input type="radio" name="payment_metod" id="option2" autocomplete="off" value="2"> 
                    </label>
                                            
                    Pay Now
                 </div>                   
                 
             </div>

              <div class="cht-log-control">
               <a href="#" class="cht-log-btn prev-tab">Previous</a>

                <input type="hidden" name="total" value="<?= $stock_rows['list_price']; ?>">

                <?php foreach ($product as $key => $stocks) { ?>

                <input type="hidden" name="sub_total[]" value="<?= $stocks['list_price']; ?>">
                <input type="hidden" name="stock_id[]" value="<?= $stocks['id']; ?>">
                <input type="hidden" name="stock_qty[]" id="key_qty" value="<?= $stocks['qty']; ?>">
                <?php } ?>
               <input class="cht-log-btn" type="submit">
           
              </div>

             <?php  }  else { ?>

                <div class="bt-radio-aa">
                 <div class="clearfix">
                  <label >
                    
                    <input type="radio" name="payment_metod" id="option1" autocomplete="off" value="1">
                    
                  </label>

                  Cash on Delivery
                 </div>  
                 
                 <div class="clearfix">
                    <label >
                        <input type="radio" name="payment_metod" id="option2" autocomplete="off" value="2"> 
                    </label>
                                            
                    Pay Now
                 </div>                   
                 
             </div>

              <div class="cht-log-control">
               <a href="#" class="cht-log-btn prev-tab">Previous</a>
              </div>
             
             
             <?php  }  ?>


                    
                </div>
                <!--- /tab 4 --->     
      
      
      
   </div>

                



            </div>
        </div>
</div>           


               
  
          </div>  
         </div>
   
      <!-- /Left side -->       
 
      <!-- right side -->
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            
          <div class="cht-right-main clearfix">
            <div class="cht-right-main-in col-lg-12 col-xl-12 crt-i-sticky">
    <div class="crt-cart-totals">
        
     <h2 class="crt-head-sum-12">Summary</h2>
     
     <div class="_grid cart-totals">
         
         
         
      <!--<div class="_column subtotal" id="subtotalCtr">-->
      <!--  <div class="cart-totals-key">Subtotal</div>-->
      <!--  <div class="cart-totals-value">₹ <?= $stock_rows['sub_total']; ?></div>-->
      <!--</div>-->

<!--       <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
      <div class="cart-totals-value">₹ <?= $charge; ?></div>
      </div> -->


      <!--<div class="_column taxes" id="taxesCtr">-->
      <!--  <div class="cart-totals-key">Taxes (0%)</div>-->
      <!--  <div class="cart-totals-value">₹ 0.00</div>-->
      <!--</div>-->

      <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
        <div class="cart-delivery-value" id="shipping_charge">0</div>
      </div>

      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value" id="total_value">₹ <?= $stock_rows['sub_total']; ?></div>
      </div>
      
       <input type="hidden" name="gross_total" id="key_display" value="<?= $stock_rows['sub_total']; ?>">

       <input type="hidden" name="del" id="del" value="0">

      </form>

<!--      <div class="_column checkout">
        <button class="_btn-b checkout-btn entypo-forward">Continue Shopping</button>
        <button class="_btn checkout-btn entypo-forward">Checkout</button>
      </div>-->
    </div>
   </div>
         </div>
        </div>
      </div>
     <!-- /right side -->          
           
    </div> 
   
  </div>  

 </main>


 </script>
 
  



  <?php include("web/assets/include/footer-checkout.php");?>
  
   
 
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

                success: function (data) {

                  if(data != 1){

                    $('input[name=option]').attr('checked',false);
                    alert("Choose valid address");

                  }
                }
                
            });
        
        
        
        
    });
}

</script>

        
