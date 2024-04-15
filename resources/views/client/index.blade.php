<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Clients"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Clients Data"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> View Clients<strong>
                            </div>
                        </div>

                            <div class=" me-3 my-3 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="{{ route('client.create') }}"><i
                                        class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                    Client</a>
                            </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">


                                <form action="{{ route('client.index') }}" class="search-form">
                                    <div class="form-row align-items-center">
                                    <div class="col-md-6 mb-2 ml-4 border border-1 border-radius-lg me-2 input-group input-group-outline" style="width: 200px;"> 
                                            <input type="text" name="search_text" class="form-control" placeholder="Search...">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <button type="submit" class="btn btn-primary btn-custom">Search</button>
                                            <a href="{{ route('client.index') }}" class="btn btn-warning btn-custom">Clear</a>
                                        </div>
                                    </div>
                                </form>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Referring</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $client->id }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->gender }}</td>
                                            <td>{{ $client->mobile }}</td>
                                            <td>{{ $client->reffering }}</td>
                                            <td>{{ $client->address }}</td>
                                            <td>
                                                <a rel="tooltip" class="btn btn-success btn-link"
                                                   href="{{ route('client.edit', $client->id) }}" data-original-title=""
                                                   title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>

                                                <form action="{{ route('client.destroy', $client->id) }}" method="post" style="display: inline-block;">
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
                                {{$clients ->links()}}

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
