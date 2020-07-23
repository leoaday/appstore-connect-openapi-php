# OpenAPI\Client\DevicesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**devicesCreateInstance**](DevicesApi.md#devicesCreateInstance) | **POST** /v1/devices | 
[**devicesGetCollection**](DevicesApi.md#devicesGetCollection) | **GET** /v1/devices | 
[**devicesGetInstance**](DevicesApi.md#devicesGetInstance) | **GET** /v1/devices/{id} | 
[**devicesUpdateInstance**](DevicesApi.md#devicesUpdateInstance) | **PATCH** /v1/devices/{id} | 



## devicesCreateInstance

> \OpenAPI\Client\Model\DeviceResponse devicesCreateInstance($device_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_create_request = new \OpenAPI\Client\Model\DeviceCreateRequest(); // \OpenAPI\Client\Model\DeviceCreateRequest | Device representation

try {
    $result = $apiInstance->devicesCreateInstance($device_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->devicesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_create_request** | [**\OpenAPI\Client\Model\DeviceCreateRequest**](../Model/DeviceCreateRequest.md)| Device representation |

### Return type

[**\OpenAPI\Client\Model\DeviceResponse**](../Model/DeviceResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## devicesGetCollection

> \OpenAPI\Client\Model\DevicesResponse devicesGetCollection($filter_name, $filter_platform, $filter_status, $filter_udid, $filter_id, $sort, $fields_devices, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_name = array('filter_name_example'); // string[] | filter by attribute 'name'
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_status = array('filter_status_example'); // string[] | filter by attribute 'status'
$filter_udid = array('filter_udid_example'); // string[] | filter by attribute 'udid'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_devices = array('fields_devices_example'); // string[] | the fields to include for returned resources of type devices
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->devicesGetCollection($filter_name, $filter_platform, $filter_status, $filter_udid, $filter_id, $sort, $fields_devices, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->devicesGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;name&#39; | [optional]
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_status** | [**string[]**](../Model/string.md)| filter by attribute &#39;status&#39; | [optional]
 **filter_udid** | [**string[]**](../Model/string.md)| filter by attribute &#39;udid&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_devices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type devices | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\DevicesResponse**](../Model/DevicesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## devicesGetInstance

> \OpenAPI\Client\Model\DeviceResponse devicesGetInstance($id, $fields_devices)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_devices = array('fields_devices_example'); // string[] | the fields to include for returned resources of type devices

try {
    $result = $apiInstance->devicesGetInstance($id, $fields_devices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->devicesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_devices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type devices | [optional]

### Return type

[**\OpenAPI\Client\Model\DeviceResponse**](../Model/DeviceResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## devicesUpdateInstance

> \OpenAPI\Client\Model\DeviceResponse devicesUpdateInstance($id, $device_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$device_update_request = new \OpenAPI\Client\Model\DeviceUpdateRequest(); // \OpenAPI\Client\Model\DeviceUpdateRequest | Device representation

try {
    $result = $apiInstance->devicesUpdateInstance($id, $device_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->devicesUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **device_update_request** | [**\OpenAPI\Client\Model\DeviceUpdateRequest**](../Model/DeviceUpdateRequest.md)| Device representation |

### Return type

[**\OpenAPI\Client\Model\DeviceResponse**](../Model/DeviceResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

