<div class="footer-middle">
    <div class="container">
        {{-- <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="widget widget-about">
                    <img src="frontend/assets/images/demos/demo-10/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                    <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                    <div class="social-icons">
                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .widget about-widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                    <ul class="widget-list">
                        <li><a href="about.html">About Molla</a></li>
                        <li><a href="#">How to shop on Molla</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="login.html">Log in</a></li>
                    </ul><!-- End .widget-list -->
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                    <ul class="widget-list">
                        <li><a href="#">Payment Methods</a></li>
                        <li><a href="#">Money-back guarantee!</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .widget-list -->
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                    <ul class="widget-list">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="cart.html">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                    </ul><!-- End .widget-list -->
                </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->
        </div><!-- End .row --> --}}
        @foreach($footer_m as $footer_m)
            <div class="row">
                <div class="col-sm-6 col-lg-3">

                    <div class="widget widget-about">

                    {{-- <img src="{{asset('storage/about/' .$footer_m->titlelogo)}}" class="footer-logo" alt="Footer Logo" width="105" height="25"> --}}
                    <h1 class="text-success">ACL</h1>
                        <p>{{$footer_m->titletext}} </p>

                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">

                    <div class="widget">
                        <h4 class="widget-title">{{$footer_m->usefullink}}</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="about.html">{{$footer_m->about}}</a></li>
                            <li><a href="#">{{$footer_m->howtoshop}}</a></li>
                            <li><a href="faq.html">{{$footer_m->FAQ}}</a></li>
                            <li><a href="contact.html">{{$footer_m->contactus}}</a></li>
                            <li><a href="login.html">{{$footer_m->login}}</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->

                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">{{$footer_m->customerservice}}</h4>End .widget-title

                        <ul class="widget-list">
                            <li><a href="#">{{$footer_m->paymentmethod}}</a></li>
                            <li><a href="#">{{$footer_m->moneyback}}</a></li>
                            <li><a href="#">{{$footer_m->returns}}</a></li>
                            <li><a href="#">{{$footer_m->shipping}}</a></li>
                            <li><a href="#">{{$footer_m->termcondition}}</a></li>
                            <li><a href="#">{{$footer_m->privacypolicy}}</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">

                <div class="widget">
                        <h4 class="widget-title">{{$footer_m->myaccount}}</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">{{$footer_m->signin}}</a></li>
                            <li><a href="cart.html">{{$footer_m->viewcart}}</a></li>
                            <li><a href="#">{{$footer_m->wishlist}}</a></li>
                            <li><a href="#">{{$footer_m->takeorder}}</a></li>
                            <li><a href="#">{{$footer_m->help}}</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        @endforeach
    </div><!-- End .container -->
</div><!-- End .footer-middle -->

<div class="footer-bottom">
    <div class="container">
        {{-- <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
        <figure class="footer-payments">
            <img src="frontend/assets/images/payments.png" alt="Payment methods" width="272" height="20">
        </figure><!-- End .footer-payments --> --}}
        <p class="footer-copyright">{{ $futterbottom[0]['footer_bottom_text'] }}</p>
            <figure class="footer-payments">
            <img  src="{{asset('storage/footer/' .$futterbottom[0]['footer_bottom_img'])}} " width="272" height="20" />
        </figure>
    </div><!-- End .container -->
</div><!-- End .footer-bottom -->