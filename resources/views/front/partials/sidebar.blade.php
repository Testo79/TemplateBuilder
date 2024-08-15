<div class="hadi">
<script>
 
</script>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo" >
                </span>
                <div class="text header-text">
                    <span class="name">IEMS </span>
                    <span class="profession">Template Builder</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <!-- <li class="search-box">
                    <i class='bx bx-search-alt-2 icon'></i>
                    <input type="search" placeholder="Search ...">
                </li> -->

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('addProduct') }}">
                            <i class='bx bx-add-to-queue icon'></i>
                            <span class="text nav-text">Add Product</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('produit.index') }}">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">View Products</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('templates.index') }}">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">View Templates</span>
                        </a>
                    </li>
               
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottom-content">
            <form method="POST" action="{{ route('logout') }}">

                <li class="">
                @csrf
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                </form>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>


                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>

                </li>
            </div>
        </div>
    </nav>
    </div>