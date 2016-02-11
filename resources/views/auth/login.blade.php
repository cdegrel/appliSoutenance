<html lang="fr">

<head>
    <title>Connection</title>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">

    {!! Html::style('assets/css/auth.css') !!}
    {!! Html::script('assets/js/jquery.js') !!}

</head>
<body>
<div id="container">
    <div id="connectionContainer">
        <ul id="diaporama">
            <li class="" style="background: url(../public/assets/img/auth/306638.jpg) 50% 50%; background-size: cover; background-attachment:fixed;"></li>
            <li style="background: url(../public/assets/img/auth/f1606-5922.jpg) 50% 50%; background-size: cover; background-attachment:fixed;"></li>
            <li style="background: url(../public/assets/img/auth/place-10.jpg) 50% 50%; background-size: cover; background-attachment:fixed;"></li>
            <li style="background: url(../public/assets/img/auth/Eurockeennes-1.jpg) 50% 50%; background-size: cover; background-attachment:fixed;"></li>
            <li style="background: url(../public/assets/img/auth/place-10.jpg) 50% 50%; background-size: cover; background-attachment:fixed;"></li>

        </ul>
        <div id="loginConntainer">
            <div class="positionBlur">
                <div class="blurLogin">
                </div>
                <div class="gradiente">
                    <div class="topConnection">
                        <div class="logoIUT">
                            <div class="imgLogo"></div>
                            <div class="textLogo">
                                <div class="textLogoContainer">
                                    <p><span>IUT</span><br>Belfort-<br>Montbéliard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottomConnection">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="inputLog {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="imginput imgUser"></div>
                                    <input type="email" placeholder="email" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="inputLog {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="imginput imgPassword"></div>
                                    <input type="password" placeholder="password" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="rstCo">
                                    <input type="checkbox" name="remember">
                                    <label>Rester connecté</label>
                                </div>

                                <div class="submitLog">
                                    <input type="submit" value="Connection">
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{!! Html::script('assets/js/auth.js') !!}
</body>

</html>