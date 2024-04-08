<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Manage category'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                 style="background-image: url('https://media.istockphoto.com/id/803512982/photo/sewing-process.jpg?s=612x612&w=0&k=20&c=BNn9kUwmMvjbfc-SF7I8z78scTDg1zZ_1A1DcjKy0DQ=');">
                <span class="  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                 class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    {{--                    <div class="col-auto my-auto">--}}
                    {{--                        <div class="h-100">--}}
                    {{--                            <h5 class="mb-1">--}}
                    {{--                                {{ auth()->user()->name }}--}}
                    {{--                            </h5>--}}
                    {{--                         --}}

                    <!DOCTYPE html>
                    <html>
                    <head>

                        <!-- Add Bootstrap CDN -->
                        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                        <style>
                            /* Custom CSS */
                            body {
                                padding: 20px;
                            }

                            .container {
                                max-width: 800px; /* Adjust container width */
                                margin: 0 auto;
                            }

                            .title {
                                text-align: left;
                                font-size: 24px;
                                margin-bottom: 20px;
                                color: #007bff; /* Change color to blue */
                                font-weight: bold; /* Make it bold */
                            }

                            .card {
                                border-radius: 10px;
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                            }

                            .card-body {
                                padding: 20px;
                            }

                            label {
                                font-weight: bold;
                            }

                            input[type="text"],
                            select,
                            textarea {
                                width: 100%;
                                padding: 8px;
                                margin-top: 5px;
                                margin-bottom: 15px;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                            }

                            input[type="submit"] {
                                background-color: #007bff;
                                color: #fff;
                                padding: 10px 20px;
                                border: none;
                                border-radius: 4px;
                                cursor: pointer;
                            }

                            input[type="submit"]:hover {
                                background-color: #0056b3;
                            }

                            /* Back button style */
                            .back-button {
                                text-align: right;
                            }
                        </style>
                    </head>
                    <body>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6 back-button">
                                <a href="/category" class="btn btn-secondary">Back</a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 class="text-center mb-4">Add Categories Management</h2>

                            <div class="row justify-content-center">
                                <div class="col-md-8">

                                        <form action="{{ route('customer_measurement.update', $customerMeasurement->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="name">Categories Name:</label>
                                                <input type="text" id="name" name="name" class="form-control" value="{{ $customerMeasurement->name }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="status">status:</label>
                                                <select id="status" name="status" class="form-control" required>
                                                    <option value="available" {{ $customerMeasurement->status === 'available' ? 'selected' : '' }}>Available</option>
                                                    <option value="not available" {{ $customerMeasurement->status === ' not available' ? 'selected' : '' }}>Not Available</option>
                                                </select>
                                            </div>


                                            <input type="submit" value="Update" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </body>
                    </html>

                </div>
            </div>
        </div>



    </div>
    <x-plugins></x-plugins>

</x-layout>
