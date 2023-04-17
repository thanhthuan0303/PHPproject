<?php 
    class giohang
    {   
        function addItem($key, $quanlity)
        {
            $product = new hanghoa();
            $pro = $product->getHangHoaId($key);

            $hinh = $pro["hinh"];
            $ten = $pro["tenhh"];
            $cost = $pro["gia"];
            $total = $quanlity * $cost;

            $item = array(
                "mahh" => $key,
                "hinh" => $hinh,
                "ten" => $ten,
                "gia" => $cost,
                "soluong" => $quanlity,
                "total" => $total
            );

            $_SESSION["cart"][] = $item;
        }

        function getTotal()
        {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item)
            {
                $subtotal += $item['total'];
            }
            return number_format($subtotal, 2);
        }

        // function Delete($key)
        // {
        //     unset($_SESSION['cart'][$key]);
        // }

        function Update($key, $quanlity_new)
        {
            if($quanlity_new <= 0)
                unset($_SESSION['cart'][$key]);
            else
            {
                $_SESSION['cart'][$key]['soluong'] = $quanlity_new;
                $total_new = $quanlity_new * $_SESSION['cart'][$key]['gia'];
                $_SESSION['cart'][$key]['total'] = $total_new;
            }                
        }
    }
?>