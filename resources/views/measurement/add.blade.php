<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <head>
        <!-- Other meta tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Other scripts and stylesheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css">
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
                        <a href="/measurement" class="btn btn-secondary">Back</a>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <form action="{{ route('measurement.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="me-3 my-3 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('client.create') }}">
                                        <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Client
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" name="date" id="date" class="form-control input-group input-group-outline"  style="height: 40px; border: 1px solid #ced4da; border-radius: 5px;">
                                </div>
                                <div class="col-md-4" >
                                <label for="name" class="form-label">Measurement-Name:</label>
                                       <input type="text" name="name" id="name" class="form-control input-group input-group-outline" style="height: 40px; border: 1px solid #ced4da; border-radius: 5px; text-align: 50;">
                                           </div>

                                <div class="col-md-4">
                                    <label for="clients_id" class="form-label">Client:</label>
                                    <select name="clients_id" id="clients_id" class="form-control" style="height: 40px; border: 1px solid #ced4da; border-radius: 5px; width: 200px; text-align: 50;" required>
                                        <option value="" selected>--Select--</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="categories_id" class="form-label">Category:</label>
                                    <select name="categories_id" id="categories_id" class="form-control" style="height: 40px; border: 1px solid #ced4da; border-radius: 5px; width: 200px; text-align: 50;" required>
                                        <option value="" selected>--Select--</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" data-category="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-plugins></x-plugins>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Selectize for the category dropdown
            $('#categories_id').selectize({
                create: function(input, callback) {
                    $.ajax({
                        url: '/store-category', // Replace with your backend route to store the category
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            name: input // Pass the new category name to the backend
                        },
                        success: function(response) {
                            callback({ value: response.id, text: input }); // Update the dropdown with the new category
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });

            // Initialize Selectize for the clients dropdown
            $('#clients_id').selectize({
                create: function(input, callback) {
                    $.ajax({
                        url: '{{ route("client.store") }}', // Replace with your backend route to store the client
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            name: input // Pass the new client name to the backend
                        },
                        success: function(response) {
                            callback({ value: response.id, text: input }); // Update the dropdown with the new client
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>
</x-layout>
