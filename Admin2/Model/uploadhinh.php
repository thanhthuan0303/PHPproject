<?php
    function uploadImage()
    {
        // tạo đường dẫn thư mực chứa hình
        $target_dir="../content/imagetourdien/";
        // lấy tên hình về và gán vào trong đường dẫn
        //$target_file="Content/imagetourdien/1.jpg";
        $target_file=$target_dir.basename($_FILES["image"]["name"]);
        // lấy phần mở rộng của hình để so sánh xem nó có phải là hình hay không
        // phải đổi về dạng in hoa hoặc in thường vì người dùng có thể lưu phần mở rộng dạng in hoa
        $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // kiểm tra xem hình đó có thật sự đầy lên server hay không
        // lấy hình về getimageZise
        $upload=1;
        if(isset($_POST["submit"]))
        {
            $check=getimagesize($_FILES["image"]["tmp_name"]);
            if($check!==false)
            {
                $upload=1;
            }
            else
            {
                echo "Hình không tồn tại";
                $upload=0;
            }
        }
        // kiểm tra xem hình đã tồn tại trong thư mục rồi thì ko cho upload
        if(file_exists($target_file))
        {
            echo "Hình đã tồn tại";
            $upload=0;
        }
        // kiểm tra hình up không đc vượt quá 500KB
        if($_FILES["image"]["size"]>500000)
        {
            echo "Hình vượt quá 500KB";
            $upload=0;
        }
        // kiểm tra hình có phải là hình hay không
        if( $imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg"
        && $imageFileType !="gif")
        {
            echo " Không phải là hình ảnh";
            $upload=0;
        }
        // khi nào upload
        if($upload==1)
        {
            if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
            {
                echo "<script> alert('Upload thành công')</script>";
                
            }
            else
            {
                echo "<script> alert('Upload không thành công')</script>";
            }
            
        }
    }
?>