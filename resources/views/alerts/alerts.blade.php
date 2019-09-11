@if(Session::has('message-error'))
<div class="alert alert-danger alert-dismissible animated fadeInUpShort" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span asira-hidden="true">&times;</span>
	</button>
	<span class="text-danger">
		<b><i class="glyphicon glyphicon-ban-circle"></i> Error:</b> {{Session::get('message-error')}}
	</span>
</div>
@endif
@if(Session::has('message-success'))
<div class="alert alert-success alert-dismissible animated fadeInUpShort" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span asira-hidden="true">&times;</span>
	</button>
	<span class="text-success">
		<strong><i class="glyphicon glyphicon-ok-circle"></i> Exitoso:</strong> {{Session::get('message-success')}}
	</span>
</div>
@endif
@if(Session::has('message-warning'))
<div class="alert alert-warning alert-dismissible animated fadeInUpShort" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span asira-hidden="true">&times;</span>
	</button>
	<sapn class=''>
		<b><i class="glyphicon glyphicon-warning-sign"></i> Precaución:</b> {{Session::get('message-warning')}}
	</span>
</div>
@endif
@if(Session::has('message-info'))
<div class="alert alert-info alert-dismissible animated fadeInUpShort" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span asira-hidden="true">&times;</span>
	</button>
	<span class="text-info">
		<b><i class="glyphicon glyphicon-info-sign"></i> Información:</b> {{Session::get('message-info')}}
	</span>
</div>
@endif