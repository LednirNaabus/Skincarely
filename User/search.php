<?php
    include 'includes/main/header.php';
    include 'includes/connection/db_connection.php';
?>
<?php
    $output = '';

    if(isset($_GET['query']) && !empty($_GET['query'])) {
        $search = $_GET['query'];

        $query = mysqli_query($link, "SELECT * FROM items WHERE item_name LIKE '%$search%'");
        $count = mysqli_num_rows($query);

        if($count == 0) {
            $output = "No search results for " . $search . ".";
        } else {
            while($row = mysqli_fetch_array($query)) {
                $id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_category = $row['item_category'];
                $item_price = $row['item_price'];
                $item_description = $row['item_description'];

                $output .= '<h1> '. $item_name . '</h1>
                            <p> ' . $item_category . '</p>
                            <p> ' . $item_description . '</p>
                            <p> Php ' . $item_price . '</p>'; 
            }
        }
    } else {
        header("location: User/index.php");
    }

    print("$output");
?>