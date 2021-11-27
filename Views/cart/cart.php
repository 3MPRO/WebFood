<main id="main">
<div class="container">
    <div class="break-crumb">
        <div class="break-crumb__head">
            <div class="home">
                <a href="?act=home">
                    <span>Trang chủ</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                <a href="#">
                    <span>Sản phẩm nổi bật</span>
                </a>
                <span class="mr_lr">&nbsp;/ &nbsp;</span>
            </div>
        </div>
    </div>

    <div class="cart-page">
        <h1>Giỏ hàng của bạn</h1>
        <div class="cart-header-info">
		    <div>Thông tin sản phẩm</div>
            <div style="width: 49%; display: flex; justify-content: space-between;">
                <div>Đơn giá</div>
                <div>Số lượng</div>
                <div>Thành tiền</div>
            </div>
	    </div>
        <div class="cart-page-container" data-line="1">
				<a href="" class="cart-page-item-image" title="Cà chua beef túi lưới 500g">
                    <img src="//bizweb.dktcdn.net/thumb/compact/100/439/653/products/products-organic-psd-0006s-0000-6-1-1.jpg" alt="Cà chua beef túi lưới 500g">
                </a>
				<div class="grid__item cart_info">
					<div class="cart_name-wrapper">
						<a href="" class="cart-product-name-title" title="Cà chua beef túi lưới 500g">Cà chua beef túi lưới 500g</a>
						<a class="cart-btn-remove remove-item-cart">Xóa</a>
					</div>
					<div class="price-cart-wrapper">
                        <div class="grid">
                            <div class="grid__item one-half text-right cart_prices">
                                <span class="cart-price">29.500₫</span>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="grid__item one-half cart_select">
                            <div class="custom-quantity">
                                <a class="btn-minus" href="?act=cart&xuli=delete&id=<?php echo $data_sanpham[0]['MaSP'];?>" >
                                    <i class="fas fa-minus"></i>
                                </a>
                                <input type="text" class="qty-input" value="1" name="slsanpham">
                                <a class="btn-plus" href="?act=cart&xuli=update&id=<?php echo $data_sanpham[0]['MaSP'];?>">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="grid__item one-half text-right cart_prices">
                                <span class="cart-price">29.500₫</span>
                                
                            </div>
                        </div>
                    </div>
				</div>
			</div>
    </div>
</main>