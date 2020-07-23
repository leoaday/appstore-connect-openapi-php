# OpenAPI\Client\AppPreviewsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPreviewsCreateInstance**](AppPreviewsApi.md#appPreviewsCreateInstance) | **POST** /v1/appPreviews | 
[**appPreviewsDeleteInstance**](AppPreviewsApi.md#appPreviewsDeleteInstance) | **DELETE** /v1/appPreviews/{id} | 
[**appPreviewsGetInstance**](AppPreviewsApi.md#appPreviewsGetInstance) | **GET** /v1/appPreviews/{id} | 
[**appPreviewsUpdateInstance**](AppPreviewsApi.md#appPreviewsUpdateInstance) | **PATCH** /v1/appPreviews/{id} | 



## appPreviewsCreateInstance

> \OpenAPI\Client\Model\AppPreviewResponse appPreviewsCreateInstance($app_preview_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_preview_create_request = new \OpenAPI\Client\Model\AppPreviewCreateRequest(); // \OpenAPI\Client\Model\AppPreviewCreateRequest | AppPreview representation

try {
    $result = $apiInstance->appPreviewsCreateInstance($app_preview_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewsApi->appPreviewsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_preview_create_request** | [**\OpenAPI\Client\Model\AppPreviewCreateRequest**](../Model/AppPreviewCreateRequest.md)| AppPreview representation |

### Return type

[**\OpenAPI\Client\Model\AppPreviewResponse**](../Model/AppPreviewResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreviewsDeleteInstance

> appPreviewsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appPreviewsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewsApi->appPreviewsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appPreviewsGetInstance

> \OpenAPI\Client\Model\AppPreviewResponse appPreviewsGetInstance($id, $fields_app_previews, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_previews = array('fields_app_previews_example'); // string[] | the fields to include for returned resources of type appPreviews
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appPreviewsGetInstance($id, $fields_app_previews, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewsApi->appPreviewsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_previews** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviews | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreviewResponse**](../Model/AppPreviewResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreviewsUpdateInstance

> \OpenAPI\Client\Model\AppPreviewResponse appPreviewsUpdateInstance($id, $app_preview_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_preview_update_request = new \OpenAPI\Client\Model\AppPreviewUpdateRequest(); // \OpenAPI\Client\Model\AppPreviewUpdateRequest | AppPreview representation

try {
    $result = $apiInstance->appPreviewsUpdateInstance($id, $app_preview_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewsApi->appPreviewsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_preview_update_request** | [**\OpenAPI\Client\Model\AppPreviewUpdateRequest**](../Model/AppPreviewUpdateRequest.md)| AppPreview representation |

### Return type

[**\OpenAPI\Client\Model\AppPreviewResponse**](../Model/AppPreviewResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

