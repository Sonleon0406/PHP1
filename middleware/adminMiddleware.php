<?php
//đoạn mã  kiểm tra trạng thái đăng nhập và quyền của người dùng.
include("../functions/myfunctions.php"); // nạp tệp my...
if(isset($_SESSION['auth'])) //  kiểm tra biến này tồn tại hay không
{
    if($_SESSION['role_as'] != 1) //Nếu người dùng đã đăng nhập và không có quyền admin (quyền không phải là 1)
    {
         redirect(" ../index.php", "bạn không có quyền truy cập trang này!");
    }
}else
{   
    redirect("../login.php", "Đăng nhập để tiếp tục"); // được định hướng ra trang login để dnhap
} 
//Mục đích chính của mã này là bảo vệ trang khỏi việc truy cập trái phép từ những người dùng không có quyền.
?>