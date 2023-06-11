@extends('panel')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Artikel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    @include('msg.msg')

    <a href='{{ url('artikel') }}' class="btn btn-secondary"> < Kembali </a>
     <!-- START FORM -->
     <form enctype="multipart/form-data" action='{{ url('artikel/' .$data->id) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    {{ $data->id }}    
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>

                <select class="form-control select2" style="width:82%" name="category_id" id="category_id">
                    <option value="{{ $data->category_id }}">{{ $data->category->nama_cat }}</option>
                        @foreach ($category as $item)
                        <option name='category_id' value="{{ $item->category_id }}" id="category_id">{{$item->nama_cat}}</option>
                        @endforeach
                </select>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_artikel' value="{{ $data->judul_artikel}}" id="judul_artikel">
                </div>
            </div>
            @if ($data->foto_artikel)
            <div class="mb-3">
                <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto_artikel }}"/>
            </div>
            @endif
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto_artikel" id="foto_artikel">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name='isi_artikel'  id="isi_artikel">{{ $data->isi_artikel }}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->

@endsection
