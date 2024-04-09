<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="products"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Products"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> View Products<strong>
                            </div>
                        </div>

                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('product.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                product</a>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">

                                <form action="{{ route('product.index') }}" class="search-form">
                                    <div class="form-row align-items-center">
                                        <div class="col-md-6 mb-2">
                                            <input type="text" name="search_text" class="form-control" placeholder="Search...">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <button type="submit" class="btn btn-primary btn-custom">Search</button>
                                            <a href="{{ route('product.index') }}" class="btn btn-warning btn-custom">Clear</a>
                                        </div>
                                    </div>
                                </form>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>product Name</th>
                                        <th>Rate</th>
                                        <th>Quantity</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td><img src="/image/{{ $product->image }}" width="100px" ></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->rate }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->brand?->name }}</td>
                                            <td>{{ $product->category?->name }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                   href="{{ route('product.edit', $product->id) }}" data-original-title=""
                                                   title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>


                                                <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-link"
                                                            data-original-title="" title="">
                                                            <i class="material-icons ">delete</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                {{$products ->links()}}
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
