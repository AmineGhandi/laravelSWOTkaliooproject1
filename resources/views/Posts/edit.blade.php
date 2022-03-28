@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <div class="container">
                <div class="row" style="margin-bottom:2%;">
                    <div class="col-sm-4" style="margin-bottom: 10px">
                        <h2>Matrice S.W.O.T:</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PATCH']) }}
      @include('posts.form_master')
      {{ Form::close() }}

    </div>
  
  </div>
@endsection