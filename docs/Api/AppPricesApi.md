# OpenAPI\Client\AppPricesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPricesGetInstance**](AppPricesApi.md#appPricesGetInstance) | **GET** /v1/appPrices/{id} | 



## appPricesGetInstance

> \OpenAPI\Client\Model\AppPriceResponse appPricesGetInstance($id, $fields_app_prices, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_prices = array('fields_app_prices_example'); // string[] | the fields to include for returned resources of type appPrices
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appPricesGetInstance($id, $fields_app_prices, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPricesApi->appPricesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_prices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPrices | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPriceResponse**](../Model/AppPriceResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

