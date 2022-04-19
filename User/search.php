<?php
    include 'includes/main/header.php';
    include 'includes/connection/db_connection.php';
?>
<main role="main">
    <div class="container">
        <div class="row" style="padding-top: 2rem;">
            <h1 class="display-4">Results</h1>
        </div>
        <div class="row">
            <form action="search.php" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="query" id="" placeholder="Search..." class="form-control">
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Search Results</li>
            </ol>
        </nav>
        <!-- fetch from db -->
        <?php
        $output = '';

        if(isset($_GET['query']) && !empty($_GET['query'])) {
            $search = $_GET['query'];

            $search_query = mysqli_query($link, "SELECT * FROM items WHERE item_name LIKE '%$search%'");
            $count = mysqli_num_rows($search_query);
        } else {
            header("location: User/index.php");
        }
        ?>
        <div class="row">
            <div class="table-responsive">
                <!--
                    TO DO:
                    - table pagination
                -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Shop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($count == 0) {
                                $output = 'No search results for "<strong>'.$search.'</strong>"';
                                echo '<tr> <td> ' . $output . '</td> </tr>';
                            } else {
                                while($row = mysqli_fetch_array($search_query)) {

                                    $item_shop_id = $row['shop_id'];

                                    $shop_tmp_query = mysqli_query($link, "SELECT * FROM shops WHERE shop_id='$item_shop_id'");

                                    $count_shop = mysqli_num_rows($shop_tmp_query);

                                    if($count_shop > 0) {
                                        $shop = mysqli_fetch_array($shop_tmp_query);
                                        $shop_id = $shop['shop_id'];
                                        $shop_name = $shop['shop_name'];

                                        if($item_shop_id != $shop_id) {
                                            echo "Uknown error occured.";
                                        } else {
                                            Print "<tr>";
                                            Print '<td>'.$row['item_name'].'</td>';
                                            Print '<td>'.$row['item_category'].'</td>';
                                            Print '<td>&#8369;'.$row['item_price'].'</td>';
                                            Print '<td><a href="merchant_portal.php?shop_id='.$row['shop_id'].'">'.$shop_name.'</a></td>';
                                            Print "<tr>";
                                        }
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/main/footer.php'; ?>