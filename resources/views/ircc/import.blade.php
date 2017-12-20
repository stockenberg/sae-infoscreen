@extends('dashboard')


@section('backend_content')

    @if(session('success'))
        <h2>{{session('success')}}</h2>
    @endif
    <form action="{{route('ircc.import.upload')}}" method="post" role="form" enctype="multipart/form-data">
        <legend>Form Title</legend>

        {{csrf_field()}}

        <div class="form-group">
            <label for="">Upload Tab File - Student Data</label>
            <input type="file" class="form-control-file" name="students" id="" placeholder="" aria-describedby="fileHelpId">
            <small id="fileHelpId" class="form-text text-muted">Help text</small>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@stop