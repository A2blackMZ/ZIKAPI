<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de votre compte</title>
</head>
<body>
    <h1>Bonjour,</h1>
    <p>Merci pour votre inscription. Pour confirmer votre compte, veuillez saisir le code suivant sur notre plateforme :</p>
    <p><strong>Code de confirmation : {{ $code }}</strong></p>
    <p>Si vous n'avez pas initié cette demande, vous pouvez ignorer cet email.</p>
    <p>Cordialement,</p>
    <p>L'équipe {{ config('app.name') }}</p>
</body>
</html>
