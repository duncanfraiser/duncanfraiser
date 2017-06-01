@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')

      <div class="col-md-9 col-md-offset-3">
        <h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Skills</h1>
      </div>

      {{Form::model($landing, ['method' => 'PATCH', 'files' => true, 'action' => ['ToolController@update', $landing->id]])}}

      <div class="col-md-9 col-md-offset-3">
        <ul style="font-size: 2em">
          @foreach($tools as $key => $tool)
            <input type="hidden" name="ids[]" value={{$tool->id}}>
            <li class="os-animation form-inline" data-os-animation="fadeInRight" data-os-animation-delay={{$tool->delay}}>
              {{Form::text('name[]', $tool->name, ['class' => 'form-control', 'placeholder' => 'Enter Tool'])}}
              {{Form::select('direction[]', $dirs, $tool->direction, ['placeholder' => 'Animation Class','class' => 'form-control'])}}
              {{Form::select('delay[]', $seconds, $tool->delay, ['placeholder' => 'Animation Delay','class' => 'form-control'])}}
              {{ Form::checkbox('dels[]', $tool->id) }}<h6 class="toollable">delete</h6>
            </li>
          @endforeach
        </ul>




        <div class="form-group">
        <center>
          <a href="{{URL::previous()}}"><button class="btn whiteBtn">Cancel</button></a>
          {{Form::submit('Update', ['class' => 'btn blueBtn'])}}
          </center>
        </div>


      </div>


@include('_includes.bwDesk')

@endsection
