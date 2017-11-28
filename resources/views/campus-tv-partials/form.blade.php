@extends('dashboard')

@section('backend_content')
    <form action="{{($event) ? route('campus-tv-update', ['id' => $event->id]) : route('campus-tv-store')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Neue Info</legend>

        <div class="form-group">
            <label for="">Erste Überschrift</label>
            <input type="text" class="form-control" name="headline" id="" value="{{($event) ? $event->headline : ''}}" placeholder="">
        </div>

        <div class="form-group">
            <label for="">Details</label>
            <input type="text" class="form-control" name="details" id="" value="{{($event) ? $event->details : ''}}" placeholder="">
        </div>

        <div class="form-group">
            <label for="">zweite Überschrift</label>
            <input type="text" class="form-control" name="subheadline" id="" value="{{($event) ? $event->subheadline: ''}}" placeholder="">
        </div>

       <div class="form-group">
           <label for="">Hintergrund</label>
           <select name="background" id="inputID" class="form-control">
               <option value="bgBlue" {{$event && $event->background === "bgBlue" ? 'selected' : ''}}>Blau</option>
               <option value="bgLightblue" {{$event && $event->background === "bgLightblue" ? 'selected' : ''}}>Hellblau</option>
               <option value="bgYellow" {{$event && $event->background === "bgYellow" ? 'selected' : ''}}>Gelb</option>
               <option value="bgOrange" {{$event && $event->background === "bgOrange" ? 'selected' : ''}}>Orange</option>
           </select>
       </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" {{$event && $event->active == 1 ? 'checked' : ''}} name="active" value="1" id="">
                    Veröffentlichen
                </label>
            </div>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
