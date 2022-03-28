<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>pdfhtml</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-6 {
            width: 50%;
        }
        .page-break {
            page-break-after: always;
        }
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-grey">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
          <div class="invoice">

            <div class="container" style="position: relative;
            background-color: #ff7500;
            width: 38%;
            border-radius: 20px;
            left: -30%;
            top: 35px">
              <h3 style="margin-left: 30%;
              color: white;">Forces</h3>
              <div style="color: white; margin: 20px 0;">
                <h4 style="margin-left: 18%;">
                  @foreach($forces as $f)
                  {{$f->body}} 
                  <br>
                  @endforeach
                </h4>
               
              </div>
            </div>

            <div class="container" style="position: relative;
            background-color: #a5a5a5;
            width: 38%;
            border-radius: 20px;
            left: 12.5%;
            top: -68px">
              <h3 style="margin-left: 30%;
              color: white;"> Faiblesses</h3>
              <div style="color: white; margin: 20px 0;">
                <h4 style="margin-left: 18%;">
                  @foreach($faiblesses as $fe)
                  {{$fe->body}} 
                  <br>
                  @endforeach
                </h4>

              </div>
            </div>

            <div class="container" style="position: relative;
            background-color:#ffc200;
            width: 38%;
            border-radius: 20px;
            left: -30%;
            top: 29px;">
              <h3 style="margin-left: 30%;
              color: white;">Opportunités</h3>
              <div style="color: white; margin: 20px 0;">
                <h4 style="margin-left: 18%;">
                  @foreach($opportunités as $o)
                  {{$o->body}} 
                  <br>
                @endforeach
                </h4>

              </div>
            </div>

            <div class="container" style="position: relative;
            background-color:#4999d8;
            width: 38%;
            border-radius: 20px;
            left: 12.5%;
            top: -77px;">
              <h3 style="margin-left: 30%;
              color: white;">Menaces</h3>
              <div style="color: white; margin: 20px 0;">
                <h4 style="margin-left: 18%;">
                  @foreach($menaces as $m)
                  {{$m->body}} 
                  <br>
                  @endforeach
                </h4>
               
              </div>
            </div>
              <div>
                <img style="position: absolute;  top: 9%; left: 23%" src="{{asset('images/arrow.png')}}"/>
              </div>
          </div>
        </div>
         <div><a href="{{ URL::previous() }}" class="btn btn-success" style="background-color: red; border-color: red; margin-left: 85%;">Go Back</a></div>
  </body>
</html>
