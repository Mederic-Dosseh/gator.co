            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="/dashboard" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="20">
                        </span>
                    </a>

                    <a href="/dashboard" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/dashboard">
                                    <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Utilisateurs</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{route('show.user')}}" >Liste des Utilisateurs</a>
                                    </li>
                                    <li>
                                        <a href="{{route('add.user')}}" >Ajouter Utilisateurs</a>

                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Services</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{route('show.service')}}" >Liste des service</a>
                                    </li>
                                    <li>

                                        <a href="{{route('add.service')}}" >Ajouter service</a>

                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Travaux</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{route('show.travaux')}}" >Liste des Travaux</a>
                                    </li>
                                    <li>
                                        <a href="{{route('add.travaux')}}" >Ajouter un Travail</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="menu-title">Paiements</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-invoice"></i>
                                    <span>Factures</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Listes de facture</a></li>
                                    <li><a href="#">Ajouter facture</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-invoice"></i>
                                    <span>Paiements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('show.paiement')}}">Listes les paiements</a></li>
                                    <li><a href="{{route('checkout')}}">Enregistrer un paiement</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-invoice"></i>
                                    <span>Contact</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('demandes')}}">Demandes</a></li>
                                </ul>
                            </li>





                            <li class="menu-title">Modification du site</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-flask"></i>
                                    <span>Accueil</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    
                                    <li><a href="{{route('slider.store')}}">Silder</a></li>
                                    
                                </ul>

                                
                            </li>

                           








                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
