@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h2>Produk</h2>
        <a href="{{ route('manage_produks.create')}}" class="btn btn-dark">
            Tambah Produk
        </a>
    </div>
    <hr>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produks as $produk)

                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$produk->nama_produk}}</td>
                        <td><img src="./image/produks/{{$produk->gambar}}" alt="{{$produk->nama_produk}}" height="50" width="50"></td>
                        <td>
                            <a href="./edit-produk.php?id={{$produk->id}}" class=" btn btn-success">Edit</a>
                            <a href="./delete_produk.php?id={{$produk->id}}" onclick="return confirm('Yakin hapus Produk - {{$produk->nama_produk}} ?');" class=" btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach    
            </tbody>
    </table>
    <nav aria-label="Page navigation example" class="py-4 mb-5">
        <ul class="pagination justify-content-center">
           
        </ul>
    </nav>

</div>
@endsection
