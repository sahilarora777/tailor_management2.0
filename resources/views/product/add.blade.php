<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Add Products'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                 style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                 class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
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
                                <a href="/product" class="btn btn-secondary">Back</a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 class="text-center mb-4">Add Product</h2>


                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="image">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">product Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rate</label>
                                    <input type="text" id="rate" name="rate" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="quantity" class="form-label"> quantity</label>
                                    <input type="text" id="quantity" name="quantity" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="categories_id">Category:</label>
                                    <select name="categories_id" id="categories_id" class="form-control" required>
                                        <option value="" selected>--Select--fff</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="brands_id">Brand:</label>
                                    <select name="brands_id" id="brands_id" class="form-control" required>
                                        <option value="" selected>  --Select--</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="">Select status</option>
                                        <option value="Active">Active</option>
                                        <option value="In Active">In Active</option>
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

    </body>
    </html>

    </div>
    </div>
    </div>



    </div>
    <x-plugins></x-plugins>

</x-layout>
