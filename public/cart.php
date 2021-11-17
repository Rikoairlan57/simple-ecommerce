<?php require_once("../resources/config.php");  ?>

<?php

if(isset($_GET['add'])) {
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
    confirm($query);

    while($row = fetch_array($query)) {

        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

            $_SESSION['product_' . $_GET['add']]+=1;
            redirect("checkout.php");

        }else {

            set_message("we only have {$row['product_title']} " . $row['product_quantity'] . " " . " available");
            redirect("checkout.php");
        }
    }
   
    // $_SESSION['product_' . $_GET['add']]+=1;
    // redirect("index.php");
}


if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {

        redirect("checkout.php");
    } else {

        redirect("checkout.php");
    }
}

if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = "0";

    redirect("checkout.php");

}

function cart() {

        $query = query("SELECT * FROM products");
        confirm($query);

        while($row = fetch_array($query)) {

            $product = <<<DELIMETER

                    <tr>
                        <td>{$row['product_title']}</td>
                        <td>$23</td>
                        <td>3</td>
                        <td>2</td>
                        <td>
                            <a class="btn btn-warning" href="cart.php?remove=1"><span class="glyphicon glyphicon-minus"></span></a>
                            <a class="btn btn-success" href="cart.php?add=1"><span class="glyphicon glyphicon-plus"></span></a>
                            <a class="btn btn-danger" href="cart.php?delete=1"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>


            DELIMETER;

            echo $product;
        }



}


?>