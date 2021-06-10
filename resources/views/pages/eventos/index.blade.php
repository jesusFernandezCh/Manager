@extends('layouts.app')
@section('title')
    <h1 class="nav-title text-white"> <i class="icon icon-group"></i>
        Empleados</h1>
@section('top-menu')
    {{-- header --}}
    @include('pages.eventos.headbar')
    {{-- end header --}}
@endsection
@endsection
@section('maincontent')
{{-- modal create --}}
@include('pages.eventos.create')
{{-- modal show --}}
{{-- @include('pages.currency.show') --}}
{{-- modal edit --}}
{{-- @include('pages.currency.edit') --}}
<div class="page height-full">
    {{-- alerts --}}
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="card">
                <div class="form-group">
                    <div class="card-header white">
                        <h6> EVENTOS </h6>
                    </div>
                </div>
                <div class="card-body">
                    <div id='calendario'></div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Add New Message Fab Button-->
<a href="#" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary" data-toggle="modal"
    data-target="#create" title="Add Currency">
    <i class="icon-add"></i>
</a>
@endsection
@section('js')
<script>
    // $(document).ready(function()});
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendario');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            headerToolbar: {
                left: 'prevYear,prev,next,nextYear today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            buttonText: {
                    today: "Hoy",
                    month: "Mes",
                    week: "Semana",
                    day: "Agenda"
                },
            dateClick: function() {
                $("#create").modal("show");
            }
        });
        calendar.render();
    });

</script>

@endsection
