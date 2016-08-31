<div class="header">
    <div class="container">
        <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@taihanh0310@gmail.com">taihanh0310@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+8401676460626</li>
                    @if(Auth::check())

                    <li><i class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></i><a href="logout">Hi, {{Auth::user()->name}}</a></li>

                    @else

                    <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login">Login</a></li>
                    <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register">Register</a></li>
                    @endif
                </ul>
            </div>
            <div class="header-grid-right animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                <ul class="social-icons">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="g"></a></li>
                    <li><a href="#" class="instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                <h1><a href="{{route('home')}}">Best Store <span>Shop anywhere</span></a></h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('home')}}" class="act">Home</a></li>	
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="{{route('blog.new.post')}}" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Men's Wear</h6>
                                                <li><a href="{{route('blog.new.post')}}">Tao Blog</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Women's Wear</h6>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Wallets,Bags</a></li>
                                                <li><a href="#">Footwear</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Jewellery</a></li>
                                                <li><a href="#">Beauty &amp; Grooming</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Kid's Wear</h6>
                                                <li><a href="#">Kids Home Fashion</a></li>
                                                <li><a href="#">Boy's Clothing</a></li>
                                                <li><a href="#">Girl's Clothing</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Brand Stores</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Furniture <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Home Collection</h6>
                                                <li><a href="#">Cookware</a></li>
                                                <li><a href="#">Sofas</a></li>
                                                <li><a href="#">Dining Tables</a></li>
                                                <li><a href="#">Shoe Racks</a></li>
                                                <li><a href="#">Home Decor</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Office Collection</h6>
                                                <li><a href="#">Carpets</a></li>
                                                <li><a href="#">Tables</a></li>
                                                <li><a href="#">Sofas</a></li>
                                                <li><a href="#">Shoe Racks</a></li>
                                                <li><a href="#">Sockets</a></li>
                                                <li><a href="#">Electrical Machines</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Decorations</h6>
                                                <li><a href="#">Toys</a></li>
                                                <li><a href="#">Wall Clock</a></li>
                                                <li><a href="#">Lighting</a></li>
                                                <li><a href="#">Top Brands</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="{{ route('getTask')}}">Task list</a></li>
                            <li><a href="{{ route('system.upload.list')}}">Upload file</a></li>
                            <li><a href="{{ route('home.read')}}">SSKT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="logo-nav-right">
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form action="{{ route('product.index')}}">
                            <input class="sb-search-input" name="keyword" placeholder="Enter your search term..." type="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!-- search-scripts -->
                <script src="{{URL::asset('js/classie.js')}}"></script>
                <script src="{{URL::asset('js/uisearch.js')}}"></script>
                <script>
new UISearch(document.getElementById('sb-search'));
                </script>
                <!-- //search-scripts -->
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="{{route('cart.index')}}">
                        <h3> <div class="total">
                                <span class="cart_total">{{ Cart::total() }}</span> (<span id="cart_quantity" class="cart_quantity">{{ Cart::content()->count() }}</span> items)</div>
                                <img src="{{URL::asset('images/bag.png')}}" alt="">
                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>	
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>