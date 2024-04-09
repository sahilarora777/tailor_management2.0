<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('assets') }}/img/shop-removebg-preview.png" alt="profile_image" class="w-120 border-radius-lg shadow-sm" style="width: 170%; margin-bottom: auto; margin-left: 120px;">
        </div>
    </div>
    <div class="sidenav-body">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="{{ route('dashboard') }}"></a>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Home</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ $activePage == 'dashboard' ? 'active bg-gradient-primary' : '' }}" href="{{ route('dashboard') }}">
                        <i class="material-icons opacity-10">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <!-- Clients subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="clientsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">person</i>
                        <span class="nav-link-text ms-1">Clients</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="clientsDropdown" id="clientsSubcontent">
                        <a class="dropdown-item text-info" href="{{ url('/client/create') }}">Add Client</a>
                        <a class="dropdown-item text-success" href="{{ url('/client') }}">Manage Client</a>
                    </div>
                </li>
                <!-- Brand subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">branding_watermark</i>
                        <span class="nav-link-text ms-1">Brand</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="brandDropdown" id="brandSubcontent">
                        <a class="dropdown-item text-info" href="/brand/create">Add Brand</a>
                        <a class="dropdown-item text-success" href="/brand">Manage Brand</a>
                    </div>
                </li>
                <!-- Category subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">category</i>
                        <span class="nav-link-text ms-1">Categories</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown" id="categorySubcontent">
                        <a class="dropdown-item text-info" href="/category/create">Add Category</a>
                        <a class="dropdown-item text-success" href="/category">Manage Categories</a>
                    </div>
                </li>
                <!-- Services/products subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">inventory_2</i>
                        <span class="nav-link-text ms-1">Services/Products</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown" id="servicesSubcontent">
                    <a class="dropdown-item text-info" href="/product/create">Add Services/Products</a> 
                    <a class="dropdown-item text-success" href="/product">Manage Services/Products</a>
                    </div>
                </li>
                <!-- Measurement subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="measurementDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">ruler</i>
                        <span class="nav-link-text ms-1">Measurement</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="measurementDropdown" id="measurementSubcontent">
                        <a class="dropdown-item text-info" href="/measurement/create">Add Measurement</a>
                        <a class="dropdown-item text-success" href="/measurement">Manage Measurement</a>
                
                    </div>
                </li>
                <!-- Category Measurement subcontent -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="categoryMeasurementDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons opacity-10">category</i>
                        <span class="nav-link-text ms-1">Category Measurement</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryMeasurementDropdown" id="categoryMeasurementSubcontent">
                        <a class="dropdown-item text-info" href="/category_measurement/create">Add Measurement</a>
                        <a class="dropdown-item text-success" href="/category_measurement">Manage Measurement</a>

                    </div>
                </li>
                <!-- Add more subcontents here -->
            </ul>
        </div>
    </div>
</aside>
