
<h3 class="text-center text-success">Customer feeback</h3>
<table class="table table-bordered mt-5">
    <thead style="background-color:#D09CFA;">

    <?php
    $get_contact = "Select * from contact";
    $result = mysqli_query($con, $get_contact);
    $row_count = mysqli_num_rows($result);
    
    
    if($row_count==0){
        echo "<h2 class='text-danger text-center mt-5'>No feedback yet</h2>";
    }else{
        echo "<tr>
    <th>Sl no</th>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>phone</th>
    <th>feedback</th>
    <th>Delete</th>
    </tr>
    </thead>
    <tbody class=' text-dark text-center'>";
        $number = 0;
        while($row_data=mysqli_fetch_assoc($result)){
            $fname=$row_data['fname'];
            $lname=$row_data['lname'];
             $email=$row_data['email'];
          $phone=$row_data['phone'];
           $message=$row_data['message'];
            $number++;
            echo "<tr>
            <td>$number</td>
            <td>$fname</td>
            <td>$lname</td>
            <td> $email</td>
            <td>$phone</td>
            <td> $message</td>
            <td><a href='' class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";
        }
    }

    ?>
    </tbody>
</table>