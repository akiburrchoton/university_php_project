<?php include "header.php"; ?>



<!-- banner part start-->
<section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                            <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            
                            <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Found Anything?
                                                </h1>
                                            <p>Feel free to post it here and help the owners to get it. </p>
                                            <a href="post-items.php" class="btn_2">POST ITEMS</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Lost Anything?</h1>
                                            <p>Find it here, you never know! You can get your lost items back!</p>
                                            <a href="items.php" class="btn_2">FIND ITEMS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img1.png" alt="">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Latest Items</h2>
                    </div>
                </div>
            </div>

            <?php
                $sql            = "SELECT * from items";  
                $items_detail   = mysqli_query($connect,$sql);
                while($row1 = mysqli_fetch_assoc($items_detail)){
            ?> 
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <div class="single_feature_post_text">
                        
                        <h3><?php echo $row1['itemname']; ?></h3>
                        <p><?php echo $row1['location']; ?></p>
                        <a href="single-product.php?id=<?php echo $row1['id'];?>" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="img/feature/feature_1.png" alt="">
                    </div>
                </div> 
            </div>

            <?php 
            }
            ?>
            
        </div>
    </section>
    


<?php include "footer.php"; ?>