<?php
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    //echo $edit_id;
    $get_data="Select * from products where product_id=$edit_id";
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    //echo $product_title;
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];

    //fetching category name
    $select_category = "Select * from categories where category_id=$category_id";
    $result_categorey = mysqli_query($con,  $select_category);
    $row_category = mysqli_fetch_assoc($result_categorey);
    $category_title = $row_category['category_title'];
    //echo $category_title;

    //fetching brands name
    $select_brand = "Select * from brands where brand_id=$brand_id";
    $result_brand = mysqli_query($con,  $select_brand);
    $row_brand = mysqli_fetch_assoc($result_brand);
    $brand_title = $row_brand['brand_title'];
    //echo $brand_title;

}
?>


<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" id="product_title" value="<?php echo $product_title ?>" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" id="product_desc" value="<?php echo $product_description ?>" name="product_desc" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" id="product_keywords" value="<?php echo $product_keywords ?>" name="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_category" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title ?>"><?php echo $category_title ?></option>
                <?php
                //fetching category name
                $select_category_all = "Select * from categories";
                $result_categorey_all = mysqli_query($con,  $select_category_all);
                while($row_category_all = mysqli_fetch_assoc($result_categorey_all)){
                    $category_title = $row_category_all['category_title'];
                    $category_id = $row_category_all['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
            <option value="<?php echo $brand_title ?>"><?php echo $brand_title ?></option>
            <?php
                //fetching category name
                $select_brand_all = "Select * from brands";
                $result_brand_all = mysqli_query($con,  $select_brand_all);
                while($row_brand_all = mysqli_fetch_assoc($result_brand_all)){
                    $brand_title = $row_brand_all['brand_title'];
                    $brand_id = $row_brand_all['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto" required="required">
            <img src="./product_images/<?php echo $product_image1 ?>" alt="" class="product_img">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" id="product_price" name="product_price" class="form-control" required="required" value="<?php echo $product_price ?>">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_product" value="update product" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>