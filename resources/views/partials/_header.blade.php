 <div class="site-mobile-menu site-navbar-target">
     <div class="site-mobile-menu-header">
         <div class="site-mobile-menu-close">
             <span class="icofont-close js-menu-toggle"></span>
         </div>
     </div>
     <div class="site-mobile-menu-body"></div>
 </div>

 <nav class="site-nav">
     <div class="container">
         <div class="menu-bg-wrap">
             <div class="site-navigation">
                 <a href="{{ '/' }}" class="logo float-start m-0 uppercase">
                     @auth
                         Welcome
                         {{ auth()->user()->name }}
                     @else
                         Listing Wensite
                     @endauth
                 </a>
                 <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                     <li class="active"><a href="{{ '/' }}">Home</a></li>
                     <li class="has-children">
                         <a href="#">Listing</a>
                         <ul class="dropdown">
                             <li><a href="{{ '/listings/create' }}">Add Listing</a></li>
                             <li><a href="{{ '/listing' }}">All Listing</a></li>
                             {{-- <li class="has-children">
                                 <a href="#">Dropdown</a>
                                 <ul class="dropdown">
                                     <li><a href="#">Sub Menu One</a></li>
                                     <li><a href="#">Sub Menu Two</a></li>
                                     <li><a href="#">Sub Menu Three</a></li>
                                 </ul>
                             </li> --}}
                         </ul>
                     </li>
                     <li class="has-children">
                         <a href="{{ '/properties' }}">Properties</a>
                     </li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Contact Us</a></li>
                     @auth
                         <li class="has-children">
                             <a href="{{ '/' }}">Dashboard</a>
                             <ul class="dropdown">
                                 <li><a href="{{ '/listing/manage' }}">Manage Listing</a></li>
                                 <li>
                                     <form class="inline" action="{{ '/logout' }}" method="post">
                                         @csrf
                                         <button type="submit">Logout</button>
                                     </form>
                                 </li>
                             </ul>
                         </li>
                     @else
                         <li><a href="{{ '/register' }}">Register</a></li>
                         <li><a href="{{ '/login' }}">Login</a></li>
                     @endauth
                 </ul>

                 <a href="#"
                     class="burger light me-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none mt-1"
                     data-toggle="collapse" data-target="#main-navbar">
                     <span></span>
                 </a>

             </div>
         </div>
     </div>
 </nav>
