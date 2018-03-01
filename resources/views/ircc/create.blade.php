@extends('dashboard')


@section('backend_content')
    <form action="{{route('ircc.store')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Neuen Industriekontakt anlegen</legend>

        <div class="form-group">
            <label for="">Firmenname</label>
            <input type="text" class="form-control" name="name" id="" placeholder="Input...">
        </div>
        <hr>
        <div class="form-group">
            <label for="">Ansprechpartner in der Firma</label>
            <input type="text" class="form-control" name="primary_contact" id="" placeholder="Input...">
        </div>
        <hr>
        <div class="form-group">
            <label for="">Wie beliebt sind wir bei der Firma ? (1 - 5)</label>
            <input type="range" min=1 max=5 class="form-control" name="likes" id="">
        </div>
        <hr>
        <div class="form-group">
            <label for="">Wann war der letzte Kontakt mit der Firma ? </label>
            <input type="text" class="form-control" name="last_contact" id="">
        </div>
        <hr>
        <div class="form-group">
            <label for="">Wer vom SAE Staff hat den Kontakt heran gezogen</label>
            <input type="text" class="form-control" name="last_contact_person" id="">
        </div>
        <hr>
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" class="form-control" name="adress" id="" rows="3">
        </div>
        <div class="form-group">
            <label for="">weitere Infos</label>
            <textarea class="form-control" name="infos" id="" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-group">
            <h4>Fachbereiche</h4>
            @foreach($departments as $department)
            <div class="checkbox-inline text-center">
                <label class="">
                    <input type="checkbox" value="{{$department->id}}" name="departments[]" id="">
                    <img src="{{asset('img/fb_icons/' . $department->name . ".png")}}" height="30px" alt="">
                    {{$department->name}}
                </label>
            </div>
            @endforeach
        </div>

        

        <button type="submit" class="btn btn-primary">Speichern</button>
    </form>
@stop