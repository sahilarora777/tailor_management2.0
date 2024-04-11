<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <head>
        <!-- Other meta tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Other scripts and stylesheets -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Add Measurement'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <!-- Add any content for the left column if needed -->
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/customer_measurement" class="btn btn-secondary">Back</a>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <form action="{{ route('customer_measurement.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="clients_id" class="form-label">Client:</label>
                                        <select name="clients_id" id="clients_id" class="form-select" required>
                                            <option value="" selected>--Select--</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                                            @endforeach
                                            <option value="new">Add New Client</option> <!-- Add New Client option -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories_id">Category:</label>
                                        <select name="categories_id" id="categories_id" class="form-control" required>
                                            <option value="" selected>--Select--</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" data-category="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                    
                                <label for="measurements_id">Measurements:</label>
                                <select name="measurements_id[]" id="measurements_id" class="form-control" multiple required>
                                    Options will be dynamically populated based on selected category
                                </select>
                                <div class="cat_measurement"></div>
                                                                   
</div>
                            <div class="row mt-4" id="submit-button-container">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" id="submit-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-plugins></x-plugins>
</x-layout>

<script>
    $(document).ready(function() {
        $('#categories_id').change(function() {
            var categoryId = $(this).val();

            // Make AJAX request to fetch measurements based on selected category
            $.ajax({
                url: '/get-measurements/' + categoryId,
                type: 'GET',
                success: function(response) {
                    // Clear existing options
                    $('.cat_measurement').empty();

                    // Populate options with fetched measurements
                    response.forEach(function(category) {
                        $('.cat_measurement').append(`
                            <div class="form-group">
                                <label for="${category.measurement.id}">${category.measurement.name}:</label>
                                <input type="text" name="${category.measurement.id}" id="${category.measurement.id}" class="form-control">
                            </div>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
