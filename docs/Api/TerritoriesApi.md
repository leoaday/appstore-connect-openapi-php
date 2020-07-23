# OpenAPI\Client\TerritoriesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**territoriesGetCollection**](TerritoriesApi.md#territoriesGetCollection) | **GET** /v1/territories | 



## territoriesGetCollection

> \OpenAPI\Client\Model\TerritoriesResponse territoriesGetCollection($fields_territories, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TerritoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->territoriesGetCollection($fields_territories, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TerritoriesApi->territoriesGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\TerritoriesResponse**](../Model/TerritoriesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

