<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>pdfhtml</title>
    <style>
        table, td, tr{
  border-collapse: collapse;
  width:100%;
  border: 1px solid black;
}
#t1,#t3{
    width: 46%;
}
#t1, #t2{
    background-color: midnightblue;
    color: white;
}
#t6{
    border: 1px white
}
a{
    margin-top: 3%;
}
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <div class="container">
                    <div class="row" style="margin-bottom:2%;">
                        <div class="col-sm-4" style="margin-bottom: 10px">
                            <h2>Matrice S.W.O.T:</h2>
                            <a href="{{ URL::previous() }}" class="btn btn-success" style=" margin-left: 94%;">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table >
        <tr>
            <td id="t1">Forces</td>
            <td id="t2">Faiblesses</td>
        </tr>
        <tr style="width: 46">
            <td id="t3">
              @foreach($forces as $f)
                {{$f->body}} 
                <br>
              @endforeach
            </td>
            <td id="t4">
                @foreach($faiblesses as $fe)
                {{$fe->body}} 
                <br>
                @endforeach
            </td>
        </tr>
        <tr>
            <td id="t1">Opportunités</td>
            <td id="t2">Menaces</td>
        </tr>
        <tr>
            <td id="t3">
                @foreach($opportunités as $o)
                {{$o->body}} 
                <br>
              @endforeach
            </td>
            <td id="t4">
                @foreach($menaces as $m)
                {{$m->body}} 
                <br>
              @endforeach
            </td>
        </tr>
        
    </table>
</body>
</html>