# OpenAPI\Client\RoutingAppCoveragesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**routingAppCoveragesCreateInstance**](RoutingAppCoveragesApi.md#routingAppCoveragesCreateInstance) | **POST** /v1/routingAppCoverages | 
[**routingAppCoveragesDeleteInstance**](RoutingAppCoveragesApi.md#routingAppCoveragesDeleteInstance) | **DELETE** /v1/routingAppCoverages/{id} | 
[**routingAppCoveragesGetInstance**](RoutingAppCoveragesApi.md#routingAppCoveragesGetInstance) | **GET** /v1/routingAppCoverages/{id} | 
[**routingAppCoveragesUpdateInstance**](RoutingAppCoveragesApi.md#routingAppCoveragesUpdateInstance) | **PATCH** /v1/routingAppCoverages/{id} | 



## routingAppCoveragesCreateInstance

> \OpenAPI\Client\Model\RoutingAppCoverageResponse routingAppCoveragesCreateInstance($routing_app_coverage_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoutingAppCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routing_app_coverage_create_request = new \OpenAPI\Client\Model\RoutingAppCoverageCreateRequest(); // \OpenAPI\Client\Model\RoutingAppCoverageCreateRequest | RoutingAppCoverage representation

try {
    $result = $apiInstance->routingAppCoveragesCreateInstance($routing_app_coverage_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingAppCoveragesApi->routingAppCoveragesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **routing_app_coverage_create_request** | [**\OpenAPI\Client\Model\RoutingAppCoverageCreateRequest**](../Model/RoutingAppCoverageCreateRequest.md)| RoutingAppCoverage representation |

### Return type

[**\OpenAPI\Client\Model\RoutingAppCoverageResponse**](../Model/RoutingAppCoverageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## routingAppCoveragesDeleteInstance

> routingAppCoveragesDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoutingAppCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->routingAppCoveragesDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling RoutingAppCoveragesApi->routingAppCoveragesDeleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## routingAppCoveragesGetInstance

> \OpenAPI\Client\Model\RoutingAppCoverageResponse routingAppCoveragesGetInstance($id, $fields_routing_app_coverages, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoutingAppCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_routing_app_coverages = array('fields_routing_app_coverages_example'); // string[] | the fields to include for returned resources of type routingAppCoverages
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->routingAppCoveragesGetInstance($id, $fields_routing_app_coverages, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingAppCoveragesApi->routingAppCoveragesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_routing_app_coverages** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type routingAppCoverages | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\RoutingAppCoverageResponse**](../Model/RoutingAppCoverageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## routingAppCoveragesUpdateInstance

> \OpenAPI\Client\Model\RoutingAppCoverageResponse routingAppCoveragesUpdateInstance($id, $routing_app_coverage_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RoutingAppCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$routing_app_coverage_update_request = new \OpenAPI\Client\Model\RoutingAppCoverageUpdateRequest(); // \OpenAPI\Client\Model\RoutingAppCoverageUpdateRequest | RoutingAppCoverage representation

try {
    $result = $apiInstance->routingAppCoveragesUpdateInstance($id, $routing_app_coverage_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingAppCoveragesApi->routingAppCoveragesUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **routing_app_coverage_update_request** | [**\OpenAPI\Client\Model\RoutingAppCoverageUpdateRequest**](../Model/RoutingAppCoverageUpdateRequest.md)| RoutingAppCoverage representation |

### Return type

[**\OpenAPI\Client\Model\RoutingAppCoverageResponse**](../Model/RoutingAppCoverageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

