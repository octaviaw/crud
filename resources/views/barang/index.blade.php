@extends('layouts.app')
@section('title','halaman')
@section('sidebar')
@parent
<li>PHP</li>
@endsection
@section('content')

<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
        <div class="card-header d-flex p-0">
        <h3 class="card-title p-3">
            <i class="fa fa-pie-chart mr-1"></i>
            Data Barang
        </h3>
        </div><!-- /.card-header -->
        <div class="card-body">
        <div class="tab-content p-0">
            <div class="text-center">
                 <a href="{{route('barang.insert')}}">Tambah</a>
            </div>
            <br>
            <table class='table table-striped' style="margin-right:-100px;width:100%;">

<tr>
		<td>Nama Barang</td>
		<td>Jenis Barang</td>
		<td>Harga Barang</td>
		<td>Satuan</td>
		<td>kategori</td>
		<td>Aksi</td>

	</tr>
@foreach($databarang as $data)	<tr>
		
		<td>{{$data->nama_barang}}</td>
		<td>{{$data->jenis_barang}}</td>
		<td>{{$data->harga_barang}}</td>
		<td>{{$data->satuan}}</td>
		<td>{{$data->nama_kategori}}</td>
		<td><a href="{{route('barang.edit',$data->id)}}">Edit</a>
			<form action="{{route('barang.delete',$data->id)}}" method="POST">
				{{ csrf_field() }}
				<input type="text" name="_method" value="DELETE" hidden>
				<BUTTON type="submit" VALUE="Delete">Delete</BUTTON>

			</form>

			</td>

	</tr>
@endforeach
</table>
  </div>
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section>
    <!-- /.Left col -->
</div>
@endsection
</body>
</html>