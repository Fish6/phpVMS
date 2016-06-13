<html><body>
<?
require_once ("recaptchalib.php");

// get a key at http://www.google.com/recaptcha/mailhide/apikey
$mailhide_pubkey = '6LfVgCITAAAAADU5EhQK-QrmZmgOYSbK7YR5JQoh';
$mailhide_privkey = '6LfVgCITAAAAAMIMBAwaBmge2M8SzHxeXzVj2K8g';

?>

The Mailhide version of example@example.com is
<? echo recaptcha_mailhide_html ($mailhide_pubkey, $mailhide_privkey, "example@example.com"); ?>. <br>

The url for the email is:
<? echo recaptcha_mailhide_url ($mailhide_pubkey, $mailhide_privkey, "example@example.com"); ?> <br>

</body></html>
