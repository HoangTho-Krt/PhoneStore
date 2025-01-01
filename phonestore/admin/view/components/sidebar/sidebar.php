<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <?php
// include "../site/view/components/logo.php";
// ?>
        </div>
        <div>
            <h4 class="logo-text">Phone Store</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="./index.php">
                <div class="parent-icon"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label"></li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                </div>
                <div class="menu-title">Sản phẩm</div>
            </a>

            <ul class="">
                <li class=""> <a href="index.php?act=productlist"></i>Danh sách sản phẩm</a>
                </li>
                <li> <a href="index.php?act=catelist"></i>Danh mục</a>
                </li>
                <li> <a href="index.php?act=addproduct"></i>Thêm sản phẩm</a>
                </li>
                <li> <a href="index.php?act=commentproductlist"></i>Bình Luận Sản Phẩm</a>
                </li>
        </li>
    </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Đơn hàng</div>
        </a>

        <ul class="">
            <li> <a href="index.php?act=orderlist"></i>Danh sách đơn hàng</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"></i>
            </div>
            <div class="menu-title">Bài viết</div>
        </a>

        <ul class="">
            <li> <a href="index.php?act=bloglist"></i>Danh sách bài viết</a>
            </li>

            <li> <a href="index.php?act=blogcate"></i>Danh mục bài viết</a>
            </li>
            <li> <a href="index.php?act=addblog"></i>Thêm Bài Viết</a></li>
            <li> <a href="index.php?act=binhluanblog"></i>Bình Luận Bài Viết</a></li>
        </ul>

    </li>
    <?php
if (isset($_SESSION['idadmin']) && $_SESSION['role'] == 1) {
    echo '
            <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                </div>
                <div class="menu-title">Người dùng</div>
            </a>

            <ul class="">
                <li class=""> <a href="index.php?act=userlist">Danh sách khách hàng</a>
                </li>
                <li> <a href="index.php?act=adminlist">Danh sách quản trị viên</a>
                </li>
                <li> <a href="index.php?act=adduser">Thêm người dùng</a>
                </li>
            </ul>
        </li>
            ';
}
?>
    <!-- <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Người dùng</div>
        </a>

        <ul class="">
            <li class=""> <a href="index.php?act=userlist">Danh sách khách hàng</a>
            </li>
            <li> <a href="index.php?act=adminlist">Danh sách quản trị viên</a>
            </li>
            <li> <a href="index.php?act=adduser">Thêm người dùng</a>
            </li>
        </ul>
    </li> -->
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"></i>
            </div>
            <div class="menu-title">Banners</div>
        </a>

        <ul class="">
            <li class=""> <a href="index.php?act=bannerlist"></i>Danh sách banners</a>
            </li>
            <li> <a href="index.php?act=sliderlist"></i>Danh sách sliders</a>
            </li>
            <li> <a href="index.php?act=addbanner"></i>Thêm Banner</a>
            </li>
            <li> <a href="index.php?act=addslider"></i>Thêm Slider</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"></i>
            </div>
            <div class="menu-title">Phản hồi</div>
        </a>

        <ul class="">
            <li class=""> <a href="index.php?act=feedback-list"></i>Danh sách phản hồi</a>
            </li>
            <li> <a href="index.php?act=reviews-product"></i>Danh sách đánh giá sp</a>
            </li>
            <!-- <li> <a href="index.php?act=adduser"><i class="bi bi-circle"></i>Thêm người dùng</a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Voucher</div>
        </a>

        <ul class="">
            <li class=""> <a href="index.php?act=couponlist"></i>Quản lý
                    voucher</a>
            </li>
            <li> <a href="index.php?act=addcoupon">Tạo mã giảm giá</a>
            </li>
            <!-- <li> <a href="index.php?act=adduser"><i class="bi bi-circle"></i>Thêm người dùng</a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="javascript:;" href="rel:0937988510">
            <div class="parent-icon"></i>
            </div>
            <div class="menu-title">Hỗ trợ</div>
        </a>
    </li>
    <!--end navigation-->
</aside>
<!--end sidebar -->