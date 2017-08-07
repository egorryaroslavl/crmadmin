<!DOCTYPE html>
<html lang="en">
@include('crm::layouts.head.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('crm::layouts.header.header')
<!-- =============================================== -->
	<!-- Left side column. contains the sidebar -->
@include('crm::layouts.main_menu')
	<!-- =============================================== -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	@include('crm::layouts.content_header',['title'=>'Заголовок',
	'subtitle'=> 'Подзаголовок'])
	<!-- Main content -->
		<div class="content">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					 @yield('content')
				</div>
			</div>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs"><strong>CRM tcYar</strong> </div>
		<strong>Copyright &copy; {{date('Y')}}   All rights reserved.</strong>
	</footer>
</div>
<!-- ./wrapper -->
@include('crm::layouts.scripts')
</body>
</html>