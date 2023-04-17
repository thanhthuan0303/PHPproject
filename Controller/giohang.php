<?php
    $act = 'giohang';
    if(isset($_GET['act'])) 
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'giohang':
            if(!isset($_SESSION['cart']))
            {
                $_SESSION['cart'] = array();
            }

            if(isset($_POST['mahh']))
            {
                $mahh = $_POST['mahh'];
                $soluong = $_POST['soluong'];
                $gh = new giohang();
                $gh->addItem($mahh, $soluong);
            }
    
            include "./View/cart.php";
            break;
        case 'delete':
            $key = $_GET['id'];
            unset($_SESSION['cart'][$key]);
            include "./View/cart.php";
            break;
        case 'update':
            
            if(isset($_POST['newqty']))
            {
                $new_list = $_POST['newqty'];

                foreach($new_list as $key=>$qty)
                {
                    if($_SESSION['cart'][$key]['soluong'] != $qty)
                    {
                        $gh = new giohang();
                        $gh->Update($key, $qty);
                    }
                }
            }
            include "./View/cart.php";
            break;
            
            
    }
        
    
?>