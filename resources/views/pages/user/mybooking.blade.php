@extends('layouts.app')
@section('contain')
@if (Session::has('packages'))
<h1 style="align-content: center">Go and Book any package</h1>
@else
<div>
    <h1>Packages Booked By You</h1>
    <table class="table">
    <thead>
        <tr>
        
        <th scope="col">Order Id</th>
        <th scope="col">Package Name</th>
        <th scope="col">Package Price</th>
        <th scope="col">Start Date</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($packages as $package)
        
            <tr>
                
                <td>{{$package->id}}</td>
                <td>{{$package->name}}</td>
                <td>{{$package->price}}</td>
                <td>{{$package->date}}</td>
                
            </tr>
            
        @endforeach
    </tbody>
    </table>
</div>
@endif
<hr>
        @if (Session::has('events'))
        <h1 style="align-content: center">Go and Book any event</h1>
        @else
            <div>
                <h1>Events Booked By You</h1>
                <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Order Id</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Price</th>
                    <th scope="col">Event Start Date</th>
                    <th scope="col">Event End Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($events as $event)
                    
                        <tr>
                            
                            <td>{{$event->id}}</td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->price}}</td>
                            <td>{{$event->startdate}}</td>
                            <td>{{$event->enddate}}</td>
                            
                        </tr>
                        
                    @endforeach
                </tbody>
                </table>
            </div>
        @endif
@endsection