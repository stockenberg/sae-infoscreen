@extends('dashboard')

@section('backend_content')
    <form action="{{($event) ? route('campus-tv-update', ['id' => $event->id]) : route('campus-tv-store')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Neue Info</legend>

        <div class="form-group">
            <label for="">Überschrift</label>
            <input type="text" class="form-control" name="headline" id="" value="{{($event) ? $event->headline : ''}}" placeholder="">
        </div>

        <div class="form-group">
            <label for="">Details</label>
            <textarea class="form-control" name="details" id="" placeholder="">{{($event) ? $event->details : ''}}</textarea>
        </div>

       <div class="form-group">
           <label for="">Hintergrund</label>
           <select name="background" id="inputID" class="form-control">
               <option value="red" {{$event && $event->background === "red" ? 'selected' : ''}}>Job Angebot</option>
               <option value="teal darken-3" {{$event && $event->background === "teal darken-3" ? 'selected' : ''}}>Praktikumsstelle</option>
               <option value="deep-purple" {{$event && $event->background === "deep-purple" ? 'selected' : ''}}>Ankündigung</option>
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
