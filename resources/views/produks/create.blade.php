@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Tambah Produk</h3>
        <div style="margin: 10px;">
            <a href="{{ route('manage_produks.index')}}" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg> Kembali</a>
        </div>
    </div>
    <hr>
    <form action="{{ route('manage_produks.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama_produk" class="form-label">Nama Produk<span class="text-danger"> *</span></label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" autocomplete="off" required autofocus>
        </div>
        <div class="mb-4">
            <label for="summernote" class="form-label">Deskripsi Produk<span class="text-danger"> *</span></label>
            <textarea class="form-control" name="deskripsi" id="summernote"></textarea>
        </div>
        <div class="mb-4">
            <label for="gambar" class="form-label">Gambar<span class="text-danger"> *</span></label>
            <input type="file" class="form-control" name="gambar" id="gambar" autocomplete="off" required>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="link_shopee" class="form-label">Link Shopee</label>
                <input type="text" class="form-control" name="link_shopee" id="link_shopee" autocomplete="off">
            </div>
            <div class="col-md-6 mb-6">
                <label for="link_tiktok" class="form-label">Link Tik-Tok</label>
                <input type="text" class="form-control" name="link_tiktok" id="link_tiktok" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label for="link_ig" class="form-label">Link Instagram</label>
                <input type="text" class="form-control" name="link_ig" id="link_ig" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label for="link_facebook" class="form-label">Link Facebook</label>
                <input type="text" class="form-control" name="link_facebook" id="link_facebook" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label for="link_tokopedia" class="form-label">Link Tokopedia</label>
                <input type="text" class="form-control" name="link_tokopedia" id="link_tokopedia" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label for="link_blibli" class="form-label">Link Blibli</label>
                <input type="text" class="form-control" name="link_blibli" id="link_blibli" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label for="link_lazada" class="form-label">Link Lazada</label>
                <input type="text" class="form-control" name="link_lazada" id="link_lazada" autocomplete="off">
            </div>
        </div>
        <br>
        <p>Tanda (<span class="text-danger"> * </span>) wajid disi.</p>
        <br>
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-dark mx-2" style="padding: 10px;" type="cancel" onclick="javascript:window.location='./produks.php';">Batal</button>
            <button class="btn btn-dark " style="padding: 10px;" type="submit" name="submit">Kirim & Simpan</button>
        </div>
    </form>

</div>


<script>
     $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Deskripsi Produk',
        tabsize: 2,
        height: 400
    });
    });
</script>



@endsection


