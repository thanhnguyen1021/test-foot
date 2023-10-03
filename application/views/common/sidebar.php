<div class="sidebar sidebar-fixed hidden-xs hidden-sm hidden-md" id="sidebar">
    <ul class="nav nav-pills nav-list nav-stacked">
        
        
        <?php if (in_array(1, $user['group_permission'])) : ?>
            <li id="orders"><a href="orders"><i class="fa fa-shopping-cart"></i><b>Đơn hàng</b></a></li>
        <?php endif; ?>

        <?php if (in_array(2, $user['group_permission'])) : ?>
            <li id="product"><a href="product"><i class="fa fa-product-hunt"></i><b>Sản phẩm</b></a></li>
        <?php endif; ?>

        <?php if (in_array(3, $user['group_permission'])) : ?>
            <li id="customer"><a href="customer"><i class="fa fa-users"></i><b>Khách hàng</b></a></li>
        <?php endif; ?>
        
        <?php if (in_array(4, $user['group_permission'])) : ?>
            <li id="revenue"><a href="revenue"><i class="fa fa-connectdevelop"></i><b>Doanh thu</b></a></li>
        <?php endif; ?>

        
        
        
    </ul>
</div>