<header class="shadow-sm">
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand d-none d-sm-block flex-shrink-0" href=""><img src="<?= __WEB_ROOT__ ?>/public/frontend/img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
                <div class="input-group d-none d-lg-flex mx-4">
                    <input class="form-control rounded-end pe-5" type="text" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                </div>
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                    <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <span class="navbar-tool-tooltip">Expand menu</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                    </a>
                    <a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html">
                        <span class="navbar-tool-tooltip">Wishlist</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div>
                    </a>
                    <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                        <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div>
                    </a>
                    <div class="navbar-tool dropdown ms-3">
                        <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$265.00</a>
                        <!-- Cart dropdown-->
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="widget-cart-item pb-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-cart-item py-2 border-bottom">
                                        <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                        <div class="d-flex align-items-center">
                                            <a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                                            <div class="ps-2">
                                                <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                                                <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                    <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">$265.<small>00</small></span></div>
                                    <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                </div>
                                <a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->
                    <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="Search for products">
                    </div>
                    <!-- Departments menu-->
                    <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>Departments</a>
                            <div class="dropdown-menu px-2 pb-4">
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Clothing"></a>
                                            <h6 class="fs-base mb-2">Clothing</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's clothing</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's clothing</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes"></a>
                                            <h6 class="fs-base mb-2">Shoes</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's shoes</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's shoes</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Gadgets"></a>
                                            <h6 class="fs-base mb-2">Gadgets</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">E-book readers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Furniture"></a>
                                            <h6 class="fs-base mb-2">Furniture &amp; Decor</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Home furniture</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Office furniture</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Accessories"></a>
                                            <h6 class="fs-base mb-2">Accessories</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Hats</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Sunglasses</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Bags</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                        <div class="widget widget-links">
                                            <a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Entertainment"></a>
                                            <h6 class="fs-base mb-2">Entertainment</h6>
                                            <ul class="widget-list">
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's toys</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Video games</a></li>
                                                <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="/" >Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" >Shop</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" >Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" >Pages</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" >Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>