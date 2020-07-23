# OpenAPI\Client\AppPricePointsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPricePointsGetCollection**](AppPricePointsApi.md#appPricePointsGetCollection) | **GET** /v1/appPricePoints | 
[**appPricePointsGetInstance**](AppPricePointsApi.md#appPricePointsGetInstance) | **GET** /v1/appPricePoints/{id} | 
[**appPricePointsTerritoryGetToOneRelated**](AppPricePointsApi.md#appPricePointsTerritoryGetToOneRelated) | **GET** /v1/appPricePoints/{id}/territory | 



## appPricePointsGetCollection

> \OpenAPI\Client\Model\AppPricePointsResponse appPricePointsGetCollection($filter_price_tier, $filter_territory, $fields_app_price_points, $limit, $include, $fields_territories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPricePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_price_tier = array('filter_price_tier_example'); // string[] | filter by id(s) of related 'priceTier'
$filter_territory = array('filter_territory_example'); // string[] | filter by id(s) of related 'territory'
$fields_app_price_points = array('fields_app_price_points_example'); // string[] | the fields to include for returned resources of type appPricePoints
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories

try {
    $result = $apiInstance->appPricePointsGetCollection($filter_price_tier, $filter_territory, $fields_app_price_points, $limit, $include, $fields_territories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPricePointsApi->appPricePointsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_price_tier** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;priceTier&#39; | [optional]
 **filter_territory** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;territory&#39; | [optional]
 **fields_app_price_points** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPricePoints | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]

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


## appPricePointsGetInstance

> \OpenAPI\Client\Model\AppPricePointResponse appPricePointsGetInstance($id, $fields_app_price_points, $include, $fields_territories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPricePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_price_points = array('fields_app_price_points_example'); // string[] | the fields to include for returned resources of type appPricePoints
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories

try {
    $result = $apiInstance->appPricePointsGetInstance($id, $fields_app_price_points, $include, $fields_territories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPricePointsApi->appPricePointsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_price_points** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPricePoints | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPricePointResponse**](../Model/AppPricePointResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPricePointsTerritoryGetToOneRelated

> \OpenAPI\Client\Model\TerritoryResponse appPricePointsTerritoryGetToOneRelated($id, $fields_territories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPricePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories

try {
    $result = $apiInstance->appPricePointsTerritoryGetToOneRelated($id, $fields_territories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPricePointsApi->appPricePointsTerritoryGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]

### Return type

[**\OpenAPI\Client\Model\TerritoryResponse**](../Model/TerritoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

