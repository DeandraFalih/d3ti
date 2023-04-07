@extends('admin.layout')

@section('content')
<head>
	<title>D3 Teknik Informatika - Edit Post</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Edit Post</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
			<form method="post" novalidate="novalidate" action="{{ url('/d3ti-admin/edit_post/process') }}" enctype="multipart/form-data" class="form-horizontal form-bordered">
				@csrf
				<input type="submit" name="submit" class="btn btn-primary" value="Publish">
				<input type="submit" name="submit" class="btn btn-default" value="Draft" style="margin-left: 10px;">
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<div class="panel-body">
									<div class="form-group">
									</div>
              							@foreach ($post['data'] as $data)
											<div class="form-group">
												<label class="col-md-2 control-label">Title</label>
												<div class="col-md-9">
													<input type="text" name="title" class="col-md-12" value="{{ $data['post_title'] }}">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label">Featured Image</label>
												<div class="col-md-9">
													<input type="file" name="featured" accept="image/png, image/jpg, image/jpeg" value="{{ $data['post_featured_image'] }}">
												</div>
											</div>

											<div class="form-group">
    												<textarea name="content" id="content">{{ $data['post_content'] }}</textarea>
											</div>

											<div class="form-group" style="margin-top: 50px;">
												<label class="col-md-2 control-label">Category</label>
												<div class="col-md-9">
													<select name="category" class="col-md-12">
									                    <option value=""></option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label">Article Description</label>
												<div class="col-md-9">
													<textarea name="excerpt" class="col-md-12" maxlength="120" style="height: 150px;">{{ $data['post_excerpt'] }}</textarea>
												</div>
											</div>

											<div class="form-group">
											    <label class="col-md-2 control-label">Date and Time</label>
											    <div class="col-md-9">
											        @php
											            $now = new DateTime('now', new DateTimeZone('GMT'));
											            $now->setTimezone(new DateTimeZone('Asia/Jakarta'));
											            $now_string = $now->format('Y-m-d\TH:i:s');
											        @endphp
											        <input type="datetime-local" name="date" class="col-md-12" value="{{ $now_string }}">
											    </div>
											</div>


											<div class="form-group">
												<label class="col-md-2 control-label">Link</label>
												<div class="col-md-9">
													http://localhost/<input type="text" name="link" class="col-md-12">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label">Tags</label>
												<div class="col-md-9">
													<input type="text" name="tags" class="col-md-12">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label">Meta Description</label>
												<div class="col-md-9">
													<textarea name="meta" class="col-md-12" style="height: 150px;"></textarea>
												</div>
											</div>
										</form>
										@endforeach
									</div>
								</section>
							</div>
						</div>
</section>

		<!-- Vendor -->
		<script src="{{ url ('admin/assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ url ('admin/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/select2/select2.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/fuelux/js/spinner.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/dropzone/dropzone.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/lib/codemirror.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/addon/selection/active-line.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/mode/xml/xml.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/codemirror/mode/css/css.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/summernote/summernote.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/ios7-switch/ios7-switch.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ url ('admin/assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ url ('admin/assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ url ('admin/assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{ url ('admin/assets/javascripts/forms/examples.advanced.form.js') }}" /></script>

		<!-- Other Script -->
		<script src="{{ url ('admin/assets/javascripts/tinymce.js') }}"></script>
		<script>
			$(document).ready(function() {
			  $('.sidebar-toggle').trigger('click');
			});
		</script>
@endsection