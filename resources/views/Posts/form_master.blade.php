<div class="row">
    <div class="col-sm-2">
      {!! form::label('title','Type','year') !!}
    </div>
    <div class="col-sm-10">
      @if ($errors->has('title'))
      <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
  @endif
      <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
        {{ Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Type de SWOT']) }}
        <p class="help-block"> {{ $errors->first('title', 'S.W.O.T required') }}</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('body','Description') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
        {{ Form::text('body',NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Description']) }}
        <p class="help-block">{{ $errors->first('body', 'plus de 6 char') }}</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('year','Annes') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('year') ? 'has-error' : "" }}">
        {{ Form::text('year',NULL, ['class'=>'form-control', 'id'=>'year', 'placeholder'=>'L annes']) }}
        <p class="help-block">{{ $errors->first('year', '*') }}</p>
      </div>
    </div>
  </div>


  <div class="text-right">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn being-red', 'type'=>'submit']) }}
          <a href="{{ URL::previous() }}" class="btn btn-success" style="background-color: red; border-color: red;">Go Back</a>

  </div>