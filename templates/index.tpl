{extends file='success.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
    <h1>Accueil</h1>
    <p>Bienvenue sur le site du festival d'Amiens !</p>
    {if (isset($_SESSION['user']))}
        <p>Déjà inscris sur le site ? Inscrivez vous au festival !
            <a href="#">S'inscrire au festival</a>
        </p>
    {else}
        <p>Vous souhaitez participer au festival ?
            <a href="register">S'inscrire</a>
            ou
            <a href="login">Se connecter</a>
        </p>
    {/if}
</div>
{/block}