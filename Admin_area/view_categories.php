<h3 class="text-center text-success">All Categories</h3>
<table class=" table table-bordered mt-5">
    <thead style="background-color:#D09CFA;">
        <tr class="text-center">
            <th>Slno</th>
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class=" text-dark">
    <?php
    $select_cat="Select * from categories";
    $result=mysqli_query($con,$select_cat);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $cartegory_id=$row['category_id'];
        $cartegory_title=$row['category_title'];
        $number++;
    
    ?>
        <tr class="text-center">
            <td><?php echo $number; ?></td>
            <td><?php echo $cartegory_title; ?></td>
            <td><a href='index.php?edit_category=<?php echo $cartegory_id; ?>' class='text-dark'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_category=<?php echo $cartegory_id; ?>' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
    <?php    
    }
    ?>
    </tbody>
</table>