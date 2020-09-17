<?php 
include "header.php"; 


$id   = $_GET['id']; 
$sql  = "SELECT * from items WHERE id=$id ";
$items= mysqli_query($connect, $sql);
 
$row  = mysqli_fetch_assoc($items);

$itemname   = $row['itemname'];
$foundby    = $row['found_by'];
$contact    = $row['contact'];
$location   = $row['location'];
$descri     = $row['item_description'];
$img        = $row['item_img']; 
?>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Item Details</h2> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">

      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-4 col-xl-4">
          <div class="item-img"  >
            <div id="vertical">
              <div data-thumb="img/itemimage/<?php echo $img;?>">
                <img src="img/itemimage/<?php echo $img;?>" />
              </div> 
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6">
          <div class="s_product_text"> 
            <h3><?php echo $itemname;?></h3>
            <h2><?php echo $location;?></h2>
            <ul class="list">
              <li>
                <span>Found By</span> : <?php echo $foundby;?> 
              </li>
              <li>
               <span>Contact Info</span> : <?php echo $contact;?>
              </li>
              <li>
                <p><h6>Item Description</h6>
                <?php echo $descri;?></p>  
              </li>
            </ul>
             
            <!-- <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="#" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
 

  <?php include "footer.php"; ?>