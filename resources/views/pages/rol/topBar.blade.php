<header class="blue accent-3 relative">
	<div class="container-fluid text-white">
		<div class="row justify-content-between">
			<ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
				<li>
					<a class="nav-link" href="{{ route('user.index') }}" role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>{{__ ('Users')}}</a>
				</li>
				<li>
					<a class="nav-link active" href="{{ route('rol.index') }}" role="tab" aria-controls="v-pills-buyers"><i class="icon icon-face"></i>{{__ ('Roles/Profiles')}}</a>
				</li>
				{{-- <li>
					<a class="nav-link" href="{{ route('profitCenter.index') }}" role="tab" aria-controls="v-pills-sellers"><i class="icon  icon-local_shipping"></i> Profit Centers</a>
				</li> --}}
			</ul>
		</div>
	</div>
</header>