    <header>
        <div class="header-1">

            <a href="./img/link.png" class="logo">Favoritos</a>

            {{-- <form action="" class="search-box-container">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </form> --}}

        </div>


        <div class="header-2">

            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">home</a>
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">login</a>
                <a href="{{ route('registro') }}" class="{{ request()->routeIs('registro') ? 'active' : '' }}">unirse</a>
                <a href="{{ route('favoritos') }}" class="{{ request()->routeIs('favoritos') ? 'active' : '' }}">favoritos</a>
                <a href="{{ route('favorito_nuevo') }}" class="{{ request()->routeIs('favorito_nuevo') ? 'active' : '' }}">nuevos</a>
            </nav>
            {{-- <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-user-circle"></a>
            </div> --}}
        </div>
    </header>
    <!-- custom js link  -->
    <script src="../js/menu.js"></script>

























{{-- <div class="section_menu">
    <div class="table2">
        <div class='thead2'>
            <div class="link">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('favoritos') ? 'active' : '' }}">
                    Home
                </a>
            </div>

            <div class="link">
                <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">
                    Ingresar
                </a>
            </div>

            <div class="link">
                <a href="{{ route('registro') }}" class="{{ request()->routeIs('registro') ? 'active' : '' }}">
                    Unirse
                </a>
            </div>

            <div class="link">
                <a href="{{ route('favoritos') }}" class="{{ request()->routeIs('favoritos') ? 'active' : '' }}">
                    Favoritos
                </a>
            </div>

            <div class="link">
                <a href="{{ route('favorito_nuevo') }}"
                    class="{{ request()->routeIs('favorito_nuevo') ? 'active' : '' }}">
                    Nuevo
                </a>
            </div>

        </div>
    </div>

</div> --}}
