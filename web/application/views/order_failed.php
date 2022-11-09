<?php include("web/assets/include/header-c.php");?>

<main role="main" class="order-placed-main">
    
  <?php foreach ($cart_list as $key => $cat_row) { ?> 

 <div class="container">
   <div class="order-out-ab">
       
       
     <div class="row">
        <div class="col-12 text-center faile-adh12">
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/pay-12failed.png">
        </div>    
    </div>    
       
       
    <div class="row">
     <div class="col-12">   
     
         <div class="about-time-order-ab" style="background: #cd0f0f;">Payment Failed
         </div> 
         <div class="faile-adh13"><h5 class="text-center">Don't Worry Your Money is Safe</h5></div>
      <!--<div class="about-time-order-ab">Thankyou... Delivery expected by Mon, Feb 18th 19</div> -->
     </div>
    </div>
       


  
       
   </div>
 </div>
<?php } ?>
    
</main>

 <?php include("web/assets/include/footer.php");?>
 
 <script type="text/javascript">
 $(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
 history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
});

</script>
