<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>{{{ $title or 'No Title' }}} | BFAdminCP</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">

            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{{ $error }}}</div>
            @endforeach

            @if(Session::has('signup_player_error'))
                <div class="alert alert-info">{{{ Session::get('signup_player_error') }}}</div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert alert-info">{{{ Session::get('notice') }}}</div>
            @endif

            <div class="header">Forgot My Password</div>
            {{ Form::open(array('action' => 'ADKGamers\\Webadmin\\Controllers\\UserController@do_forgot_password', 'method' => 'post')) }}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Input::old('email') }}" required />
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>

                    <p><a href="/login">Remember your login? Sign in</a></p>

                    <a href="/signup" class="text-center">Register a new membership</a>
                </div>
            {{ Form::close() }}
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

    </body>
</html>
