# OpenAPI\Client\AppScreenshotsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appScreenshotsCreateInstance**](AppScreenshotsApi.md#appScreenshotsCreateInstance) | **POST** /v1/appScreenshots | 
[**appScreenshotsDeleteInstance**](AppScreenshotsApi.md#appScreenshotsDeleteInstance) | **DELETE** /v1/appScreenshots/{id} | 
[**appScreenshotsGetInstance**](AppScreenshotsApi.md#appScreenshotsGetInstance) | **GET** /v1/appScreenshots/{id} | 
[**appScreenshotsUpdateInstance**](AppScreenshotsApi.md#appScreenshotsUpdateInstance) | **PATCH** /v1/appScreenshots/{id} | 



## appScreenshotsCreateInstance

> \OpenAPI\Client\Model\AppScreenshotResponse appScreenshotsCreateInstance($app_screenshot_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_screenshot_create_request = new \OpenAPI\Client\Model\AppScreenshotCreateRequest(); // \OpenAPI\Client\Model\AppScreenshotCreateRequest | AppScreenshot representation

try {
    $result = $apiInstance->appScreenshotsCreateInstance($app_screenshot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotsApi->appScreenshotsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_screenshot_create_request** | [**\OpenAPI\Client\Model\AppScreenshotCreateRequest**](../Model/AppScreenshotCreateRequest.md)| AppScreenshot representation |

### Return type

[**\OpenAPI\Client\Model\AppScreenshotResponse**](../Model/AppScreenshotResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotsDeleteInstance

> appScreenshotsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appScreenshotsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotsApi->appScreenshotsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appScreenshotsGetInstance

> \OpenAPI\Client\Model\AppScreenshotResponse appScreenshotsGetInstance($id, $fields_app_screenshots, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_screenshots = array('fields_app_screenshots_example'); // string[] | the fields to include for returned resources of type appScreenshots
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appScreenshotsGetInstance($id, $fields_app_screenshots, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotsApi->appScreenshotsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_screenshots** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshots | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppScreenshotResponse**](../Model/AppScreenshotResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotsUpdateInstance

> \OpenAPI\Client\Model\AppScreenshotResponse appScreenshotsUpdateInstance($id, $app_screenshot_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_screenshot_update_request = new \OpenAPI\Client\Model\AppScreenshotUpdateRequest(); // \OpenAPI\Client\Model\AppScreenshotUpdateRequest | AppScreenshot representation

try {
    $result = $apiInstance->appScreenshotsUpdateInstance($id, $app_screenshot_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotsApi->appScreenshotsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_screenshot_update_request** | [**\OpenAPI\Client\Model\AppScreenshotUpdateRequest**](../Model/AppScreenshotUpdateRequest.md)| AppScreenshot representation |

### Return type

[**\OpenAPI\Client\Model\AppScreenshotResponse**](../Model/AppScreenshotResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

