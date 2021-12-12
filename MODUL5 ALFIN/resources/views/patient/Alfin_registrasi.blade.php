@extends('main')
@section('container')

    <p class="text-center my-5 fw-bold fs-4">Register (nama vaksin nanti)   Patient</p>

    <div class="container">
        <div class="row">
            <div class="col align-self-center mx-5">
                <form action="" method="POST" class="">

                    <!-- Id vaksin -->
                    <label for="id" class="form-label">Vaccine ID</label>
                    <input class="form-control mb-3" type="text" value="Disabled readonly input" id="id" name="id" aria-label="Disabled input example" disabled readonly>

                    <!-- Pasien -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" name="nama_pasien">
                    </div>

                    <!-- NIK -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" name="nik">
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" name="alamat">
                    </div>

                    <!-- ktp -->
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">KTP</label>
                        <br>
                        <input class="mb-3" id="formFileSm" type="file" name="ktp">

                    <!-- No hp -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp" name="nohp" >
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection