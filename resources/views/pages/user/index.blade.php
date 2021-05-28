@extends('layouts.app')
@section('title')
<h1 class="nav-title text-white"> <i class="icon-person"></i>
Users</h1>
@endsection
@section('top-menu')
    @include('pages.user.topBar')
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.user.create')
{{-- modal edit --}}
@include('pages.user.edit')
{{-- modal show --}}
@include('pages.user.show')
<div class="page  height-full">
    {{-- alerts --}}
    <div>
        @include('alerts.toastr')
    </div>
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> {{ __('LIST USERS')}} </h6>
                    </div>
                </div>
                <div class="card-body">
                    <div id="table" class=" table-responsive">
                        <table id="example2" class="table table-bordered table-hover" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                            <thead>
                                <tr>
                                    <th><b>Id</b></th>
                                    <th><b>{{ __('USERNAME')}}</b></th>
                                    <th><b>{{ __('ROLE')}}</b></th>
                                    <th><b>{{ __('STATUS')}}</b></th>
                                    <th><b>{{ __('OPTIONS')}}</b></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                @foreach ($users as $user)
                                <tr class="tbody">
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        <div class="avatar avatar-md mr-3 mt-1 float-left">
                                            @if ($user->image != null)
                                            {{-- {{ Html::image('././img/avatar/'.$user->image) }} --}}
                                            {{ Html::image('././img/avatar/default.png') }}
                                            @else
                                            {{ Html::image('././img/avatar/default.png') }}
                                            @endif
                                        </div>
                                        <div>
                                            <div>
                                                <b>{{ $user->name}}</b>
                                            </div>
                                            <small>{{ $user->email }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        @foreach ($user->roles as $element) <span class="badge badge-primary r-5">{{ $element->name }}</span>@endforeach
                                    </td>
                                    <td>
                                        @if ($user->estatus && $user->estatus == 'active')
                                        <span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                        @endif
                                        @if($user->estatus == 'inactive')
                                        <span class="icon icon-circle s-12  mr-2 text-danger"></span> Inactive </td>
                                        @endif
                                        @if($user->estatus == 'suspended')
                                        <span class="icon icon-circle s-12  mr-2 text-warning"></span> Suspended </td>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-default btn-sm" title="Detalles" data-toggle="modal" data-target="#show" onclick="showData('{{ route('user.edit',$user) }}')">
                                            <i class="icon-eye text-info"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-sm" title="Editar" data-toggle="modal" data-target="#update" onclick="obtenerDatosGet('{{ route('user.edit',$user) }}', '{{ route('user.update',$user->id) }}')">
                                            <i class="icon-pencil text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Add New Message Fab Button-->
<a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal" data-target="#create" title="Add User">
    <i class="icon-add"></i>
</a>
@endsection
@section('js')
<script src={{asset('assets/plugins/bootstrap-fileinput/js/fileinput.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/plugins/piexif.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/plugins/sortable.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/js/locales/es.js')}}></script>
<script src={{asset('assets/plugins/bootstrap-fileinput/themes/gly/theme.js')}}></script>
<script>
    var title = 'Users';
    var colunms = [0,1,2,3,4];

    $(".file").fileinput({
        // theme: 'gly',
        // uploadUrl: '#',
        showCaption: false,
        showRemove: false,
        showUpload: false,
        showBrowse: false,
        browseOnZoneClick: true,
    });

    dataTableExport(title,colunms);
</script>
@endsection