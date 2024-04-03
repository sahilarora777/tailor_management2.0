<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
        <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('assets') }}/img/shop-removebg-preview.png" alt="profile_image"
                 class="w-120 border-radius-lg shadow-sm" style="width: 170%; margin-bottom: auto; margin-left: 120px;">
        </div>
    </div>

    </div>
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="{{ route('dashboard') }}">


        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Laravel examples -->


            <!-- Pages -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Home</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? 'active bg-gradient-primary' : '' }}" href="{{ route('dashboard') }}">
                    <i class="material-icons opacity-10">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Clients dropdown -->
            <li class="nav-item dropdown mt-3">
                <a class="nav-link dropdown-toggle text-white" href="#" id="clientsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons opacity-10">table_view</i>
                    <span class="nav-link-text ms-1">Clients</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="clientsDropdown">
                    <a class="dropdown-item" href="/client/create">Add Client</a>
                    <a class="dropdown-item" href="/client">Manage Client</a>
                </div>
            </li>
            <!-- Brand dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons opacity-10">table_view</i>
                    <span class="nav-link-text ms-1">Brand</span>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="/brand/create">Add Brand</a>
                    <a class="dropdown-item" href="/brand">Manage Brand</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons opacity-10">table_view</i>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="/category/create">Add Category</a>
                    <a class="dropdown-item" href="/category">Manage Categories</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons opacity-10">table_view</i>
                    <span class="nav-link-text ms-1">Services/products</span>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="/product/create">Add Services/Products</a>
                    <a class="dropdown-item" href="/product">Manage Services/Products</a>
                </div>
            </li>
            <!-- Other pages -->


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons opacity-10">table_view</i>
                    <span class="nav-link-text ms-1">Measurement</span>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="/measurement/create">Add Measurement</a>
                    <a class="dropdown-item" href="/measurement">Manage Measurement</a>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? 'active bg-gradient-primary' : '' }}" href="{{ route('billing') }}">
                    <i class="material-icons opacity-10">receipt_long</i>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <!-- Add more pages here -->
        </ul>
    </div>

</aside>
