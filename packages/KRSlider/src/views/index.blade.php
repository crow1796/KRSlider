@extends('krslider::template.layout', ['title' => $title])

@section('content')
	<div class="container">
		
		<div class="krslider-canvas-container">
			<div class="krslider-canvas">
				
			</div>
		</div>
		<div class="krslider-controls-container">
			<label for="add_image" class="btn btn-raised btn-info">
				Add Image
				<span class="fa fa-plus-circle"></span>
			</label>
			<input type="file" name="add_image" id="add_image" style="display: none;" multiple>
			<button type="button" class="btn btn-raised btn-info">
				Add Text
				<span class="fa fa-font"></span>
			</button>
		</div>
	</div>
@endsection