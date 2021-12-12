@extends('main')

@section('container')
    <p class="text-center my-5 fw-bold fs-4">{{ $action }} Vaccine</p>

    <div class="container">
        <div class="row">
            <div class="col align-self-center mx-5">
                <form class="" action="{{ $action == 'edit' ? route('vaccine.update', ['vaccine' => $vaccine]) : route('vaccine.store') }}" method="POST" enctype="multipart/form-data">
                    @if($action == "edit")
                        @method('patch')
                    @endif

                    @csrf
                    
                    <!-- Nama Vaksin -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vaccine Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" name="nama"
                            value="{{ isset($vaccine) ? $vaccine->name : '' }}">
                    </div>

                    <!-- Harga -->
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga" value="{{ isset($vaccine) ? $vaccine->price : '' }}">
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{ isset($vaccine) ? $vaccine->description : '' }}</textarea>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image</label>
                        <br>
                        <input id="formFileSm" type="file" name="img" value="{{ isset($vaccine) ? $vaccine->image : '' }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection