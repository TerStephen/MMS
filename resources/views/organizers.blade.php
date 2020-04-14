@extends('layouts/layout')
@section('content')

    <h1>Event Organizers</h1>
    <a href='/organizers/input'>
        <button type="button" class="btn btn-primary" >Add Organizer</button>
    </a>
    <br/>
    <br/>
    @include('tables/event_organizers_table')
    
@endsection