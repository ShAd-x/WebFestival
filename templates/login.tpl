{extends file='success.tpl'}
{block name=title}Login{/block}
{block name=body}
<div id='main'>
<h1>Login</h1>
<form class="pure-form pure-form-stacked" action="login" method="post">
    <fieldset>
        <legend>Connexion</legend>

        <label for="stacked-email">Email :</label>
        <input type="email" value="{$valeurs.mail|escape|default:''}" id="stacked-email" name="mail" placeholder="Email"/>
        <span>{$messages.mail|escape|default:''}</span>

        <label for="stacked-password">Mot de passe :</label>
        <input type="password" value="{$valeurs.mdp|escape|default:''}" id="stacked-password" name="mdp" placeholder="Mot de passe"/>
        <span>{$messages.mdp|escape|default:''}</span>
        <br><br>
        <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
    </fieldset>
</form>
</div>
{/block}