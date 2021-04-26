<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>


<?if ($arResult["FORM_TYPE"] == "login"):?>
    <nav class="top_menu grey inline-block">
        <noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow" class="register"><?=GetMessage("AUTH_REGISTER")?></a></noindex>
        <a href="<?=$arParams["AUTH_URL"] . '?backurl=' . $arResult['BACKURL']?>" class="auth"><?=GetMessage('auth_form_comp_auth')?></a>
    </nav>
<? else: ?>
    <nav class="top_menu grey inline-block authorize">
        <span><?=GetMessage('MEETING_PHRASE')?>,</span>
        <a href="<?=$arResult["PROFILE_URL"]?>"><b class="user_name"><?=$arResult["USER_NAME"]?></b></a>
        <a href="<?=$arParams["PERSONAL_AREA"]?>"><?=GetMessage('PERSONAL_AREA')?></a>
        <a class="logout" href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
            "login",
            "logout",
            "register",
            "forgot_password",
            "change_password"));?>"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
    </nav>
<?endif?>