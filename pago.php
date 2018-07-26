<?php
if ($_POST['submitPayment']) {
    include("apiRedsys.php");  
    $miObj = new RedsysAPI;
 
    $amount = $_POST['amount'];    
    $url_tpv = "https://sis.redsys.es/sis/realizarPago";//https://sis.redsys.es/sis/realizarPago
    $version = "HMAC_SHA256_V1"; 
    $clave = "SHA-256"; //poner la clave SHA-256 facilitada por el banco
    $name = "res";
    $code = "12";
    $terminal = "1";
    date_default_timezone_set("America/Mexico_City");
    $order = date('ymdHis');
    $amount = $amount * 100;
    $currency = "978";
    $consumerlng = "001";
    $transactionType = "0";
    $urlMerchant = "http://your-domain.com/";
    $urlweb_ok = "http://your-domain.com/tpv_ok.php";
    $urlweb_ko = "http://your-domain.com/tpv_ko.php";
 
    $miObj->setParameter("DS_MERCHANT_AMOUNT", $amount);
    $miObj->setParameter("DS_MERCHANT_CURRENCY", $currency);
    $miObj->setParameter("DS_MERCHANT_ORDER", $order);
    $miObj->setParameter("DS_MERCHANT_MERCHANTCODE", $code);
    $miObj->setParameter("DS_MERCHANT_TERMINAL", $terminal);
    $miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE", $transactionType);
    $miObj->setParameter("DS_MERCHANT_MERCHANTURL", $urlMerchant);
    $miObj->setParameter("DS_MERCHANT_URLOK", $urlweb_ok);      
    $miObj->setParameter("DS_MERCHANT_URLKO", $urlweb_ko);
    $miObj->setParameter("DS_MERCHANT_MERCHANTNAME", $name); 
    $miObj->setParameter("DS_MERCHANT_CONSUMERLANGUAGE", $consumerlng);    
 
    $params = $miObj->createMerchantParameters();
    $signature = $miObj->createMerchantSignature($clave);
    ?>
    <form id="realizarPago" action="https://sis.redsys.es/sis/realizarPago" method="post">
        <input type='hidden' name='Ds_SignatureVersion' value='<?php echo $version; ?>'> 
        <input type='hidden' name='Ds_MerchantParameters' value='<?php echo $params; ?>'> 
        <input type='hidden' name='Ds_Signature' value='<?php echo $signature; ?>'> 
    </form>
    <script>
    $(document).ready(function () {
        $("#realizarPago").submit();
    });
    </script>
<?php
}  
?>