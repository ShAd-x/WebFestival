<html>
<head>
    <title>{block name=title}Détails groupe {$nom}{/block}</title>
    {block name=head}
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    {/block}
</head>
<body>
    {block name=menu}
    <div class="index">
        <a href='./'>Accueil</a>
        {if (isset($_session_))}
            <a href='candidature'>Candidature</a>
            <a href='logout'>Déconnexion</a>
        {else}
            <a href='register'>Inscription</a>
            <a href='login'>Connexion</a>
        {/if}
    </div>
    {/block}
    <br><br>
    {block name=body}
    <table style="border: 1px solid black">
    <thead><tr><th>Fiche du groupe {$nom} :</th></tr></thead>
    <tbody>
    <tr><td>Nom du groupe</td><td>Département</td><td>Style Musical</td><td>Année de création</td><td>Présentation</td><td>Expériences scéniques</td></tr>
    <tr><td>{$candidature[0]}</td><td>{$candidature[1]}</td><td>{$candidature[4]}</td><td>{$candidature[5]}</td><td>{$candidature[6]}</td><td>{$candidature[7]}</td></tr>
    <tr><td>Site</td><td>SoundCloud</td><td>Youtube</td></tr>
    <tr><td>{$candidature[8]}</td><td>{$candidature[9]}</td><td>{$candidature[10]}</td></tr>
    </tbody>
    </table>
    {/block}
</body>
</html>
