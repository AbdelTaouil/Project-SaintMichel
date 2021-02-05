
  <nav class="main-menu ">
    <ul>
        <li>
            <a href="/">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                    Accueil
                </span>
            </a>
          
        </li>
        {{-- <li class="has-subnav">
            <a href="#">
                <i class="fa fa-laptop fa-2x"></i>
                <span class="nav-text">
                    Stars Components
                </span>
            </a>
            
        </li> --}}
        <li class="has-subnav">
            <a href="/technique">
               <i class="fa fa-list fa-2x"></i>
                <span class="nav-text">
                    Technique
                </span>
            </a>
            
        </li>
        <li class="has-subnav">
            <a href="/inventaire">
               <i class="fa fa-folder-open fa-2x"></i>
                <span class="nav-text">
                    Inventaire
                </span>
            </a>
           
        </li>
        {{-- <li>
            <a href="#">
                <i class="fa fa-bar-chart-o fa-2x"></i>
                <span class="nav-text">
                    Graphs and Statistics
                </span>
            </a>
        </li> --}}
        {{-- <li>
            <a href="#">
                <i class="fa fa-font fa-2x"></i>
                <span class="nav-text">
                   Quotes
                </span>
            </a>
        </li> --}}
        <li>
           <a href="/reservation">
               <i class="fa fa-table fa-2x"></i>
                <span class="nav-text">
                  Système de réservation de ressources et salles
                </span>
            </a>
        </li>
        {{-- <li>
           <a href="#">
                <i class="fa fa-map-marker fa-2x"></i>
                <span class="nav-text">
                    Maps
                </span>
            </a>
        </li>
        <li>
            <a href="#">
               <i class="fa fa-info fa-2x"></i>
                <span class="nav-text">
                    Documentation
                </span>
            </a>
        </li> --}}
    </ul>

    @if (Route::has('login'))
                    @auth
                      <ul class="logout">
                          <li>
                            <a href="#">
                                  <i class="fa fa-power-off fa-2x"></i>
                                  <span class="nav-text">
                                      Logout
                                  </span>
                              </a>
                          </li>  
                      </ul>  
                    @else
                      <ul class="logout">
                        <li>
                          <a href="{{ route('login') }}">
                                <i class="fa fa-power-off fa-2x"></i>
                                <span class="nav-text">
                                  Login
                                </span>
                            </a>
                        </li>  
                      </ul>  

                    @endauth
            @endif
   
</nav>