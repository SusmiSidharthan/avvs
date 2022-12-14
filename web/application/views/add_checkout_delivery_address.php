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
         
    
             
             <!--Edit address start-->
              <h2 class="in-heda-ab">Add Address</h2>
            
            <div class="add-add-ab">
             <form enctype="multipart/form-data" method="post" action="<?= CUSTOM_BASE_URL . 'account/add_checkout_address' ?>">
              <div class="row">
                  
               <div class="col-12">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Your Name</label>
                 <input name="name" type="text" class="form-control pro-fld-ad" id="formGroupExampleInput" value=""  required>
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Mobile Number</label>
                 <input name="mobile" type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)" minlength="10" maxlength="10" class="form-control pro-fld-ad" id="formGroupExampleInput" value="" required >
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Alternate Phone</label>
                 <input name="alter_phone" type="text" onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)"  class="form-control pro-fld-ad" id="formGroupExampleInput" value="" >
                </div>
               </div>
                  
               <div class="col-12">
                <div class="form-group">
                 <label class="pro-txt-ad">Full Address</label>
                 <textarea name="address" class="form-control pro-fld-ad" id="comment"></textarea>
                
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Landmark</label>
                 <input name="land_mark" type="text" class="form-control pro-fld-ad" id="formGroupExampleInput" value="" required >
                </div>
               </div>
                  
               <div class="col-6">
                <div class="form-group">
                 <label class="pro-txt-ad" for="formGroupExampleInput">Pincode</label>
                 <input name="pincode" type="text" class="form-control pro-fld-ad" id="formGroupExampleInput"  value="" required>
                </div>
               </div>
                  
              <div class="col-12">   
                  <div class="form-group edtaddab12">
                      <input type="submit" class="consul-dg-bt12" value="Save">
                  </div>
              </div>
                  
              </div>
             </form>
            </div>
            
            
             <!--Edit address end-->
            
            



 
     </div>
     
      <div class="cht-log-control">
        <?php if(!empty($address)) { ?>
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
                            <h4 class="product-name font-w600">BigChoice Tempered Glass Guard for Gionee A1</h4>
                            <br>
                            <div class="crt-price product-single-price font-w600">??? <?= $stock_rows['list_price']; ?></div>
                            <button class="_btn entypo-trash product-remove">Remove</button>
                          </div>
                          <div class="crt-product-col _column product-modifiers" data-product-price="<?= $stock_rows['list_price']; ?>">
                            <div class="_grid">
                              <button class="_btn _column product-subtract">&minus;</button>
                              <div class="_column product-qty"><?= $stock_rows['qty']; ?></div>
                              <button class="_btn _column product-plus">&plus;</button>
                              </div>
                            <div class="price product-total-price">??? <?= $stock_rows['list_price'] * $stock_rows['qty']; ?></div>
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

                   <div class="bt-radio-aa">
                 <div class="clearfix">
                  <label class="<?= $active; ?>">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked=""> 
                  </label>

                  Cash on Delivery
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
     <div class="_grid cart-totals">
         
         
         
      <!--<div class="_column subtotal" id="subtotalCtr">-->
      <!--  <div class="cart-totals-key">Subtotal</div>-->
      <!--  <div class="cart-totals-value">??? <?= $stock_rows['sub_total']; ?></div>-->
      <!--</div>-->
      <!--<div class="_column shipping" id="shippingCtr">-->
      <!--  <div class="cart-totals-key">Shipping</div>-->
      <!--  <div class="cart-totals-value">??? 0.00</div>-->
      <!--</div>-->
      <!--<div class="_column taxes" id="taxesCtr">-->
      <!--  <div class="cart-totals-key">Taxes (0%)</div>-->
      <!--  <div class="cart-totals-value">??? 0.00</div>-->
      <!--</div>-->
      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value">??? <?= $stock_rows['sub_total']; ?></div>
      </div>
      
       <input type="hidden" name="gross_total" id="key_display" value="<?= $stock_rows['sub_total']; ?>">

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
  <?php include("web/assets/include/footer-checkout.php");?>
  
   
  <script>


    $(document).ready(function () {//delete_casestudy modal when edit button click
        $('#delModal').on('show.bs.modal', function (e) 
        {
            var rowid = $(e.relatedTarget).data('id');
           // var name = $(e.relatedTarget).data('name');
           // var cropname = $(e.relatedTarget).data('cropname');
            $.ajax({
                type: 'post',
                url: '<?= CUSTOM_BASE_URL;?>account/deleteAddress', //Here you will fetch records 
                data: 'rowid=' + rowid , //Pass $id
                //data: 'rowid=' + rowid + '&name=' + name + '&cropname=' + cropname, //Pass $id
                success: function (data) {
                 $('.pro-dele').html(data);//Show fetched data from database
                }
            });
        });
    });

    </script>
