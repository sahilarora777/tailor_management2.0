<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Measurement List'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <!-- Add any content for the left column if needed -->
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/measurement/create" class="btn btn-primary">Add New Measurement</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Client</th>
                            <th scope="col">Categories<th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                  
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <th scope="row">{{ $measurement->id }}</th>
                                <td>{{ $measurement->clients->name}}</td>
                                <td>{{ $measurement->category?->name}}</td>
                                <td>{{ $measurement->date }}</td>
                                <td>{{ $measurement->description }}</td>

                                <td>
                                    <a href="{{ route('measurement.show', $measurement->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('measurement.edit', $measurement->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('measurement.destroy', $measurement->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
    <x-plugins></x-plugins>

</x-layout>
