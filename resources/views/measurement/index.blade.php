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
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Shoulder</th>
                            <th scope="col">Back</th>
                            <th scope="col">Sleeve Cuff</th>
                            <th scope="col">Lap</th>
                            <th scope="col">Neck Collar</th>
                            <th scope="col">Chest</th>
                            <th scope="col">Armhole</th>
                            <th scope="col">Long Sleeve Length</th>
                            <th scope="col">Neck</th>
                            <th scope="col">Waist</th>
                            <th scope="col">Bottom</th>
                            <th scope="col">Length</th>
                            <th scope="col">Top Length</th>
                            <th scope="col">Short Sleeve Length</th>
                            <th scope="col">Trouser Length</th>
                            <th scope="col">Hip</th>
                            <th scope="col">Waist 36 Inches</th>
                            <th scope="col">Other</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <th scope="row">{{ $measurement->id }}</th>
                                <td>{{ $measurement->client?->name }}</td>
                                <td>{{ $measurement->date }}</td>
                                <td>{{ $measurement->description }}</td>
                                <td>{{ $measurement->shoulder }}</td>
                                <td>{{ $measurement->back }}</td>
                                <td>{{ $measurement->sleeve }}</td>
                                <td>{{ $measurement->lap }}</td>
                                <td>{{ $measurement->collar }}</td>
                                <td>{{ $measurement->chest }}</td>
                                <td>{{ $measurement->armhole }}</td>
                                <td>{{ $measurement->long }}</td>
                                <td>{{ $measurement->neck }}</td>
                                <td>{{ $measurement->waist }}</td>
                                <td>{{ $measurement->bottom }}</td>
                                <td>{{ $measurement->length }}</td>
                                <td>{{ $measurement->top }}</td>
                                <td>{{ $measurement->short }}</td>
                                <td>{{ $measurement->trouser }}</td>
                                <td>{{ $measurement->hip }}</td>
                                <td>{{ $measurement->inches }}</td>
                                <td>{{ $measurement->other }}</td>
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
