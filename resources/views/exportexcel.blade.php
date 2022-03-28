<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Export Data to Excel in Laravel using Maatwebsite</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
     .box{
      width:600px;
      margin:0 auto;
      border:1px solid #ccc;
     }</style>

</head>
<body class="bg-grey">
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
    <body>
        <br />
        <div class="container">
         <h3 >Export Data Excel </h3><br />
         <div >
          <a href="{{ route('exportexcel.excel') }}" class="btn btn-success" style="background-color: red; border-color: red;">Export to Excel</a>
         </div>
         <br />
         <div class="table-responsive">
          <table class="table table-striped table-bordered">
           <tr>
            <td>Type</td>
            <td>Description</td>
            <td>Anner</td>
           </tr>
           @foreach($posts as $post)
           <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body}}</td>
            <td>{{ $post->year }}</td>
           </tr>
           @endforeach
          </table>
         </div>
        </div>
        <div><a href="{{ URL::previous() }}" class="btn btn-success" style="background-color: red; border-color: red; margin-left: 86%;">Go Back</a></div>
    </body>
  </body>
</html>
