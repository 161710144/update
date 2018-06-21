@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Perusahaan  
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Logo</label>	
			  			<input type="img" name="logo" class="form-control" value="{{ $per->logo }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $per->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Telepon</label>	
			  			<input type="text" name="telepon" class="form-control" value="{{ $per->telepon }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Userame</label>	
			  			<input type="text" name="user_id" class="form-control" value="{{ $per->User->name }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection