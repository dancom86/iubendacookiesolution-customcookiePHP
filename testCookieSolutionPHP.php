<?php /* 
      
      FULL EXAMPLE of a PHP PAGE 
      It installs a custom cookie named "user" with a value of "John Doe", only if the iubenda's technical cookie contains:
      2:true or number_of_the_Category:true if per purpose consent is enabled or
      consent:true if per purpose is not enabled
      

      $consentValue contains the name of the iubenda's technical cookie
      $stringToSearch we use it to search if a category is accepted, or in general, if the user accepted the installation of cookies

      */

?>

<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";

?>
<html>
<head>
<script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"reloadOnConsent":true,"consentOnLinkAndButton":false,"whitelabel":false,"lang":"it","siteId":XXXXXX,"perPurposeConsent":true,"purposes":"1,2,3,4,5","googleAdditionalConsentMode":true,"enableTcf":true,"cookiePolicyId":XXXXXXXXX, "banner":{ "slideDown":false,"closeButtonDisplay":false,"position":"bottom","acceptButtonDisplay":true,"customizeButtonDisplay":true, "rejectButtonDisplay":true }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
</head>>
<body>

<?php


$consentValue=$_COOKIE["_iub_cs-CookiePolicyId"]; //here you should insert the name of your iubenda technical cookie
$stringToSearch='"2":true'; //String to search within the iubenda consent cookie, it should contain "consent":true or "number_of_category":true/false

if (strpos($consentValue,$stringToSearch)==true){ //if the user accepted the installation of cookies or the category then I install the custom cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    echo "cookie released";
} else {echo "cookie not released";}
?>

</body>
</html>