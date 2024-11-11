<?php

require_once('vendor/autoload.php');

$config = array(
    'ShopUrl' => '1axyxp-1g.myshopify.com',
    'AccessToken' => ,
);

PHPShopify\ShopifySDK::config($config);
$shopify = new PHPShopify\ShopifySDK;


//-------------------------------CREATE PRODUCT---------------------//
// $graphQLCreateProduct = <<<Query
// mutation createProductMetafields(\$input: ProductInput!) {
//   productCreate(input: \$input) {
//     product {
//       id
//       title
//       descriptionHtml
//       tags
//     }
//     userErrors {
//       message
//       field
//     }
//   }
// }
// Query;

// $variables = [
//     "input" => [
//         "title" => "tik tak toe GraphQL Basic Testing Product",
//         "descriptionHtml" => "<p>This is a basic product created with GraphQL without variants.</p>",
//         "vendor" => "Hello World Vendor",
//         "tags" => ["code", "test"]
//     ]
// ];

// $response = $shopify->GraphQL->post($graphQLCreateProduct, null, null, $variables);


//-------------------------------UPDATE PRODUCT---------------------//
// $graphQLUpdateProduct = <<<Query
// mutation updateProduct(\$input: ProductInput!) {
//   productUpdate(input: \$input) {
//     product {
//       id
//       title
//       descriptionHtml
//       tags
//     }
//     userErrors {
//       message
//       field
//     }
//   }
// }
// Query;

// $variables = [
//     "input" => [
//         "id" => "gid://shopify/Product/9490842190120",
//         "title" => "Updated GraphQL Product Title",
//         "descriptionHtml" => "<p>This is an updated description for the product.</p>",
//         "tags" => ["updated", "tag"]
//     ]
// ];

// $response = $shopify->GraphQL->post($graphQLUpdateProduct, null, null, $variables);

//-------------------------------GET SINGLE PRODUCT---------------------//
// $graphQLQuery = <<<Query
// query GetProductAndFirst250Variants(\$id: ID!) {
//   product(id: \$id) {
//     id
//     title
//     descriptionHtml
//     vendor
//     tags
//     status
//     createdAt
//     updatedAt
//     variants(first: 250) {
//       edges {
//         cursor
//         node {
//           id
//           title
//           price
//           sku
//           availableForSale
//           inventoryQuantity
//         }
//       }
//     }
//   }
// }
// Query;

// $variables = [
//     "id" => "gid://shopify/Product/9490689458472"
// ];
// $response = $shopify->GraphQL->post($graphQLQuery, null, null, $variables);

//-------------------------------GET ALL PRODUCT---------------------//
// $graphQLQuery = <<<Query
// query GetAllProductsAndVariants(\$cursor: String) {
//   products(first: 50, after: \$cursor) {
//     edges {
//       node {
//         id
//         title
//         descriptionHtml
//         vendor
//         tags
//         status
//         createdAt
//         updatedAt
//         variants(first: 250) {
//           edges {
//             node {
//               id
//               title
//               price
//               sku
//               availableForSale
//               inventoryQuantity
//             }
//           }
//         }
//       }
//       cursor
//     }
//     pageInfo {
//       hasNextPage
//       endCursor
//     }
//   }
// }
// Query;

// $variables = ["cursor" => null];
// $response = $shopify->GraphQL->post($graphQLQuery, null, null, $variables);


//-------------------------------DELETE PRODUCT---------------------//
// $graphQLDeleteProduct = <<<Query
// mutation DeleteProduct(\$id: ID!) {
//   productDelete(input: {id: \$id}) {
//     deletedProductId
//     userErrors {
//       field
//       message
//     }
//   }
// }
// Query;

// $variables = ["id" => "gid://shopify/Product/9490574508328"];

// $response = $shopify->GraphQL->post($graphQLDeleteProduct, null, null, $variables);

// // Check if the product was deleted successfully
// if (isset($response['data']['productDelete']['deletedProductId'])) {
//     echo "Product with ID " . $response['data']['productDelete']['deletedProductId'] . " has been deleted.";
// } else {
//     echo "Failed to delete product. Errors: ";
//     print_r($response['data']['productDelete']['userErrors']);
// }


echo '<pre>';
print_r($response);
echo '</pre>';
?>











<!-- 
// id
// if (isset($response['data']['productCreate']['product']['id'])) {
//     $productId = $response['data']['productCreate']['product']['id'];
//     echo "New Product ID: " . $productId . "\n";
// }

// $graphQLCreateProduct = <<<Query
    // mutation {
    // productCreate(input: {
    // title: "hello GraphQL Basic Testing Product" ,
    // descriptionHtml: "<p>This is a basic product created with GraphQL without variants.</p>" ,
    // vendor: "Hello World Vendor" ,
    // tags: ["code", "test" ]
    // }) {
    // product {
    // id
    // title
    // descriptionHtml
    // tags
    // }
    // }
    // }
    // Query;

    // $response=$shopify->GraphQL->post($graphQLCreateProduct);
    // Define the mutation -->