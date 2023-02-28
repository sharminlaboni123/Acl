<header class="header header-8">
    <div class="header-top">
        <div class="container">
            @include('frontend.header.leftHeader')
            @include('frontend.header.rightHeader')
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                {{-- <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button> --}}

                <a href="index.html" class="logo">
                    {{-- <img src="assets/images/demos/demo-10/logo.png" alt="Molla Logo" width="105" height="25"> --}}
                    <H1>ACL</H1>
                </a>
            </div><!-- End .header-left -->
            <div class="header-right">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        @isset($MainMenus)
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[0]['name'] }}</a>

                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[1]['name'] }}</a>

                                <ul>
                                    @foreach ($Shops as $Shop)
                                         <li><a href="{{ $Shop->link }}">{{ $Shop->shop_list }}</a></li>
                                    @endforeach
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[2]['name'] }}</a>

                                <ul>
                                    @foreach ($Menuproducts as $Menuproduct)
                                            <li><a href="{{ $Menuproduct->link }}">{{ $Menuproduct->product_list }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[3]['name'] }}</a>

                                <ul>
                                    @foreach ($Pages as $Pages)
                                            <li><a href="{{ $Pages->link }}">{{ $Pages->page_list }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[4]['name'] }}</a>

                                <ul>
                                    @foreach ($Menublogs as $Menublog)
                                            <li><a href="{{ $Menublog->link }}">{{ $Menublog->blog_list }}</a></li>
                                    @endforeach
                                </ul>

                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">{{ $MainMenus[5]['name'] }}</a>

                                <ul>
                                    @foreach ($Elements as $Element)
                                            <li><a href="{{ $Element->link }}">{{ $Element->element_list }}</a></li>
                                    @endforeach
                                </ul>

                            </li>
                        @endisset

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
