<?
/*
 * This function returns if number is GLOBE or SMART
 * based on this: http://news.txtbuff.com/mobile-number-prefixes-globe-smart-and-sun-cellular/
 * It is simplified SUN is also Smart, and TM is also Globe.
 */

function determine_network($mobileNumber)
{
    // remove the hyphens :S
    $mobileNumber = str_replace("-", "", $mobileNumber);

    $globe_expression = "/^(639|09)(17|16|27|26|15|06|05|35|37|94|96|97|36)[0-9]{7,7}$/";

    // 22,23,32 are Sun
    $smart_expression = "/^(639|09)(18|19|20|10|21|28|29|09|08|07|38|99|12|30|39|98|89|48|49|47|46|22|23|32)[0-9]{7,7}$/";

    if( preg_match($smart_expression, $mobileNumber) )
        return "SMART";
    elseif ( preg_match($globe_expression, $mobileNumber) )
        return "GLOBE";

    return null;
}
?>

