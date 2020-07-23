# OpenAPI\Client\AppPreOrdersApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPreOrdersCreateInstance**](AppPreOrdersApi.md#appPreOrdersCreateInstance) | **POST** /v1/appPreOrders | 
[**appPreOrdersDeleteInstance**](AppPreOrdersApi.md#appPreOrdersDeleteInstance) | **DELETE** /v1/appPreOrders/{id} | 
[**appPreOrdersGetInstance**](AppPreOrdersApi.md#appPreOrdersGetInstance) | **GET** /v1/appPreOrders/{id} | 
[**appPreOrdersUpdateInstance**](AppPreOrdersApi.md#appPreOrdersUpdateInstance) | **PATCH** /v1/appPreOrders/{id} | 



## appPreOrdersCreateInstance

> \OpenAPI\Client\Model\AppPreOrderResponse appPreOrdersCreateInstance($app_pre_order_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_pre_order_create_request = new \OpenAPI\Client\Model\AppPreOrderCreateRequest(); // \OpenAPI\Client\Model\AppPreOrderCreateRequest | AppPreOrder representation

try {
    $result = $apiInstance->appPreOrdersCreateInstance($app_pre_order_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreOrdersApi->appPreOrdersCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_pre_order_create_request** | [**\OpenAPI\Client\Model\AppPreOrderCreateRequest**](../Model/AppPreOrderCreateRequest.md)| AppPreOrder representation |

### Return type

[**\OpenAPI\Client\Model\AppPreOrderResponse**](../Model/AppPreOrderResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreOrdersDeleteInstance

> appPreOrdersDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appPreOrdersDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppPreOrdersApi->appPreOrdersDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appPreOrdersGetInstance

> \OpenAPI\Client\Model\AppPreOrderResponse appPreOrdersGetInstance($id, $fields_app_pre_orders, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_pre_orders = array('fields_app_pre_orders_example'); // string[] | the fields to include for returned resources of type appPreOrders
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appPreOrdersGetInstance($id, $fields_app_pre_orders, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreOrdersApi->appPreOrdersGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_pre_orders** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreOrders | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreOrderResponse**](../Model/AppPreOrderResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreOrdersUpdateInstance

> \OpenAPI\Client\Model\AppPreOrderResponse appPreOrdersUpdateInstance($id, $app_pre_order_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_pre_order_update_request = new \OpenAPI\Client\Model\AppPreOrderUpdateRequest(); // \OpenAPI\Client\Model\AppPreOrderUpdateRequest | AppPreOrder representation

try {
    $result = $apiInstance->appPreOrdersUpdateInstance($id, $app_pre_order_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreOrdersApi->appPreOrdersUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_pre_order_update_request** | [**\OpenAPI\Client\Model\AppPreOrderUpdateRequest**](../Model/AppPreOrderUpdateRequest.md)| AppPreOrder representation |

### Return type

[**\OpenAPI\Client\Model\AppPreOrderResponse**](../Model/AppPreOrderResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

