<div>
    <main id="main" class="main">
        @if (session()->has('successEdit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('successEdit') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="pagetitle">
            <h1>Hotel List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input wire:model.live.debouce.1000ms="search" type="text" class="form-control" placeholder="search.....">
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a href="/hotels/create" wire:navigate class="btn btn-primary">Create hotel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Start Check In</th>
                                            <th scope="col">Start Check Out</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hotels as $hotel)
                                            <tr>
                                                <td>{{ $hotel->name }}</td>
                                                <td>{{ $hotel->address }}</td>
                                                <td>{{ $hotel->email }}</td>
                                                <td>{{ $hotel->phone }}</td>
                                                <td>{{ $hotel->check_in_time }}</td>
                                                <td>{{ $hotel->check_out_time }}</td>
                                                <td>
                                                    <a wire:navigate href="/hotels/{{ $hotel->id }}/edit"
                                                        class="btn btn-sm btn-warning">edit</a>
                                                    <button
                                                        wire:click="delete({{$hotel->id}})"
                                                        wire:confirm="apakah kamu menghapus hotel {{$hotel->name}}"
                                                        href="#"
                                                        class="btn btn-sm btn-danger">delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- End table-responsive -->
                            {{ $hotels->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</div>
