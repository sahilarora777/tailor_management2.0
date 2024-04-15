<x-layout bodyClass="g-sidenav-show bg-gray-200">

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

                        <form action="{{ route('measurement.update', $measurement->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">


                                <div class="col-md-4">
                                    <label for="clients_id" class="form-label">Client:</label>
                                    <div class="input-group input-group-outline">
                                        <select name="clients_id" id="clients_id" class="form-control" style="height: 40px; border: 1px solid #ced4da; border-radius: 5px; width: 200px; text-align: 50;" required>
                                            <option value="" selected>--Select--</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}" {{ $client->id == old('clients_id', $measurement->clients_id) ? 'selected' : '' }}>
                                                    {{ $client->name }}
                                                </option>
                                            @endforeach
                                            <option value="new">Add New Client</option> <!-- Add New Client option -->
                                        </select>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <label for="categories_id">Category:</label>
                                <div class="input-group input-group-outline">
                                    <select name="categories_id" id="categories_id" class="form-control" style="border-radius: 5px; border: 1px solid #ccc;" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $measurement->categories_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                    <label for="date" class="form-label">Date:</label>
                                    <div class="input-group input-group-outline">
                                        <input type="date" name="date" id="date" class="form-control" style="border-radius: 5px; border: 1px solid #ccc;"  value="{{ old('date', $measurement->date) }}">
                                    </div>
                                </div>
                            
                          

                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <input type="submit" value="Update" class="btn btn-primary">
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
