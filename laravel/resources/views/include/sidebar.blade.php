<div class="main-menu">
    <div class="container container-1370">
        <div class="header-bottom--wrapper">
            <nav class="header__inline-menu">
                <ul class="list-menu list-menu--inline text-left" >
                    <li class="menu-lv-item menu-lv-1 text-left">
                        <a href="{{url('')}}" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                            <span class="text header__active-menu-item">Home</span>
                            <span class="label sale-label">New</span>
                        </a>
                    </li>
                    <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                        <a href="#" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                            <span class="text header__active-menu-item">Master Data</span>
                        </a>
                        <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce">
                            <li class="menu-lv-item menu-lv-2 text-left  ">
                                <a href="{{url('animal')}}" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                    <span class="text">Animal</span>
                                </a>
                            </li>
                            <li class="menu-lv-item menu-lv-2 text-left  ">
                                <a href="{{url('animalType')}}" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                    <span class="text">Animal Type</span>
                                </a>
                            </li>
                            @auth
                            @if(Auth::user()->level==1)
                                <li class="menu-lv-item menu-lv-2 text-left  ">
                                    <a href="{{url('user')}}" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                        <span class="text">User</span>
                                    </a>
                                </li>
                            @endif
                            @endauth
                        </ul>
                    </li>
                    <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                        <a href="#" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                            <span class="text header__active-menu-item">Setting</span>
                        </a>
                        <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce">
                            <li class="menu-lv-item menu-lv-2 text-left  ">
                                <a href="blog-default.html" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                    <span class="text">Bank Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                        <a href="#" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                            <span class="text header__active-menu-item">Transaction</span>
                        </a>
                        <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce">
                            <li class="menu-lv-item menu-lv-2 text-left  ">
                                <a href="blog-default.html" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                    <span class="text">New Order</span>
                                </a>
                            </li>
                            <li class="menu-lv-item menu-lv-2 text-left  ">
                                <a href="blog-with-right-sidebar.html" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                    <span class="text">Payment Confirmation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-lv-item menu-lv-1 text-left">
                        <a href="#" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                            <span class="text header__active-menu-item">Buy ELLA</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
