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
                        <a href="/category_measurement" class="btn btn-secondary">Back</a>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <form action="{{ route('category_measurement.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label for="categories_id">Category:</label>
                                <select name="categories_id" id="categories_id" class="input-group input-group-outline" style="height: 20px; border: 1px solid #ced4da; border-radius: 5px; width: 100px;" required>
                                    <option value="" selected>--Select--</option>
                                    @foreach($categories as $category)
                                        @if($category->status == 'Active')
                                            <option value="{{ $category->id }}" data-category="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @foreach($measurements as $measurement)
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" id="measurement{{ $measurement->id }}" name="measurements_id[]" value="{{ $measurement->id }}" class="form-check-input">
                                    <label for="measurement{{ $measurement->id }}" class="form-check-label">{{ $measurement->name }}</label>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
