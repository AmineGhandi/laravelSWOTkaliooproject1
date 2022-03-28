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
                    <div class="col-sm-4 float-right" style="margin-bottom: 10px;">
                        <form id="yearForm" method="get" action="{{URL::to('/posts/')}}">
                            <ul>
                                <li>
                                    <select name="year" id="year" class="form-control btn-sm" style="margin-left: 127%;">
                                        <option {{$year=='all'?'selected':''}} value="all">All</option>
                                        <option {{$year==2021?'selected':''}} value="2021">2021</option>
                                        <option {{$year==2020?'selected':''}} value="2020">2020</option>
                                        <option {{$year==2019?'selected':''}} value="2019">2019</option>
                                    </select>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </li>
                            </ul>
                            
                    <div style="margin-left: 130%; width: 725px;">
                        <a href="{{route('posts.create')}}" class="btn btn-sm being-red float-right" style="">
                            Ajouter un activite </a>
               <a href="#" class="btn  btn-sm being-red float-right" data-toggle="modal" data-target="#exampleModal">
                            Dupliquer </a>
                <select id="export" class="btn  btn-sm being-red " >
                    <option value="#" style="background-color: white "  selected="true" disabled>Exporter</option>
                    <option value="pdf1" style="background-color: white ">pdf1</option>
                    <option value="pdf2" style="background-color: white ">pdf2</option>
                    <option value="excel" style="background-color: white ">excel</option>
                 </select>
                    </div>
                       
                </div>
            </div>
            
                        </form>
                    </div>

            
        </div>
    </div>
    </div>
    <div class="container bg-white p-3">
        
        <table id="table_id" class=" table-bordered stripe hover row-border ">
            <thead>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th with="140px" class="text-center">
            </th>
        </tr>
        </thead>
        <tbody>
        @if(isset($posts)&&count($posts)>0)
        @foreach ($posts as $key => $value)
        <tr>
            <td>{{$value->title}}</td>
            <td>{{$value->body}}</td>
            <td class="text-right">
                <a class="button-borderless" href="{{route('posts.edit',$value->id)}}">
                    <i class="far fa-edit"></i></i></a>
                 {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
                    <button type="submit" style="display: inline;" class="button-borderless"> 
                        <a class="btn button-borderless" onclick="return confirm('êtes-vous sûr de vouloir continuer?')" href="{{route('posts.destroy', $value->id)}}">
                            <i class="fas fa-times"></i></button>
                  {!! Form::close() !!}
              </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
    <form method="GET" action="{{URL::to('/posts/dupliquer')}}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dupliquer ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>  voulez-vous dupliquer la Matrice de cette annee ?</p>
          <input type="hidden" name="year" value="{{$year}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" data-dismiss="modal">Ferme</a>
          <button type="submit" class="btn btn-primary">Dupliquer</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection































{{-- 
<a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
    <i class="glyphicon glyphicon-th-large"></i></a> --}}