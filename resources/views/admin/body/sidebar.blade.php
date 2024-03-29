
<div class="sidebar-wrapper" data-simplebar="true">
	
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				


				<li>
					<a href="{{route('admin.dashboard')}}">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Category</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.category') }}"><i class='bx bx-radio-circle'></i>All Category</a>
						</li>
						
						
					</ul>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Blog Posts</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.blog.post') }}"><i class='bx bx-radio-circle'></i>All Blog Post</a>
						<li> <a href="{{ route('add.blog.post') }}"><i class='bx bx-radio-circle'></i>Add Blog Post</a>
						</li>
						
						
					</ul>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Comments</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.comment') }}"><i class='bx bx-radio-circle'></i>All Comment</a>
						
						</li>
						
						
					</ul>
				</li>


				<li class="menu-label">UI Elements</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Site Settings</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.site.settings') }}"><i class='bx bx-radio-circle'></i>All Site Settings</a>
						
						</li>
						
						
					</ul>
				</li>



				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						
					</ul>
				</li>
				
				
				
				
				
				
				
				
				
				<li class="menu-label">Others</li>
				
				
				<li>
					<a href="#" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>