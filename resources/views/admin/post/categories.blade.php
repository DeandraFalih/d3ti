@extends('admin.layout')

@section('content')

<head>
	<title>D3 Teknik Informatika - Categories</title>
</head>


				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Post Categories</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Post</span></li>
								<li><span>Categories</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title">Add Category</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
              							<form method="post" novalidate="novalidate" action="{{ url('/d3ti-admin/categories/process') }}" enctype="multipart/form-data">
              								@csrf
											<div class="form-group">
												<label class="col-md-2 control-label">Name</label>
												<div class="col-md-9">
													<input type="text" name="name" class="col-md-12">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label">Description</label>
												<div class="col-md-9">
													<textarea name="description" class="col-md-12"></textarea>
												</div>
											</div>

											<div class="col-md-9">
                  								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
											</div>

										</div>
									</div>
								</section>
							</div>
							<div class="col-md-6">
									<!-- start: page -->
									<section class="panel">
										<header class="panel-heading">
							
											<h2 class="panel-title">List Category</h2>
										</header>
										<div class="panel-body">
											<table class="table table-bordered table-striped mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Description</th>
													</tr>
												</thead>
												<tbody>
								                    @foreach($data_post_categories as $data)
													<tr>
														<td>{{ $data->post_categories_id }}</td>
														<td>{{ $data->post_categories_name }}
															<br/><a href="">Edit</a> |
															<a href="">Delete</a>
														</td>
														<td>{{ $data->post_categories_description }}</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</section>
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