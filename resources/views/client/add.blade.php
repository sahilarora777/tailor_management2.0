<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="AddClient"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Add Clients'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                 style="background-image: url('https://www.shutterstock.com/image-photo/designer-customer-client-atelier-beautiful-260nw-1913366962.jpg');">
                <span class="  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                           
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
                                    <a href="/client" class="btn btn-secondary">Back</a>
                                </div>
                            </div>


                                <div class="card-body">
                                    <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="gender">Gender:</label>
                                            <select id="gender" name="gender" class="form-control" required>
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile:</label>
                                            <input type="text" id="mobile" name="mobile" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="reffering">Referring:</label>
                                            <input type="text" id="reffering" name="reffering" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <textarea id="address" name="address" class="form-control" required></textarea>
                                        </div>

                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>

                        </body>
                        </html>

    </div>
    <x-plugins></x-plugins>

</x-layout>
