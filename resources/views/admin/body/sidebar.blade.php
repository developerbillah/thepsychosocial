 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="/admin/dashboard">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="/admin/dashboard" alt="">
						  <h3><b>Survey</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="/admin/dashboard">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        {{-- <li><a href="{{ route('add-client')}}"><i class="ti-more"></i>Question</a></li> --}}
        <li><a href="{{ route('add-user')}}"><i class="ti-more"></i>User Information</a></li>

		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>survey</span>
          </a>
        </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
