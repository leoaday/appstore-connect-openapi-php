# OpenAPI\Client\AppPriceTiersApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPriceTiersGetCollection**](AppPriceTiersApi.md#appPriceTiersGetCollection) | **GET** /v1/appPriceTiers | 
[**appPriceTiersGetInstance**](AppPriceTiersApi.md#appPriceTiersGetInstance) | **GET** /v1/appPriceTiers/{id} | 
[**appPriceTiersPricePointsGetToManyRelated**](AppPriceTiersApi.md#appPriceTiersPricePointsGetToManyRelated) | **GET** /v1/appPriceTiers/{id}/pricePoints | 



## appPriceTiersGetCollection

> \OpenAPI\Client\Model\AppPriceTiersResponse appPriceTiersGetCollection($filter_id, $fields_app_price_tiers, $limit, $include, $fields_app_price_points, $limit_price_points)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPriceTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$fields_app_price_tiers = array('fields_app_price_tiers_example'); // string[] | the fields to include for returned resources of type appPriceTiers
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_price_points = array('fields_app_price_points_example'); // string[] | the fields to include for returned resources of type appPricePoints
$limit_price_points = 56; // int | maximum number of related pricePoints returned (when they are included)

try {
    $result = $apiInstance->appPriceTiersGetCollection($filter_id, $fields_app_price_tiers, $limit, $include, $fields_app_price_points, $limit_price_points);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPriceTiersApi->appPriceTiersGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **fields_app_price_tiers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPriceTiers | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_price_points** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPricePoints | [optional]
 **limit_price_points** | **int**| maximum number of related pricePoints returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPriceTiersResponse**](../Model/AppPriceTiersResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPriceTiersGetInstance

> \OpenAPI\Client\Model\AppPriceTierResponse appPriceTiersGetInstance($id, $fields_app_price_tiers, $include, $fields_app_price_points, $limit_price_points)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPriceTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_price_tiers = array('fields_app_price_tiers_example'); // string[] | the fields to include for returned resources of type appPriceTiers
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_price_points = array('fields_app_price_points_example'); // string[] | the fields to include for returned resources of type appPricePoints
$limit_price_points = 56; // int | maximum number of related pricePoints returned (when they are included)

try {
    $result = $apiInstance->appPriceTiersGetInstance($id, $fields_app_price_tiers, $include, $fields_app_price_points, $limit_price_points);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPriceTiersApi->appPriceTiersGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_price_tiers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPriceTiers | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_price_points** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPricePoints | [optional]
 **limit_price_points** | **int**| maximum number of related pricePoints returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPriceTierResponse**](../Model/AppPriceTierResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPriceTiersPricePointsGetToManyRelated

> \OpenAPI\Client\Model\AppPricePointsResponse appPriceTiersPricePointsGetToManyRelated($id, $fields_app_price_points, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPriceTiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_price_points = array('fields_app_price_points_example'); // string[] | the fields to include for returned resources of type appPricePoints
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appPriceTiersPricePointsGetToManyRelated($id, $fields_app_price_points, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPriceTiersApi->appPriceTiersPricePointsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_price_points** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPricePoints | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPricePointsResponse**](../Model/AppPricePointsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

