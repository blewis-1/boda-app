<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KCCA BODA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<style>
    body {
       font-family: 'Roboto', sans-serif;

    }
    a {
        text-decoration: none;
    }
    .position {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 20px;
        padding: 10px !important;
    }
</style>

<body class="container p-0 mb-3">
    <div class="conainer mb-3 border border-success border-3" >
        <nav class="navbar navbar-light bg-light navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/imgs/logo.png')}}">
                </a>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
<script>
    $("document").ready(function(){
        setTimeout(function(){
        $("div.position").remove();
        }, 3000 ); // 3 secs
    });


</script>

</html>
