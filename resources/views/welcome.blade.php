@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f7ff;
        margin: 0;
        padding: 0;
    }
    .container {
        padding: 20px;
    }
    .cards {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }
    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 200px;
        text-align: center;
    }
    .card h2 {
        font-size: 48px;
        margin: 0;
    }
    .card p {
        margin: 5px 0;
        color: gray;
    }
    .calendar-container {
        margin-top: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .schedule {
        margin-top: 20px;
    }
    .schedule h3 {
        font-size: 18px;
        margin: 0;
    }
    .schedule-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    .schedule-item .time {
        color: gray;
    }
    .schedule-item .title {
        font-weight: bold;
    }
    .schedule-item .view {
        color: #007bff;
        cursor: pointer;
    }
</style>

<!-- FullCalendar Stylesheet -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js'></script>

<div class="container">
    <div class="cards">
        <div class="card">
            <h2>15</h2>
            <p>7 PIC Dosen</p>
            <div class="icon"><i class="fas fa-sync-alt"></i></div>
        </div>
        <div class="card">
            <h2>10</h2>
            <p>2 Kegiatan Selesai</p>
            <div class="icon"><i class="fas fa-sync-alt"></i></div>
        </div>
    </div>

    <!-- Calendar Section -->
    <div class="calendar-container">
        <div id="calendar"></div> <!-- Kalender FullCalendar -->
    </div>

    <div class="schedule">
        <h3>Schedule <span class="view-all">View All (9)</span></h3>
        <div class="schedule-item">
            <div>
                <div class="title">Meeting</div>
                <div class="time">8:30 PM</div>
                <div>This is to Notify you that you will be attending ..</div>
                <div class="view">View</div>
            </div>
        </div>
        <!-- Add more schedule items as needed -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [
                {
                    title: 'Meeting 1',
                    start: '2023-05-04',
                    description: 'Deskripsi Meeting 1'
                },
                {
                    title: 'Meeting 2',
                    start: '2023-05-10',
                    description: 'Deskripsi Meeting 2'
                }
                // Add more events as needed
            ],
            eventClick: function(info) {
                alert('Event: ' + info.event.title);
                alert('Description: ' + info.event.extendedProps.description);
            }
        });

        calendar.render();
    });
</script>

@endsection
