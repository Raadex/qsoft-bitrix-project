<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
ShowMessage($arParams["~AUTH_RESULT"]);
ShowMessage($arResult['ERROR_MESSAGE']);
?>
<h3><?= GetMessage("AUTH_PLEASE_AUTH") ?></h3>
<form name="form_auth" method="post" action="<?=$arResult["AUTH_URL"]?>">
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<?if (strlen($arResult["BACKURL"]) > 0):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<?endif?>

	<table class="bx-auth-table">
		<tr>
			<td class="bx-auth-label"><?=GetMessage("AUTH_LOGIN")?></td>
			<td><input class="bx-auth-input form-control" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>" /></td>
		</tr>
		<tr>
			<td class="bx-auth-label"><?=GetMessage("AUTH_PASSWORD")?></td>
			<td><input type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" placeholder = "<?=GetMessage('PLACEHOLDER_PASS')?>" />
			</td>
		</tr>
<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
		<tr>
			<td></td>
			<td><input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" /><label for="USER_REMEMBER">&nbsp;<?=GetMessage("AUTH_REMEMBER_ME")?></label></td>
		</tr>
<?endif?>
		<tr>
			<td></td>
			<td class="authorize-submit-cell"><input type="submit" class="btn btn-primary" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" /></td>
		</tr>
	</table>
	<noindex>
		<p>
			<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
		</p>
	</noindex>
	<noindex>
		<p>
			<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><br />
			<?=GetMessage("AUTH_FIRST_ONE")?>
		</p>
	</noindex>

</form>
