<html>
<head>
    <title>{block name=title}Réussite{/block}</title>
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
    {block name=body}
    <p>Votre inscription s'est bien déroulée</p>
    <a href='login'>Se connecter</a>
    {/block}
</body>
</html>
