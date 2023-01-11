<nav class="navbar navbar-expand-lg bg-danger">
        <div class="container ">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img style="width: 100px" src="./../assets/img/logo/logo.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                    <li class="nav-item ">
                        <a class="nav-link fs-6 fw-bold text-white" aria-current="page" href="{{route('anket')}}">Анкеты</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link fs-6 fw-bold text-white" href="{{ route('login') }}">Авторизация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 fw-bold text-white" href="{{ route('registration') }}">Регистрация</a>
                        </li>
                    @endguest
                    @auth()
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link fs-6 fw-bold text-white" href="{{ route('admin') }}">Администирование</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link fs-6 fw-bold text-white" href="{{ route('logout') }}">Выйти</a>
                        </li>
                    @endauth

                </div>
            </div>


</div>
</nav>
