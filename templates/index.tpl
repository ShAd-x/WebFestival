{extends file='success.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
    <h1>Accueil</h1>
    <div class="accueil">
    <p>Bienvenue sur le site du festival d'Amiens !</p>
    {if (isset($_session_))}
        <p>Pas encore inscris au festival ? Inscrivez vous dès maintenant !
            <a href="candidature">S'inscrire au festival</a>
        </p>
    {else}
        <p class="index">
            Vous souhaitez participer au festival ? <a href="register">S'inscrire</a> ou <a href="login">Se connecter</a>
        </p>
    {/if}
    <br><br>
    {if (isset($_session_))}
    <p>Les candidatures déjà déposées ({count($candidature)} candidature(s)) :</p>
    <table style="border: 1px solid black">
    <thead><tr><th>Candidatures :</th></tr></thead>
    <tbody>
    <tr><td>Nom du groupe</td><td>Département</td><td>Style Musical</td><td>Année de création</td><td>Lien vers cette candidature</td></tr>
    {foreach from=$candidature item=candid}
        <tr><td>{$candid[0]}</td><td>{$candid[1]}</td><td>{$candid[4]}</td><td>{$candid[5]}</td><td><a href="./candidature-{$candid[0]}">Candidature {$candid[0]}</a></td></tr>
    {/foreach}
    </tbody>
    </table>
    {/if}
    </div>
</div>
{/block}