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
                        <form action="{{ route('measurement.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">


                                <div class=" me-3 my-3 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('client.create') }}"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                        Client</a>
                                </div>

                                <div class="col-md-4">
                                    <label for="clients_id" class="form-label">Client:</label>
                                    <select name="clients_id" id="clients_id" class="form-select" required>
                                        <option value="" selected>--Select--</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                        <option value="new">Add New Client</option> <!-- Add New Client option -->
                                    </select>
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


                                <div class="col-md-4">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="description" class="form-label">Description:</label>
                                    <input type="text" name="description" id="description" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="shoulder" class="form-label">Shoulder:</label>
                                    <input type="text" name="shoulder" id="shoulder" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="back" class="form-label">Back:</label>
                                    <input type="text" name="back" id="back" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="sleeve" class="form-label">Sleeve Cuff:</label>
                                    <input type="text" name="sleeve" id="sleeve" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="lap" class="form-label">Lap:</label>
                                    <input type="text" name="lap" id="lap" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="collar" class="form-label">Neck Collar:</label>
                                    <input type="text" name="collar" id="collar" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="chest" class="form-label">Chest:</label>
                                    <input type="text" name="chest" id="chest" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="armhole" class="form-label">Armhole:</label>
                                    <input type="text" name="armhole" id="armhole" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="long" class="form-label">Long Sleeve Length:</label>
                                    <input type="text" name="long" id="long" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="neck" class="form-label">Neck:</label>
                                    <input type="text" name="neck" id="neck" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="waist" class="form-label">Waist:</label>
                                    <input type="text" name="waist" id="waist" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="bottom" class="form-label">Bottom:</label>
                                    <input type="text" name="bottom" id="bottom" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="length" class="form-label">Length:</label>
                                    <input type="text" name="length" id="length" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="top" class="form-label">Top Length:</label>
                                    <input type="text" name="top" id="top" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="short" class="form-label">Short Sleeve Length:</label>
                                    <input type="text" name="short" id="short" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="trouser" class="form-label">Trouser Length:</label>
                                    <input type="text" name="trouser" id="trouser" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="hip" class="form-label">Hip:</label>
                                    <input type="text" name="hip" id="hip" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="inches" class="form-label">Waist 36 Inches:</label>
                                    <input type="text" name="inches" id="inches" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="other" class="form-label">Other:</label>
                                    <input type="text" name="other" id="other" class="form-control">
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

</x-layout>
