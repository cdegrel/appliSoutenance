<!DOCTYPE html>
<html>
<head>
    <title>Page inaccessible</title>
    <meta http-equiv="refresh" content="3;url={!! url('/') !!}">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
            background-color: rgba(41, 40, 40,1);
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
            color: #C5383E;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Vous n'avez pas encore voté
		<p>Retour au planning dans <span id="timer">3</span> sec</p>
        </div>
    </div>
</div>

<script type="text/javascript">
	var tmp = 3;
	setInterval(function(){
		tmp--;
		document.getElementById('timer').innerHTML = tmp;
	},1100);
</script>
</body>
</html>
