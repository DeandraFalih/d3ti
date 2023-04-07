@extends('admin.layout')

@section('content')

<head>
	<title>D3 Teknik Informatika - All Post</title>
</head>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>All Post</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="{{ url ('/d3ti-admin') }}">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Post</span></li>
				<li><span>All Post</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
		</div>
	</header>

	<!-- start: page -->
	<section class="panel">
		<div class="panel-body">
			<table class="table table-bordered table-striped mb-none" id="datatable-default">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Author</th>
						<th>Category</th>
						<th>Tags</th>
						<th>Status</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($data_post as $data)
	                    @php
	                    	$status = $data->post_status
	                    @endphp
					<tr>
						<td>{{ $data->post_id }}</td>
						<td>{{ $data->post_title }}
							<br/>
							@if ($status == "Published")
							<a href="{{ url ('d3ti-admin/edit_post/'.$data->post_id) }}">Edit</a> |
		                      <form method="post" action="{{ url ('d3ti-admin/delete_post/'.$data->post_id) }}">
		                      @csrf
		                      @method('DELETE')
		                        <a href="#" onclick="event.preventDefault(); if(confirm('Hapus Data ?')){document.querySelector('form').submit();}">Delete</a>
							  </form>
							@else
							<a href="">Publish</a> |
							<a href="">Edit</a> |
							<a href="">Delete</a>
							@endif
						</td>
						<td>{{ $data->post_author }}</td>
						<td>{{ $data->post_category }}</td>
						<td>{{ $data->post_tags }}</td>
						<td>{{ $data->post_status }}</td>
						<td>{{ $data->post_date }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
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
		<script src="{{ url ('admin/assets/vendor/select2/select2.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
		<script src="{{ url ('admin/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ url ('admin/assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ url ('admin/assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ url ('admin/assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.default.js') }}"></script>
		<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
		<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.tabletools.js') }}"></script>
@endsection