<div class="header-right">
    <ul class="top-menu">
        <li>
            <a href="#">Links</a>
            <ul>
                @php
                // echo $topbar[0]['phone'];
                    // print_r($topbar)
                @endphp
                <li><a href="tel:#"><i class="icon-phone"></i>{{ $topbar[0]['phone'] }}</a></li>
                <li><a href="wishlist.html"><i class="icon-heart-o"></i>{{ $topbar[0]['wishlist'] }} <span></span></a></li>
                <li><a href="about.html">{{ $topbar[0]['about'] }}</a></li>
                <li><a href="contact.html">{{ $topbar[0]['contact'] }}</a></li>
                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>{{ $topbar[0]['login'] }}</a></li>
            </ul>
        </li>
    </ul><!-- End .top-menu -->
</div><!-- End .header-right -->
