{extends file='success.tpl'}
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
{block name=body}
    <h1>Merci de participer au Festival !</h1>
    <p>Votre groupe à bien été inscris au Festival !</p>
    <a href='./'>Accueil</a>
{/block}
</body>
</html>
