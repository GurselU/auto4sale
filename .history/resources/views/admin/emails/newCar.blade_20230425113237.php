<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #sectionHeader {
            display: flex;
            justify-content: space-between;
            height: 50px;
            margin-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }

        #logo{
            height: 100%;
        }
    </style>
</head>

<body>
    <section id="sectionHeader">
        <div><a href="{{ url('') }}"><img id="logo" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a></div>
        <div style="vertical-align: middle; height: 100%;"><span>Faire une offre</span></div>
    </section>
</body>

</html>