@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
			@if(session('Sukses'))
		     	 <div class="alert alert-success" role="alert">
				 {{session('Sukses')}}
	       		 </div>
		    @endif

		   @if(session('Error'))
		      <div class="alert alert-danger" role="alert">
			  {{session('Error')}}
	          </div>
		   @endif

	<div class="panel panel-profile">
		<div class="clearfix">
			<!-- LEFT COLUMN -->
			<div class="profile-left">
				<!-- PROFILE HEADER -->
					<div class="profile-header">
						<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{$siswa->getAvatar()}}" width="85" height="85" class="img-circle" alt="Avatar">
								<h3 class="name">{{$siswa->nama}}</h3>
								<span class="online-status status-available">Available</span>
							</div>

	<div class="profile-stat">
		<div class="row">
			<div class="col-md-4 stat-item">
				{{$siswa->matkul->count()}} <span>Mata Kuliah</span>
			</div>

	<div class="col-md-4 stat-item">
		15 <span>Awards</span>
	</div>

	<div class="col-md-4 stat-item">
		2174 <span>Points</span>
	</div>
		</div>
	</div>
					</div>
					<!-- END PROFILE HEADER -->

	<!-- PROFILE DETAIL -->
	<br><br><br>
	<div class="profile-detail">
		<div class="profile-info">
			<center><h4 class="heading">Data Diri</h4></center>
			<br>
				<ul class="list-unstyled list-justify">
					<li>NIM <span>{{$siswa->nim}}</span></li>
					<li>Email <span>{{$siswa->email}}</span></li>
					<li>Jurusan <span>{{$siswa->jurusan}}</span></li>	
				</ul>
		</div>

	<div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
	</div>
	<!-- END PROFILE DETAIL -->
</div>
<!-- END LEFT COLUMN -->

	<!-- RIGHT COLUMN -->
	<div class="profile-right">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Nilai</button>
			<div class="panel">
				<div class="panel-heading">
					<center><h3 class="panel-title">Mata Kuliah</h3></center>
				</div>
				<br>
						<div class="panel-body">
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Kode</th>
								<th>Nama</th>
								<th>Semester</th>
								<th>Nilai</th>
							</tr>
							</thead>
							<tbody>
							@foreach($siswa->matkul as $matkul)
							<tr>
								<td>{{$matkul->kode}}</td>
								<td>{{$matkul->nama_matkul}}</td>
								<td>{{$matkul->semester}}</td>
								<td>{{$matkul->pivot->nilai}}</td>
							</tr>
							@endforeach
							</tbody>
							</table>
						</div>
			</div>
	</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT -->
</div>
		
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	         <form action="/siswa/{{$siswa->id}}/addnilai" method="POST" enctype="multipart/form-data">
	         {{csrf_field()}}
	         <div class="form-group">
	    		<label for="matkul">Mata Kuliah</label>
	    			<select class="form-control" id="matkul" name="matkul">
	      			@foreach($matakuliah as $mk)
	      				<option value="{{$mk->id}}">{{$mk->nama_matkul}}</option>
	      			@endforeach
	    			</select>
	  		</div>

	        <div class="form-group">
	           <label for="exampleInputEmail1">Nilai</label>
	             <input name="nilai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nilai" value="{{old('nilai')}}">
	        </div>
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	         </form>
	      </div>
	     </div>
	  </div>
	</div>
@stop
