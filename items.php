<?php include "header.php";  

    

    $item_count = array();
    $sql1       = "SELECT COUNT(id) as total_items, itemname FROM items GROUP BY itemname";
    $tolal_item = mysqli_query($connect, $sql1);
    
    
    if (!$tolal_item) {
        die("2nd Query Failed!");
    }
    while ($row = mysqli_fetch_assoc($tolal_item)) {
        
        $item_count[] = $row['total_items'];
    }


    if(isset($_POST['searchby'])){
        echo "helkfsd";
    }
     
?>



 
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>All items</h2>
                        <p>Home <span>-</span> Items</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row"> 
            <div class="col-lg">
                <div class="product_top_bar d-flex justify-content-between align-items-center">
                    <a href="post-items.php" class="genric-btn primary circle arrow">Post Here<span class="lnr lnr-arrow-right"></span></a>
                    <div class="single_product_menu">
                        <p><span><?php echo count($item_count) ;?> </span> Products Found</p>
                    </div>
                    <div class="single_product_menu d-flex">
                        <div class="input-group">
                            <input name="searchby" type="text" class="form-control" placeholder="Search by Place" aria-describedby="inputGroupPrepend">
                            <div class="input-group-prepend">
                                <button class="input-group-text" id="inputGroupPrepend"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="row latest_product_inner align-items-center">
        <?php
                $sql            = "SELECT * from items";  
                $items_detail   = mysqli_query($connect,$sql);
                while($row1 = mysqli_fetch_assoc($items_detail)){
        ?> 

            <div class="col-sm-4">
                <div class="single_product_item">
                    <img src="img/itemimage/<?php echo $row1['item_img'];?>" alt="">
                    <div class="single_product_text">
                        <h4><?php echo $row1['itemname']; ?></h4>
                        <p>Location - <?php echo $row1['location']; ?></p>
                        <a href="single-product.php?id=<?php echo $row1['id'];?>"><button  class="genric-btn primary e-large">Item Details</button></a>
                    </div>
                </div>
            </div>
                
        <?php
            }
        ?>      
        </div>   
        
    </div>
</section>
<!--================End Category Product Area =================-->


<?php include "footer.php"; ?>

<!-- <div class="row align-items-center ">        
                        <div class="col-md-3">
                                
                        </div> 
                </div> -->