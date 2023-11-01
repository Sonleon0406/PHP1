<?php include("./includes/header.php") 
// trang này dùng để hiển thị chi tiết của một bài viết blog cụ thể.
?>;

<body>
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="index.php">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./blog.php">Tất cả blog</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="#">Xem Blog</a>
                </div>
            </div>

            <?php
            // kiểm tra xem biến slug có tồn tại trong url ko
                if(isset($_GET['slug'])) 
                {
                    $slug       = $_GET['slug']; 
                    // lấy thông tin  ài viết dựa trên slug
                    $blog    = getBySlug("blog", $slug);

                    if(mysqli_num_rows($blog) >0) //nếu slug tồn tại sẽ hiển thị nội dung của bài viết slug 
                    {                               // ko sẽ hiển thị thông báo tương ứng 
                        
                    $blog = mysqli_fetch_array($blog);
            ?>

            <div class="box" style="padding: 0 100px">
                <div class="product-info">
                    <h1>
                        <?= $blog['title'] ?>
                    </h1>
                    <p class="product-description">
                        <?= nl2br($blog['small_content']) ?>
                    </p>
                </div>
                <br>
                <div class="product-img" id="product-img">
                    <img src="./images/<?= $blog['img'] ?>" alt="">
                </div>
                <br>
                <div class="product-detail-description">
                    <?= $blog['content'] ?>
                </div>
                <div class="box-header">
                    end Blog
                </div>
            </div>
        </div>
        <?php
                }
                else
                    {
                        echo '<div class="box-header" style="text-align: center;"> Blog not found </div>';
                    }
                }
                else
                {
                    echo '<div class="box-header" style="text-align: center;"> Slug missing from url </div>';
                }
                    ?>
    </div>
    <!-- end product-detail content -->
    <?php include("./includes/footer.php") ?>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>