<?php

include root . 'db\\config.php';

if ($action=="add")
{
    $shopping_cart=$_SESSION["cart"];
    if (array_key_exists($id,$shopping_cart)) {
        $con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
        $result = mysqli_query(
            $con,
            "SELECT * FROM `items` WHERE `id`='$id'"
        );
        $row = mysqli_fetch_assoc($result);
        if ($row["rquantity"]>0) {
            $shopping_cart[$id]['qty']++;
            $shopping_cart[$id]['total_price']=$shopping_cart[$id]['unit_price']*$shopping_cart[$id]['qty'];
            $_SESSION["cart"]= $shopping_cart;
            send_message("Product in cart updated","success");

        }
        else{
            send_message("not enough qty","info");
           }

       
    
    }
    else{
       
        $con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
        $result = mysqli_query(
            $con,
            "SELECT * FROM `items` WHERE `id`='$id'"
        );
        $row = mysqli_fetch_assoc($result);
        
        if ($row["rquantity"]>0) {
           
            $name = $row['title'];
            $image = $row['img'];
            if ($row['discounted_price'])
            {
                $price = $row['discounted_price'];
            }
            else{
                $price = $row['price'];
            }
           
            
    
           
            $cartitem=[
                'product_id' => $id,
                'product_name' => $name,
                'product_price' => $price,
                'product_img' => $image,
                'qty' => 1,
                'total_price' => $price,
            
            ];
            
            $shopping_cart[$id]=$cartitem;
           $_SESSION["cart"]= $shopping_cart;
           send_message("Item added","success");
        }
        else{
            send_message("Item Not found or item out of stock","error");
        }
    }
}
else if($action=="decrese")
{
    $shopping_cart=$_SESSION["cart"];
    if(count($shopping_cart)>0)
    {
        if (array_key_exists($id,$shopping_cart)) 
            {
                if($shopping_cart[$id]["qty"]==1)
                {
                    unset($shopping_cart[$id]);
                    send_message("Product removed from cart","success");
                }
                else{
                    $shopping_cart[$id]["qty"]--;
                    $shopping_cart[$id]['total_price']=$shopping_cart[$id]['unit_price']*$shopping_cart[$id]['qty'];

                    send_message("Product qty decresed by 1","success");
                }
               
                $_SESSION["cart"]=$shopping_cart;
                
            }
            else{
                send_message("Item not exist in your cart", "error");
            }
    }
    else{
        send_message("cart is empty",  "error");
    }
}
else{
    $shopping_cart=$_SESSION["cart"];
    if(count($shopping_cart)>0)
    {
        if (array_key_exists($id,$shopping_cart)) 
            {
                unset($shopping_cart[$id]);
                $_SESSION["cart"]=$shopping_cart;
                send_message("Item removed from cart","success");
            }
            else{
                send_message("Item not exist in your cart", "error");
            }
    }
    else{
        send_message("cart is empty", "error");
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
