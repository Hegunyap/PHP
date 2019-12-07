<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
</head>
<body>
    <div>
        <p>Add a Food</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="text" name="food">
            <?php 
            // if ($_POST['foods']){
            //     $post = $_POST;
            //     foreach ($food as $foods){
            //         print($foods);
                     ?>
            <!-- //         <input type="hidden" name="food" value="{}"> -->
                     <?
            //     }
            // } 
            ?>
            <button type="submit">Add</button>
        </form>
    </div>

    <p>Shopping List</p>
    <ol>
        <?php 
            // $post = $_POST; 
            // echo json_encode($post);
        ?>
    </ol>
</body>
</html>