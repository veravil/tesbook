@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Store Buku</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('bu.create') }}"> Input Buku</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Judul Buku</th>
            <th width="280px"class="text-center">Description</th>
            <th width="280px"class="text-center">Kategori</th>
            <th width="280px"class="text-center">Keywords</th>
            <th width="280px"class="text-center">Harga</th>
            <th width="280px"class="text-center">Stok</th>
            <th width="280px"class="text-center">Penerbit</th>
        </tr>
        @foreach ($bu as $buku)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $buku->JudulBuku }}</td>
            <td>{{ $buku->Descripsi }}</td>
            <td>{{ $buku->Kategori }}</td>
            <td>{{ $buku->Keywords }}</td>
            <td>{{ $buku->Harga }}</td>
            <td>{{ $buku->Stok }}</td>
            <td>{{ $buku->Penerbit }}</td>
            <td class="text-center">
                <form action="{{ route('bu.destroy',$buku->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('bu.show',$buku->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('bu.edit',$buku->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $bu->links() !!}

@endsection