@extends('layouts.app')
@section('title')
    <h1 class="nav-title text-white"> <i class="icon icon-calendar"></i>
        Eventos</h1>
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
            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            selectable: true,
            events: [{
                    title: 'Business Lunch',
                    start: '2021-06-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2021-06-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#257e4a'
                },
                {
                    title: 'Conference',
                    start: '2021-06-18',
                    end: '2021-06-20'
                },
                {
                    title: 'Party',
                    start: '2021-06-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    groupId: 'availableForMeeting',
                    start: '2021-06-11T10:00:00',
                    end: '2021-06-11T16:00:00',
                    display: 'background'
                },
                {
                    groupId: 'availableForMeeting',
                    start: '2021-06-13T10:00:00',
                    end: '2021-06-13T16:00:00',
                    display: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2021-06-24',
                    end: '2021-06-28',
                    overlap: false,
                    display: 'background',
                    color: '#ff9f89'
                },
                {
                    start: '2021-06-06',
                    end: '2021-06-08',
                    overlap: false,
                    display: 'background',
                    color: '#ff9f89'
                }
            ],
            dateClick: function(info) {
                $("#create").modal("show");
            }
        });
        calendar.render();
    });

</script>

@endsection
