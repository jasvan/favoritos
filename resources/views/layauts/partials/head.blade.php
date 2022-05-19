<div class="section_menu">
    <div class="table2">
        <div class='thead2'>
            <fieldset>
                <a href="{{ route('login') }}" class="link {{ request()->routeIs('login') ? 'active' : '' }}">
                    Ingresar
                </a>
                <a href="{{ route('registro') }}" class="link {{ request()->routeIs('registro') ? 'active' : '' }}">
                    Unirse
                </a>
                <a href="{{ route('favoritos') }}" class="link {{ request()->routeIs('favoritos') ? 'active' : '' }}">
                    Favoritos
                </a>
                <a href="{{ route('favorito_nuevo') }}"
                    class="link {{ request()->routeIs('favorito_nuevo') ? 'active' : '' }}">
                    Nuevo favorito
                </a>
            </fieldset>
        </div>
    </div>

</div>
