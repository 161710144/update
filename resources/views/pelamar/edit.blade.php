@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-active">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pelamar.update',$pel->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">Telepon</label>	
			  			<input type="number" value="{{ $pel->telepon }}" name="telepon" class="form-control"  required
			  			@if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pesan') ? ' has-error' : '' }}">
			  			<label class="control-label">Pesan</label>	
			  			<textarea type="textarea" value="{{ $pel->pesan }}" name="pesan" class="ckeditor"  required></textarea> 
			  			@if ($errors->has('pesan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('file_cv') ? ' has-error' : '' }}">
			  			<label class="control-label">FileCV</label>	
			  			<input type="file" name="file_cv" class="form-control" value="{{ $pel->file_cv }}"   required>
			  			@if ($errors->has('file_cv'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file_cv') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Save</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
