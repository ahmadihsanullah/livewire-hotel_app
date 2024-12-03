<div>
    <main id="main" class="main">

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Create Hotel</h5>
                            </div>
                            <form wire:submit.prevent="create">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input wire:model="name" type="text" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input wire:model="email" type="email" class="form-control">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input wire:model="phone" type="text" class="form-control">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input wire:model="address" type="text" class="form-control">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Start</label>
                                    <div class="col-sm-10">
                                        <input wire:model="stars" type="number" class="form-control">
                                        @error('stars')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Check in time</label>
                                    <div class="col-sm-10">
                                        <input wire:model="check_in_time" type="datetime-local" class="form-control">
                                        @error('check_in_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Check out time</label>
                                    <div class="col-sm-10">
                                        <input wire:model="check_out_time" type="datetime-local" class="form-control">
                                        @error('check_out_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary float-end">Create</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
</div>
