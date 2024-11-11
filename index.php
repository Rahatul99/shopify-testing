<?php

require_once('vendor/autoload.php');

$config = array(
    'ShopUrl' => '1axyxp-1g.myshopify.com',
    // 'AccessToken',
);

PHPShopify\ShopifySDK::config($config);


$shopify = new PHPShopify\ShopifySDK;

// $ar = [
//     'title' => 'update Testing Product',
//     'body-html' => '<p>This is testing description</p>',
//     'vendor' => "Hello world",
//     'tags' => 'code,test',
//     'variants' => [
//         'price' => '100.00',
//         'sku' => 'SKU001'
//     ]
// ];


//CRUD operation
// $response = $shopify->Product->post($ar);
// $response = $shopify->Product('9490545803560')->put($ar);
// $response = $shopify->Product('9490545803560')->get($ar);
$response = $shopify->Product('9490545803560')->delete();


// echo '<pre>';
// print_r($response);
// echo '</pre>';
