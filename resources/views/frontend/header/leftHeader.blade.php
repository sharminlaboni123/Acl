<div class="header-left">
    <div class="header-dropdown">
        @foreach ($country as $coun)
            <a href="#">{{ $coun->country_name }}</a>
            <div class="header-menu">
                <ul>
                    {{-- <li><a href="#">English</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">Spanish</a></li> --}}
                </ul>
            </div><!-- End .header-menu -->
        @endforeach
        </div><!-- End .header-menu -->
    {{-- </div><!-- End .header-dropdown --> --}}

    {{-- <div class="header-dropdown">
        <a href="#">Eng</a>
        <div class="header-menu">
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">Spanish</a></li>
            </ul>
        </div><!-- End .header-menu -->
    </div><!-- End .header-dropdown --> --}}
</div><!-- End .header-left -->
