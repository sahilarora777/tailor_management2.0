<x-layout bodyClass="g-sidenav-show bg-gray-200">
<head>
    <!-- Other meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Other scripts and stylesheets -->
</head>

<x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <x-navbars.navs.auth titlePage='Edit Measurement'></x-navbars.navs.auth>
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
                    <form action="{{ route('customer_measurement.update', $customer_measurement->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label for="clients_id" class="form-label">Client:</label>
                                <select name="clients_id" id="clients_id" class="form-select" required>
                                    <option value="" selected>--Select--</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" {{ $client->id == $customer_measurement->clients_id ? 'selected' : '' }}>{{ $client->name }}</option>
                                    @endforeach
                                    <option value="new">Add New Client</option> <!-- Add New Client option -->
                                </select>
                            </div>
                       
                            <div class="category-rows">
                                            <div class="category-row">
                                            <div class="col-md-4">
    
                                            
                                            <label for="categories_id" class="form-label">Categories:</label>

                                            <select name="categories[]" class="form-select" required>
                                                    <option value="" selected>--Select--</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"  {{ $category->id == $customer_measurement->categories_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="button" class="btn btn-sm btn-danger mt-2 remove-category">-</button>
                                                <button type="button" class="btn btn-sm btn-success mt-2" id="add-category">+</button>
</div>                                        
                                            </div>
                                            

                            <div class="form-group">
                            <div class="form-group">
                                <label for="measurements_id">Measurements:</label>
                              
                                </select>
                                <div class="cat_measurement"></div>
                                <div class="form-group" id="category-fields">                  
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
    // Function to add a new category dropdown
    $('#add-category').click(function() {
        $('#category-fields').append(`
            <div class="category-row">
                <select name="categories[]" class="form-select" required>
                    <option value="" selected>--Select--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" data-category="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-sm btn-danger mt-2 remove-category">Remove</button>
            </div>
        `);
    });

    // Function to remove a category dropdown
    $(document).on('click', '.remove-category', function() {
        $(this).closest('.category-row').remove();
    });

    $(document).on('change', 'select[name="categories[]"]', function() {
        var categoryId = $(this).val();

            // Make AJAX request to fetch measurements based on selected category
            $.ajax({
                url: '/get-measurements/' + categoryId,
                type: 'GET',
                success: function(response) {
                    // Clear existing options
                    // $('.cat_measurement').empty();

                    // Populate options with fetched measurements
                    response.forEach(function(category) {
                        $('.cat_measurement').append(`
                        <div class="col-md-4">
                            <div class="form-check form-check-inline">
                            <label for="${category.measurement.id}">${category.measurement.name}:</label>
                                <input type="text" name="measurement_id[${category.measurement.id}]" id="${category.measurement.id}" class="form-select">
                                </div>
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
