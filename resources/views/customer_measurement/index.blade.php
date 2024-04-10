<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="categories"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Categories Type's"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> View Categories<strong>
                            </div>
                        </div>

                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('customer_measurement.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add
                                Categories</a>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <form action="{{ route('customer_measurement.index') }}" class="search-form">
                                    <div class="form-row align-items-center">
                                        <div class="col-md-6 mb-2 ml-4"> 
                                            <input type="text" name="search_text" class="form-control" placeholder="Search...">
                                        </div>

                                        <div class="col-md-6 mb-2 ">
                                            <div class="box">
                                                <button type="submit" class="btn btn-primary btn-custom">Search</button>
                                                <a href="{{ route('customer_measurement.index') }}" class="btn btn-warning btn-custom">Clear</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>categories Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customer_measurements as $customer_measurement)
                                        <tr>
                                            <td>{{ $customer_measurement->id }}</td>
                                            <td>{{ $customer_measurement->name }}</td>
                                            <td>{{ $customer_measurement->status }}</td>
                                            <td>
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                   href="{{ route('customer_measurement.edit', $customer_measurement->id) }}" data-original-title=""
                                                   title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                </td>
                                                 <td>
                                                <form action="{{ route('customer_measurement.destroy', $customer_measurement->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-link"><i class="material-icons ">delete</i></button>
                                                </form>
                                                 </td>
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
