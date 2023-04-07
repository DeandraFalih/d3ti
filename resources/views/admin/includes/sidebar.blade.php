			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav">
										<a href="{{ url ('/d3ti-admin') }}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-edit" aria-hidden="true"></i>
											<span>Post</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ url ('/d3ti-admin/all_post') }}">
													 All Post
												</a>
											</li>
											<li>
												<a href="{{ url ('/d3ti-admin/add_post') }}">
													 Add Post
												</a>
											</li>
											<li>
												<a href="{{ url ('/d3ti-admin/categories') }}">
													 Categories
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-bullhorn" aria-hidden="true"></i>
											<span>Event</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ url ('/d3ti-admin/all_event') }}">
													 All Event
												</a>
											</li>
											<li>
												<a href="{{ url ('/d3ti-admin/add_event') }}">
													 Add Event
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-briefcase" aria-hidden="true"></i>
											<span>Product D3TI</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.html">
													 All Product
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													 Add Product
												</a>
											</li>
											<li>
												<a href="ui-elements-tabs.html">
													 Categories
												</a>
											</li>
										</ul>
									</li>

								<hr class="separator" />

									<li class="nav-parent">
										<a>
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>User</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="">
													 All User
												</a>
											</li>
											<li>
												<a href="">
													 Add User
												</a>
											</li>
										</ul>
									</li>

									<li class="nav">
										<a href="">
											<i class="fa fa-key" aria-hidden="true"></i>
											<span>Role</span>
										</a>
									</li>

								<hr class="separator" />

									<li class="nav">
										<a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=d3ti_uns">
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Database</span>
										</a>
									</li>
				
				</aside>
				<!-- end: sidebar -->