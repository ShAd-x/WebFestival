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
<div id='main'>
<br><br>
    <p>Les candidatures déjà déposées ({count($candidature)} candidature(s)) :</p>
    <table style="border: 1px solid black">
    <thead><tr><th>Candidatures :</th></tr></thead>
    <tbody>
    <tr><td>Nom du groupe</td>
        <td>Département</td>
        <td>Style Musical</td>
        <td>Année de création</td>
        <td>Présentation</td>
        <td>Lien vers cette candidature</td></tr>
    {foreach from=$candidature item=candid}
        <tr><td>{$candid[0]}</td>
            <td>{$candid[1]}</td>
            <td>{$candid[4]}</td>
            <td>{$candid[5]}</td>
            <td>{$candid[6]}</td>
            <td><a href="./candidature-{$candid[0]}">Candidature {$candid[0]}</a></td></tr>
    {/foreach}
    </tbody>
    </table>
</div>
</body>
{/block}
</html>
