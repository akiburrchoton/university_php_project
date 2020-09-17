<?php 
include "header.php";  

if(isset($_POST['post-item'])){
    
    $itemName   = $_POST['item-name'];
    $foundBy    = $_POST['found-by'];
    $contact    = $_POST['contact'];
    $location   = $_POST['location'];
    $description= $_POST['description'];
    
    $image      = $_FILES['item-imagesss']['name'];
    $image_temp = $_FILES['item-imagesss']['tmp_name'];
    move_uploaded_file($image_temp, "img/itemimage/$image");
    



    // Database starts here
    $sql        = "INSERT into items (itemname, found_by, contact, location, item_description, item_img) VALUES ('$itemName','$foundBy','$contact','$location','$description','$image') ";

    $post_items = mysqli_query($connect,$sql);

    if(!$post_items){
        die("Query Failed" . mysqli_error($connect));
    }else{ 
       header("Location: items.php");
    }


}


?>





<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Post item you found!</h2>
                        <p>Home <span>-</span> Post Item</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->



<!-- Upload items form Starts -->
         
       <div class="container">
              <div class="row">
				<div class="col-lg-8 col-md-8 offset-2">
					 <br><br>
					<form action="#" method="POST" enctype="multipart/form-data">
						<div class="mt-10">
							<input type="text" name="item-name" placeholder="Item Name"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Item Name'" required
								class="single-input">
						</div>
						<div class="mt-10">
							<input type="text" name="found-by" placeholder="Found By (eg. Andrew)"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Found By'" required
								class="single-input">
						</div>
						<div class="mt-10">
							<input type="text" name="contact" placeholder="Contact info"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact info'" required
								class="single-input">
						</div>
						<div class="mt-10">
							<input type="text" name="location" placeholder="Location (eg. Uttara)"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Location (eg. Uttara)'" required
								class="single-input">
						</div>
                        
						<div class="form-group mt-10">
                                 <textarea name="description" class="form-control single-input" placeholder="Description about the item"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description about the item'"></textarea>
                         </div>
						 <div class="mt-10 custom-file">
                            <input type="file" name="item-imagesss" class="form-control-file" id="customFile">
                            <label class="custom-file-label  single-input" for="customFile">Choose file</label>
                        </div>
                        <div class="mt-10 custom-file">
                        <button type="submit" name="post-item" class="genric-btn success">POST</button>
                        </div>
                        
					</form>
				</div>
				 
			</div>
       </div>
<!-- Upload items form Ends -->



<?php include "footer.php"; ?>