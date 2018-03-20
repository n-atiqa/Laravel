<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resaturant</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<style>

      #map {
        height: 100%;
      }
    
      #floating-panel {
         position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      @media (max-width: 600px) {
         #right-panel { float: none; }
      }

      #map{
        height: 0;
        overflow: hidden;
        padding-bottom: 22.25%;
        padding-top: 30px;
        position: relative;
        }

      #map1{
        height: 0;
        overflow: hidden;
        padding-bottom: 50%;
        padding-top: 30px;
        position: relative;
        }

      #floating-panel{
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
         display: none;
      }
      @media print {
        #map1 {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
    </style>

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid"  style="margin:5px;">
      <div class="navbar-header" >
        <a class="navbar-brand" href="{{ route('home') }}">COMPANY</a>
      </div>
    <div class="nav navbar-nav navbar-right">
        <li style="font-size:15px;"><a href="{{ route('home') }}"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li style="font-size:15px;"><a href="{{ route('tasks.index') }}"> <span class="glyphicon glyphicon-search"></span> View List</a></li>
        <li style="font-size:15px;"><a href="/maps/mapview"> <span class="glyphicon glyphicon-road"></span> Navigate</a></li>
    </div>
    </div>
  </nav>

  <main>
      <div class="container" style="margin-bottom:100px;">
          @if(Session::has('flash_message'))
              <div class="alert alert-success">
                  {{ Session::get('flash_message') }}
              </div>
          @endif

          @yield('content')
      </div>
  </main>


</body>
</html>
