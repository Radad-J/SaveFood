<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative rd-navbar-creative-2" data-layout="rd-navbar-fixed"
             data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="112px"
             data-xxl-stick-up-offset="132px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <div class="rd-navbar-collapse">
                        <ul class="contacts-classic">
                            <li><span class="contacts-classic-title">Call us:</span> <a class="link" href="tel:#">+1
                                    (844) 123 456 78</a>
                            </li>
                            <li><a href="mailto:radad1998@gmail.com">info@savefood.com</a></li>
                        </ul>
                        <a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202"
                           href="#"><span>2</span></a>
                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="{{route('welcome')}}"><img class="brand-logo-dark"
                                                                                          src="{{asset('images/logo-default-234x82.png')}}"
                                                                                          alt="" width="117"
                                                                                          height="41"/><img
                                    class="brand-logo-light" src="images/logo-inverse-234x82.png" alt="" width="117"
                                    height="41"/></a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-element">
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search rd-navbar-search-2">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3"
                                    data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                            <form class="rd-search" action="#"
                                  method="get" data-search-live="rd-search-results-live">
                                @csrf
                                <div class="form-wrap">
                                    <input class="rd-navbar-search-form-input form-input"
                                           id="rd-navbar-search-form-input" type="text" name="search"
                                           autocomplete="off"/>
                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button class="rd-search-form-submit fl-bigmug-line-search74"
                                            type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <!-- RD Navbar Basket-->
                        @if(!Cart::isEmpty())
                            <div class="rd-navbar-basket-wrap">
                                <button class="rd-navbar-basket fl-bigmug-line-shopping202"
                                        data-rd-navbar-toggle=".cart-inline">
                                    <span>{{ (count(Cart::getContent())) }}</span>
                                </button>
                                <div class="cart-inline">
                                    <div class="cart-inline-header">
                                        <h5 class="cart-inline-title">In
                                            cart:<span>{{ (count(Cart::getContent())) }}</span> Products</h5>
                                        <h6 class="cart-inline-title">Total price:<span> {{Cart::getTotal()}}€</span>
                                        </h6>
                                    </div>
                                    <div class="cart-inline-body">
                                        @foreach(Cart::getContent() as $item)
                                            <div class="cart-inline-item">
                                                <div class="unit unit-spacing-sm align-items-center">
                                                    <div class="unit-left"><a class="table-cart-figure"
                                                                              href="{{route('pack.show', $item->id)}}"><img
                                                                src="{{asset('images/uploads/packs/'.$item->attributes->picture)}}"
                                                                alt=""
                                                                width="146" height="132"/></a></div>
                                                    <div class="unit-body">
                                                        <h6 class="cart-inline-name"><a
                                                                href="{{route('pack.show', $item->id)}}">{{$item->name}}</a>
                                                        </h6>
                                                        <div>
                                                            <div class="group-xs group-middle">
                                                                <div class="table-cart-stepper">
                                                                    <h6 class="mr-5">
                                                                        {{$item->quantity}}
                                                                    </h6>
                                                                </div>
                                                                <h6 class="cart-inline-title">{{Cart::get($item->id)->getPriceSum()}}
                                                                    €</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="cart-inline-footer">
                                        <div class="group-sm">
                                            <a class="button button-default-outline-2 button-zakaria"
                                               href="{{route('cart.index')}}">Go to cart</a>
                                            <a class="button button-primary button-zakaria"
                                               href="{{route('cart.checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(Auth::user())
                            <div>
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                                                      href="{{route('user.profile')}}">
                                            <img style="border-radius: 50%"
                                                 src="{{ asset('images/uploads/users/'.auth()->user()->avatar) }}"
                                                 alt="{{auth()->user()->name}}" width="35"
                                                 height="35"/>
                                        </a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">

                                                <a class="rd-dropdown-link" href="{{route('user.profile')}}">My
                                                    profile</a>
                                            </li>
                                            <li class="rd-dropdown-item">

                                                <a class="rd-dropdown-link" href="{{route('favourite.index')}}">My
                                                    favourites</a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                @if(Auth()->user()->store_id)
                                                    <a class="rd-dropdown-link" href="{{route('store.mystore')}}">My
                                                        store</a>

                                            @endif
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="{{route('logout')}}">Log out</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a style="display:inline!important;" class="nav-link"
                               href="{{ route('login') }}">LOG IN&nbsp&nbsp/</a>

                            <a style="display:inline!important;margin-left: -20px !important;" class="nav-link"
                               href="{{ route('register') }}">SIGN UP</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('welcome')}}">Home</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('shop.index')}}">Shop</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contactus')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
