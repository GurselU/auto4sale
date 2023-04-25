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
            text-decoration: none;
        }

        #sectionPicture {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        #sectionPicture>div {
            width: 300px;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            color: #db2d2e;
        }

        table {
            border: 2px solid black;
        }

        @media screen and (min-width: 800px) {
            body {
                margin: auto;
                width: 800px;
                margin-top: 30px;
                margin-bottom: 50px;
            }
        }
    </style>
</head>

<body>
    <section id="sectionHeader">
        <div><a href="{{ url('') }}"><img id="logo" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a></div>
        <div style="display: flex; align-items: center;"><a href="{{ route('login.with.magic.link', $magicLink) }}" class="offerBtn">Faire une offre</a></div>
    </section>

    <h2 style="color: #363636; margin-bottom: 30px;">Nouveau véhicule disponible sur notre plateforme Auto4Sale. Cliquez sur le bouton 'Faire une offre' pour la description détaillé du véhicule et pour pouvoir faire une offre.</h2>

    <h3 style="color: #db2d2e;">{{$car->mark}} {{$car->model}}</h3>
    <h4 style="color: #363636;">{{$car->miniDescription}}</h4>

    <section id="sectionPicture">
        <div><img style="width: 100%;" src="{{asset($pictures[0]->location)}}"></div>
        <div><img style="width: 100%;" src="{{asset($pictures[1]->location)}}"></div>
        <div><img style="width: 100%;" src="{{asset($pictures[2]->location)}}"></div>
        <div><img style="width: 100%;" src="{{asset($pictures[3]->location)}}"></div>
    </section>

    <section>
        <table style="width: 100%;">
            <tr>
                <th>Marque</th>
                <td>{{$car->mark}}</td>
            </tr>
            <tr>
                <th>Modèle</th>
                <td>{{$car->model}}</td>
            </tr>
            <tr>
                <th>1ère immatriculation</th>
                <td>{{$car->registration}}</td>
            </tr>
            <tr>
                <th>Kilométrage</th>
                <td>{{$car->mileage}}km</td>
            </tr>
            <tr>
                <th>Transmission</th>
                <td>{{$car->gearbox->name}}</td>
            </tr>
            <tr>
                <th>Carburant</th>
                <td>{{$car->emissionClass->name}}</td>
            </tr>
            <tr>
                <th>Puissance</th>
                <td>{{ floor($car->power/1.26) }}kw/{{ $car->power }}ch</td>
            </tr>
            <tr>
                <th>Cylindrée</th>
                <td>{{$car->engineSize}}cm³</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{$car->categorie->name}}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{$car->chassi->name}}</td>
            </tr>
        </table>

        <h4 style="color: #db2d2e;">Description</h4>
        <div style="color: #363636;">{{$car->description}}</div>
    </section>
    <div style="display: flex; justify-content: end; margin-top: 30px;"><a href="{{ route('login.with.magic.link', $magicLink) }}" class="offerBtn">Faire une offre</a></div>

    <footer style="height: 100px; background-color: f6f6f6;">
        <div>©Copyright 2023 GRS Network srl</div>
        <div>+32491767728</div>
    </footer>
</body>

</html>