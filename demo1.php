<link rel="stylesheet" href="style.css">

<?php 

    $id = 1001;
    $name = "Rounc chanrith"; // String
    $gender = "male";
    $address = "Phnom penh";
    $phone = 060535771;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php

                        for ($i = 0; $i < 100; $i++) {
                            echo "<tr>";
                                echo "<td>".($i+1)."</td>";
                                echo "<td>$name</td>";
                                echo "<td>$gender</td>";
                                echo "<td>$address</td>";
                                echo "<td>$phone</td>";

                                echo '<td>
                                        <button class="btn btn-danger">Delete</button>
                                        <button class="btn btn-primary">Update</button>
                                    </td>';
                            echo "<tr>";
                        }
                    ?>
            </tbody>
        </table>
    </div>
    
    

</body>
</html>
    
    
   