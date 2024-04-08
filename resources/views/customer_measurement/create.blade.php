<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Add  categories'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                 style="background-image: url('data:image/jpeg;base64,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');">
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
                                    max-width: none; /* Set max-width to none to make it full width */
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
                                <h2 class="text-center mb-4">Add  Measurements</h2>

                                    <div class="col-md-8">
                                            <form action="{{ route('customer_measurement.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Measurement Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select id="status" name="status" class="form-control" required>
                                                        <option value="">Select status</option>
                                                        <option value="available">Available</option>
                                                        <option value="not available">Not Available</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
