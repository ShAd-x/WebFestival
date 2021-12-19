{extends file='success.tpl'}
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
    {block name=body}
    <br><br>
    <table style="border: 1px solid black">
    <thead><tr><th>Fiche du groupe {$nom} :</th></tr></thead>
    <tbody>
    <tr><td style="border: 1px solid black">Nom du groupe</td>
        <td style="border: 1px solid black">Département</td>
        <td style="border: 1px solid black">Style Musical</td>
        <td style="border: 1px solid black">Année de création</td>
        <td style="border: 1px solid black">Présentation</td>
        <td style="border: 1px solid black">Expériences scéniques</td></tr>
    <tr><td>{$candidature[0]}</td>
        <td>{$candidature[1]}</td>
        <td>{$candidature[4]}</td>
        <td>{$candidature[5]}</td>
        <td>{$candidature[6]}</td>
        <td>{$candidature[7]}</td></tr>

    <tr><td style="border: 1px solid black">Site</td>
        <td style="border: 1px solid black">SoundCloud</td>
        <td style="border: 1px solid black">Youtube</td></tr>
    <tr><td>{$candidature[8]}</td>
        <td>{$candidature[9]}</td>
        <td>{$candidature[10]}</td></tr>

    <tr><td style="border: 1px solid black">Statut associatif</td>
        <td style="border: 1px solid black">Sacem</td>
        <td style="border: 1px solid black">Producteur</td></tr>
    <tr><td>{$candidature[19]}</td>
        <td>{$candidature[20]}</td>
        <td>{$candidature[21]}</td></tr>

    <tr><td style="border: 1px solid black">MP3_1</td>
        <td style="border: 1px solid black">MP3_2</td>
        <td style="border: 1px solid black">MP3_3</td>
        <td style="border: 1px solid black">Images_1</td>
        <td style="border: 1px solid black">Images_2</td></tr>
    <tr><td>{$candidature[22]}</td>
        <td>{$candidature[23]}</td>
        <td>{$candidature[24]}</td>
        <td>{$candidature[26]}</td>
        <td>{$candidature[27]}</td></tr>

    <tr><td style="border: 1px solid black">Dossier de presse</td></tr>
    <tr><td>{$candidature[25]}</td></tr>

    <tr><td style="border: 1px solid black">Fiche technique</td>
        <td style="border: 1px solid black">Document SACEM</td></tr>
    <tr><td>{$candidature[28]}</td>
        <td>{$candidature[29]}</td></tr>
    </tbody>
    </table>
        <br><br>
    <a href="./supcandid-{$nom}">Supprimer cette candidature</a>
    {/block}
</body>
</html>
