
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home" href={{url('/dashboard');}}></i> Statistics </a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> gérer les listes<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href={{url('/tables/clients/clients');}}>Clients</a></li>
                        <li><a href={{url('/tables/contrats/contrats');}}>Contrats</a></li>
                        <li><a href={{url('/tables/factures/factures');}}>factures</a></li>
                        <li><a href={{url('/tables/forfaits/forfaits');}}>forfaits</a></li>
                        <li><a href={{url('/tables/paiements/paiements');}}>paiements</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-home"></i> valider les factures </a>
                    <li><a><i class="fa fa-desktop"></i> consultation<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Etats de paiements</a></li>
                        <li><a href="media_gallery.html">Etats des clients</a></li>
                        
                      </ul>
                    </li>
                   
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                        <li><a href="fixed_footer.html">Fixed Footer</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>

  
              </div>