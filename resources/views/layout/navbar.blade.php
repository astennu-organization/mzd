<header class="custom-navbar fixed-top">
    <div class="custom-navbrand">
        <div class="custom-brand">МЗД</div>
        <div class="custom-burger" id="burger">
            <span class="custom-burger-open">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
                    <g fill="#252a32" fill-rule="evenodd">
                        <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
                    </g>
                </svg>
            </span>
            <span class="custom-burger-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                    <path fill="#252a32" fill-rule="evenodd"
                        d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
                </svg>
            </span>
        </div>
    </div>
    <ul class="custom-menu m-auto" id="menu">
        <li class="custom-menu-item">
            <a href="{{ route('home.index') }}"
                class="custom-menu-link {{ request()->is('/') ? 'custom-active' : '' }}">Почетна</a>
        </li>
        <li class="custom-menu-item">
            <a class="custom-menu-link dropdown-toggle {{ request()->is('about*') ? 'custom-active' : '' }}"
                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">За нас</a>

            <ul class="dropdown-menu mt-3 me-auto text-center" style='font-size: 14px !important'
                aria-labelledby="dropdownMenuLink">
                <li><a href="{{ route('about.index') }}" class="dropdown-item border-bottom">Информации</a>
                </li>
                <li><a href="{{ route('about.team') }}" class="dropdown-item border-bottom">Нашиот тим</a>
                </li>
                <li><a href="{{ route('about.contact') }}" class="dropdown-item">Контакт</a></li>
            </ul>
        </li>
        <li class="custom-menu-item">
            <a href="{{ route('news.index') }}"
                class="custom-menu-link {{ request()->is('news*') ? 'custom-active' : '' }}">Новости</a>
        </li>
        <li class="custom-menu-item">
            <a href="{{ route('gallery.index') }}"
                class="custom-menu-link {{ request()->is('gallery*') ? 'custom-active' : '' }}">Галерија
            </a>
        </li>
        <li class="custom-menu-item">
            <a href="{{ route('report.index') }}"
                class="custom-menu-link {{ request()->is('report*') ? 'custom-active' : '' }}">Пријави
                случај</a>
        </li>
    </ul>
    <div class="custom-social">
        <a href="https://www.facebook.com/mrezazazastitaoddiskriminacija" class="custom-social-item" target="_blank"><i
                class="fab fa-facebook"></i></a>
        <a href="#" class="custom-social-item" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</header>
