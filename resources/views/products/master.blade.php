<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product Store</title>

    {{--Configure the base url for the project--}}
    <base href="{{URL::asset('/')}}" target="blank">

    {{--url to styling resources--}}
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
</head>

<body>


<div class="container">
    @yield('content')



</div>
{{--Footer--}}
<div class="card">
    <div class="card-body bg-info" style="text-align: center">
       <p>Copyright &copy; CodeSoft <?php echo date('Y');?></p>
    </div>
</div>


<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

</body>
</html>