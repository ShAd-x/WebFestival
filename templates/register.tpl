{extends file='success.tpl'}
{block name=title}Inscription{/block}
{block name=body}
<div id='main'>
<h1>Création de compte</h1>
<form class="pure-form pure-form-stacked" action="register" method="post">
    <fieldset>
        <legend>Inscription</legend>

        <label for="name">Nom :</label>
        <input type="text" value="{$valeurs.nom|escape|default:''}" id="name" name="nom" placeholder="Nom"/>
        <span>{$messages.nom|escape|default:''}</span>

        <label for="prenom">Prenom :</label>
        <input type="text" value="{$valeurs.prenom|escape|default:''}" id="prenom" name="prenom" placeholder="Prénom"/>
        <span>{$messages.prenom|escape|default:''}</span>

        <label for="stacked-email">Email :</label>
        <input type="email" value="{$valeurs.mail|escape|default:''}" id="stacked-email" name="mail" placeholder="Email"/>
        <span>{$messages.mail|escape|default:''}</span>

        <label for="stacked-password">Mot de passe :</label>
        <input type="password" value="{$valeurs.mdp|escape|default:''}" id="stacked-password" name="mdp" placeholder="Mot de passe"/>
        <span>{$messages.mdp|escape|default:''}</span>

        <br><br>
        <button type="submit" class="pure-button pure-button-primary">Inscription</button>
    </fieldset>
</form>
</div>
{/block}