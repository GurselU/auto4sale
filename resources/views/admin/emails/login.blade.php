<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Link</title>
</head>
<body>
    <p>Bonjour,</p>
    <p>Veuillez cliquer sur le lien ci-dessous pour vous connecter :</p>
    <p>Ce lien n'est valide que pendant une heure</p>

    <p><a href="{{ route('login.with.magic.link', $magicLink) }}">Lien magique</a></p>
    <p>Cordialement,</p>
    <p>L'équipe</p>
</body>
</html>
