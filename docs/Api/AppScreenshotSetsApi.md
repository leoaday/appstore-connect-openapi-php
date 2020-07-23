# OpenAPI\Client\AppScreenshotSetsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appScreenshotSetsAppScreenshotsGetToManyRelated**](AppScreenshotSetsApi.md#appScreenshotSetsAppScreenshotsGetToManyRelated) | **GET** /v1/appScreenshotSets/{id}/appScreenshots | 
[**appScreenshotSetsAppScreenshotsGetToManyRelationship**](AppScreenshotSetsApi.md#appScreenshotSetsAppScreenshotsGetToManyRelationship) | **GET** /v1/appScreenshotSets/{id}/relationships/appScreenshots | 
[**appScreenshotSetsAppScreenshotsReplaceToManyRelationship**](AppScreenshotSetsApi.md#appScreenshotSetsAppScreenshotsReplaceToManyRelationship) | **PATCH** /v1/appScreenshotSets/{id}/relationships/appScreenshots | 
[**appScreenshotSetsCreateInstance**](AppScreenshotSetsApi.md#appScreenshotSetsCreateInstance) | **POST** /v1/appScreenshotSets | 
[**appScreenshotSetsDeleteInstance**](AppScreenshotSetsApi.md#appScreenshotSetsDeleteInstance) | **DELETE** /v1/appScreenshotSets/{id} | 
[**appScreenshotSetsGetInstance**](AppScreenshotSetsApi.md#appScreenshotSetsGetInstance) | **GET** /v1/appScreenshotSets/{id} | 



## appScreenshotSetsAppScreenshotsGetToManyRelated

> \OpenAPI\Client\Model\AppScreenshotsResponse appScreenshotSetsAppScreenshotsGetToManyRelated($id, $fields_app_screenshot_sets, $fields_app_screenshots, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_screenshot_sets = array('fields_app_screenshot_sets_example'); // string[] | the fields to include for returned resources of type appScreenshotSets
$fields_app_screenshots = array('fields_app_screenshots_example'); // string[] | the fields to include for returned resources of type appScreenshots
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appScreenshotSetsAppScreenshotsGetToManyRelated($id, $fields_app_screenshot_sets, $fields_app_screenshots, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsAppScreenshotsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_screenshot_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshotSets | [optional]
 **fields_app_screenshots** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshots | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppScreenshotsResponse**](../Model/AppScreenshotsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotSetsAppScreenshotsGetToManyRelationship

> \OpenAPI\Client\Model\AppScreenshotSetAppScreenshotsLinkagesResponse appScreenshotSetsAppScreenshotsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appScreenshotSetsAppScreenshotsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsAppScreenshotsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppScreenshotSetAppScreenshotsLinkagesResponse**](../Model/AppScreenshotSetAppScreenshotsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotSetsAppScreenshotsReplaceToManyRelationship

> appScreenshotSetsAppScreenshotsReplaceToManyRelationship($id, $app_screenshot_set_app_screenshots_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_screenshot_set_app_screenshots_linkages_request = new \OpenAPI\Client\Model\AppScreenshotSetAppScreenshotsLinkagesRequest(); // \OpenAPI\Client\Model\AppScreenshotSetAppScreenshotsLinkagesRequest | List of related linkages

try {
    $apiInstance->appScreenshotSetsAppScreenshotsReplaceToManyRelationship($id, $app_screenshot_set_app_screenshots_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsAppScreenshotsReplaceToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_screenshot_set_app_screenshots_linkages_request** | [**\OpenAPI\Client\Model\AppScreenshotSetAppScreenshotsLinkagesRequest**](../Model/AppScreenshotSetAppScreenshotsLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotSetsCreateInstance

> \OpenAPI\Client\Model\AppScreenshotSetResponse appScreenshotSetsCreateInstance($app_screenshot_set_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_screenshot_set_create_request = new \OpenAPI\Client\Model\AppScreenshotSetCreateRequest(); // \OpenAPI\Client\Model\AppScreenshotSetCreateRequest | AppScreenshotSet representation

try {
    $result = $apiInstance->appScreenshotSetsCreateInstance($app_screenshot_set_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_screenshot_set_create_request** | [**\OpenAPI\Client\Model\AppScreenshotSetCreateRequest**](../Model/AppScreenshotSetCreateRequest.md)| AppScreenshotSet representation |

### Return type

[**\OpenAPI\Client\Model\AppScreenshotSetResponse**](../Model/AppScreenshotSetResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appScreenshotSetsDeleteInstance

> appScreenshotSetsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appScreenshotSetsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appScreenshotSetsGetInstance

> \OpenAPI\Client\Model\AppScreenshotSetResponse appScreenshotSetsGetInstance($id, $fields_app_screenshot_sets, $include, $fields_app_screenshots, $limit_app_screenshots)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppScreenshotSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_screenshot_sets = array('fields_app_screenshot_sets_example'); // string[] | the fields to include for returned resources of type appScreenshotSets
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_screenshots = array('fields_app_screenshots_example'); // string[] | the fields to include for returned resources of type appScreenshots
$limit_app_screenshots = 56; // int | maximum number of related appScreenshots returned (when they are included)

try {
    $result = $apiInstance->appScreenshotSetsGetInstance($id, $fields_app_screenshot_sets, $include, $fields_app_screenshots, $limit_app_screenshots);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppScreenshotSetsApi->appScreenshotSetsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_screenshot_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshotSets | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_screenshots** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshots | [optional]
 **limit_app_screenshots** | **int**| maximum number of related appScreenshots returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppScreenshotSetResponse**](../Model/AppScreenshotSetResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

