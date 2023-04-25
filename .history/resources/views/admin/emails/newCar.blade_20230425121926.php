<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 20px;
        }

        #sectionHeader {
            display: flex;
            justify-content: space-between;
            height: 50px;
            margin-bottom: 30px;
        }

        #logo {
            height: 100%;
        }

        .offerBtn {
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #ffffff;
            background-color: #db2d2e;
            font-weight: bold;
            border: none;
        }

        #sectionPicture{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        #sectionPicture > div{
            width: 300px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <section id="sectionHeader">
        <div><a href="{{ url('') }}"><img id="logo" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a></div>
        <div style="display: flex; align-items: center;"><button class="offerBtn">Faire une offre</button></div>
    </section>

    <h2 style="color: #363636; margin-bottom: 30px;">Nouveau véhicule disponible sur notre plateforme Auto4Sale</h2>

    <h3 style="color: #db2d2e;">{{$car->mark}} {{$car->model}}</h3>
    <h4 style="color: #363636;">{{$car->miniDescription}}</h4>

    <section id="sectionPicture">
        <div><img src="{{asset($picture->location)}}"></div>
        <div>test</div>
        <div>test</div>
        <div>test</div>
    </section>




</body>

</html>