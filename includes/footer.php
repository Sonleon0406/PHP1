<footer class="bg-second">
    <div class="container">
        <div class="row">
            <div class="col-5 col-md-6 ">
                <h3 class="footer-head">Chuyên mặt hàng điện tử</h3>
                <ul class="menu">
                    <li><a href="#">Vũ Công Sơn</a></li>
                    <li><a href="#">Công ty TNHH 1 thành viên</a></li>
                    <li><a href="#">Mã :1851171980</a></li>
                    <!-- <li><a href="#">Giảng viên hướng dẫn: TS.Tạ Quang Chiểu</a></li> -->
                </ul>
            </div>

            <div class="col-5 col-md-6">
                <h3 class="footer-head">Cao đẳng FPT Đà Nẵng</h3>
                <ul class="menu">
                    <li><a href="#"> Điện thoại: +84 385828461</a></li>
                    <li><a href="#">khongbiet0406@gmail.com</a></li>
                    <li><a href="#">Đà Nẵng</a></li>
                </ul>
            </div>
            <div class="col-2 col-md-6 col-sm-12">
                <div class="contact">
                    <h3 class="contact-header">
                        TIGOLD
                    </h3>
                    <ul class="contact-socials">
                        <li><a href="#">
                                <i class='bx bxl-facebook-circle'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-instagram-alt'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-youtube'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-twitter'></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- app js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
<?php if(isset($_SESSION['message']))
  {
  ?>
alertify.set('notifier', 'position', 'top-right');
alertify.success('<?= $_SESSION['message'] ?>');
<?php 
    unset($_SESSION['message']);
  }
  ?>
</script>