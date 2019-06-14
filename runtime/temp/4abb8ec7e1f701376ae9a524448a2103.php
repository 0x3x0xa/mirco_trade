<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/huatong.com/application/index/view/user/paysapi.html";i:1560321057;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PaysApi </title>
</head>
<body>

    <form style='display:none;' id='formpay' name='formpay' method='post' action='https://pay.paysapi.com'>
        <input name='goodsname' id='goodsname' type='text' value= "<?php echo $returndata['goodsname']; ?>" />
        <input name='istype' id='istype' type='text' value="<?php echo $returndata['istype']; ?>" />
        <input name='key' id='key' type='text' value="<?php echo $returndata['key']; ?>"/>
        <input name='notify_url' id='notify_url' type='text' value="<?php echo $returndata['notify_url']; ?>"/>
        <input name='orderid' id='orderid' type='text' value="<?php echo $returndata['orderid']; ?>"/>
        <input name='orderuid' id='orderuid' type='text' value="<?php echo $returndata['orderuid']; ?>"/>
        <input name='price' id='price' type='text' value="<?php echo $returndata['price']; ?>"/>
        <input name='return_url' id='return_url' type='text' value="<?php echo $returndata['return_url']; ?>"/>
        <input name='uid' id='uid' type='text' value="<?php echo $returndata['uid']; ?>"/>
        <input type='submit' id='submit_data'>
    </form>

<!-- Jquery files -->
<script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$().ready(function(){
   $("#formpay").submit();
});
</script>    


</body>
</html>