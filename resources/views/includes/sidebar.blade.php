
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  
                  @if (Auth::user()->is_admin==1)
                      
                  <ul class="nav side-menu">
                    <li><a  href={{url('/dashboard');}}><i class="fa fa-home"></i> dashboard admin </a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> gérer les listes<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href={{url('/tables/clients/clients');}}>Clients</a></li>
                        <li><a href={{url('/tables/contrats/contrats');}}>Contrats</a></li>
                        <li><a href={{url('/tables/factures/factures');}}>Factures</a></li>
                        <li><a href={{url('/tables/forfaits/forfaits');}}>Forfaits</a></li>
                        <li><a href={{url('/tables/paiements/paiements');}}>Paiements</a></li>
                      </ul>
                    </li>

                    <li><a  href={{url('/validation');}}><i class="fa fa-home"></i> valider les factures </a>
                    <li><a><i class="fa fa-desktop"></i> consultation<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Etats de paiements</a></li>
                        <li><a href="media_gallery.html">Etats des clients</a></li>
                        
                      </ul>
                    </li>
                   
                    
                  </ul>
                  @endif

                  @if(Auth::user()->is_admin==0)

                  <ul class="nav side-menu">
                    <li><a  href={{url('/dashboardClient');}}><i class="fa fa-home"></i> dashboard client</a>
                    </li>
                    <li><a  href={{url('/offreAbonnements/offreAbonnement');}}><i class="fa fa-briefcase"></i> offres d'abonnements </a>
                    <li><a><i class="fa fa-edit"></i> voir mes données<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href={{url('/tables/clients/clients');}}>mes abonnements</a></li>
                        <li><a href={{url('/tables/contrats/contrats');}}>mes contrats</a></li>
                        <li><a href={{url('/tables/factures/factures');}}>mes factures</a></li>
                        <li><a href={{url('/tables/forfaits/forfaits');}}>mes paiements</a></li>
                      </ul>
                    </li>

                    
                   
                    
                  </ul>
                  @endif

                </div>

  
              </div>