@extends('dashboard')

@section('backend_content')
    <form action="{{($event) ? route('campus-tv-update', ['id' => $event->id]) : route('campus-tv-store')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Neue Info</legend>

        <div class="form-group">
            <label for="">Erste Überschrift</label>
            <input type="text" class="form-control" name="headline" id="" value="{{$event->headline ?? null}}" placeholder="">
        </div>

        <div class="form-group">
            <label for="">Details</label>
            <input type="text" class="form-control" name="details" id="" value="{{$event->details ?? null}}" placeholder="">
        </div>

        <div class="form-group">
            <label for="">zweite Überschrift</label>
            <input type="text" class="form-control" name="subheadline" id="" value="{{$event->subheadline ?? null}}" placeholder="">
        </div>

       <div class="form-group">
           <label for="">Hintergrund</label>
           <select name="background" id="inputID" class="form-control">
               <option value="bgBlue" {{$event->background ?? null === "bgBlue" ? 'selected' : ''}}>Blau</option>
               <option value="bgLightblue" {{$event->background ?? null === "bgLightblue" ? 'selected' : ''}}>Hellblau</option>
               <option value="bgYellow" {{$event->background ?? null === "bgYellow" ? 'selected' : ''}}>Gelb</option>
               <option value="bgOrange" {{$event->background ?? null === "bgOrange" ? 'selected' : ''}}>Orange</option>
           </select>
       </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" {{$event->active ?? null == 1 ? 'checked' : ''}} name="active" value="1" id="">
                    Veröffentlichen
                </label>
            </div>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
