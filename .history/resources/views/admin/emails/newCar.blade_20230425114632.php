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

        .offerBtn{
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #ffffff;
            background-color: #db2d2e;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section id="sectionHeader">
        <div><a href="{{ url('') }}"><img id="logo" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a></div>
        <div style="dis
        "><button class="offerBtn">Faire une offre</button></div>
    </section>
</body>

</html>