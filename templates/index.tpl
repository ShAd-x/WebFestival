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
    </div>
</div>
{/block}