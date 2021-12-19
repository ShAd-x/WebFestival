{extends file='success.tpl'}
<html>
<head>
    <title>{block name=title}Listes des membres :{/block}</title>
    {block name=head}
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <style>
            #main,footer{ padding:1em }
        </style>
        <link rel="stylesheet" href="templates/style.css">
    {/block}
</head>
{block name=body}
<body>
    <br><br>
    <p>Les membres inscrit ({count($membres)} membres(s)) :</p>
    <table style="border: 1px solid black">
        <thead><tr><th>Membres :</th></tr></thead>
        <tbody>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Mail</td>
            <td>Rôle</td>
            <td>ID de groupe</td>
            <td>Adresse</td>
            <td>Code postal</td>
            <td>Téléphone</td>
            <td>Instruments</td>
        </tr>
        {foreach from=$membres item=membre}
        <tr>
            <td>{$membre[5]}</td>
            <td>{$membre[6]}</td>
            <td>{$membre[3]}</td>
            <td>{$membre[1]}</td>
            <td>{$membre[2]}</td>
            <td>{$membre[7]}</td>
            <td>{$membre[8]}</td>
            <td>{$membre[9]}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</body>
{/block}
</html>
