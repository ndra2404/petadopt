<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-menu m-auto style-two">
        <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="{{url('')}}">Home</a>
        </li>
        @auth
        @if(Auth::user()->level==2)
        <li class="nav-item">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Master Data <span class="nav-item__icon"><i class="las la-angle-down"></i></span></a>
            <ul class="dropdown-menu style-two">
                <li class="dropdown-menu__list"><a class="dropdown-item dropdown-menu__link" href="{{url('animal')}}">Animal</a></li>
                <li class="dropdown-menu__list"><a class="dropdown-item dropdown-menu__link" href="{{url('animalType')}}">Animal Type</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transaction <span class="nav-item__icon"><i class="las la-angle-down"></i></span></a>
            <ul class="dropdown-menu style-two">
            <li class="dropdown-menu__list"><a class="dropdown-item dropdown-menu__link" href="{{url('transaction')}}">Order</a></li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->level==3)
        <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transaction <span class="nav-item__icon"><i class="las la-angle-down"></i></span></a>
            <ul class="dropdown-menu style-two">
            <li class="dropdown-menu__list"><a class="dropdown-item dropdown-menu__link" href="{{url('checkout-list')}}">My order</a></li>
            </ul>
        </li>
        @endif
        @endauth
        <li class="nav-item dropdown">
            <a class="nav-link" aria-current="page" href="{{url('listAnimal')}}">Animal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="about.html">About</a>
        </li>
    </ul>
</div>
