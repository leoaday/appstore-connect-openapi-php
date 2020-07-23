# OpenAPI\Client\InAppPurchasesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inAppPurchasesGetInstance**](InAppPurchasesApi.md#inAppPurchasesGetInstance) | **GET** /v1/inAppPurchases/{id} | 



## inAppPurchasesGetInstance

> \OpenAPI\Client\Model\InAppPurchaseResponse inAppPurchasesGetInstance($id, $fields_in_app_purchases, $include, $limit_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InAppPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_in_app_purchases = array('fields_in_app_purchases_example'); // string[] | the fields to include for returned resources of type inAppPurchases
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$limit_apps = 56; // int | maximum number of related apps returned (when they are included)

try {
    $result = $apiInstance->inAppPurchasesGetInstance($id, $fields_in_app_purchases, $include, $limit_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InAppPurchasesApi->inAppPurchasesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_in_app_purchases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type inAppPurchases | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **limit_apps** | **int**| maximum number of related apps returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\InAppPurchaseResponse**](../Model/InAppPurchaseResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

