{extends file='success.tpl'}
<html>
<head>
    <title>{block name=title}Erreur{/block}</title>
    {block name=head}
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <style>
            #main,footer{ padding:1em }
        </style>
        <link rel="stylesheet" href="templates/style.css">
    {/block}
</head>
<body>
{block name=body}
    <p>Vous avez déjà déposé une candidature !</p>
    <p>Veuillez retourner à l'<a href='./'>Accueil</a></p>
{/block}
</body>
</html>
