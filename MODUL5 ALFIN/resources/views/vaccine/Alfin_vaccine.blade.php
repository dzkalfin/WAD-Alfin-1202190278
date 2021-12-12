@extends('main')
@section('container')

    @if ($vaccines == '[]')

        <div class="container my-5 text-center">
            <p class="text-muted">There is no data ...</p>
            <a class="btn btn-primary" href="/vaccine/create" role="button">Add Vaccine</a>
        </div>

    @else

        <p class="text-center my-5 fw-bold fs-4">List vaccine</p>
        <a class="btn btn-primary" href="/vaccine/create" role="button">Add Vaccine</a>

        {{-- List Vaccine --}}
        <table class="table">
            <thead></thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vaccines as $key => $vaccine)
                    <tr>
                        <td scope="row">{{ $key + 1 }}</td>
                        <td>{{ $vaccine->name }}</td>
                        <td>{{ $vaccine->price }}</td>
                        <td>
                            <a type="button" class="btn btn-warning btn-sm" href="{{ route('vaccine.edit', ['vaccine' => $vaccine]) }}"> edit </a>

                            <form method="POST" action="{{ route('vaccine.destroy', ['vaccine' => $vaccine]) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
@endsection
