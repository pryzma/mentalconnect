<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
<div class="top-right links">
                        <!-- Authentication Links -->
                        @guest
                          
                                <a class="{{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                          
                            @if (Route::has('register'))
                                
                                    <a class="{{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}"> <i class="fas fa-edit"></i> {{ __('Register') }}</a>
                              
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                          
                        @endguest
                    </div>
    <div class="title"></div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
