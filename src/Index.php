<?php


require("TopClient.php");
date_default_timezone_set("PRC");
$obj = new mengsen\TopClient("", "");
$res = $obj->execute('jd.union.open.goods.jingfen.query', ['goodsReq' => ['eliteId' => 22]]);

echo '<pre>';
print_r($res);
