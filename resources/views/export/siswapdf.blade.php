<table class="table" style="border:1px solid #ddd">
	<thead>
		<tr>
			<th>Nama Lengkap</th>
			<th>NIM</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
	</thead>
	<tbody>
		@foreach($siswa as $s)
		<tr>
			<td>{{$s->nama}}</td>
			<td>{{$s->nim}}</td>
			<td>{{$s->email}}</td>
			<td>{{$s->jurusan}}</td>
		</tr>
		@endforeach
	</tbody>
</table>