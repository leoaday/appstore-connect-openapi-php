# OpenAPI\Client\AppStoreVersionLocalizationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated) | **GET** /v1/appStoreVersionLocalizations/{id}/appPreviewSets | 
[**appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated) | **GET** /v1/appStoreVersionLocalizations/{id}/appScreenshotSets | 
[**appStoreVersionLocalizationsCreateInstance**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsCreateInstance) | **POST** /v1/appStoreVersionLocalizations | 
[**appStoreVersionLocalizationsDeleteInstance**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsDeleteInstance) | **DELETE** /v1/appStoreVersionLocalizations/{id} | 
[**appStoreVersionLocalizationsGetInstance**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsGetInstance) | **GET** /v1/appStoreVersionLocalizations/{id} | 
[**appStoreVersionLocalizationsUpdateInstance**](AppStoreVersionLocalizationsApi.md#appStoreVersionLocalizationsUpdateInstance) | **PATCH** /v1/appStoreVersionLocalizations/{id} | 



## appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated

> \OpenAPI\Client\Model\AppPreviewSetsResponse appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated($id, $filter_preview_type, $fields_app_store_version_localizations, $fields_app_previews, $fields_app_preview_sets, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_preview_type = array('filter_preview_type_example'); // string[] | filter by attribute 'previewType'
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$fields_app_previews = array('fields_app_previews_example'); // string[] | the fields to include for returned resources of type appPreviews
$fields_app_preview_sets = array('fields_app_preview_sets_example'); // string[] | the fields to include for returned resources of type appPreviewSets
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated($id, $filter_preview_type, $fields_app_store_version_localizations, $fields_app_previews, $fields_app_preview_sets, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_preview_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;previewType&#39; | [optional]
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **fields_app_previews** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviews | [optional]
 **fields_app_preview_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviewSets | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreviewSetsResponse**](../Model/AppPreviewSetsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated

> \OpenAPI\Client\Model\AppScreenshotSetsResponse appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated($id, $filter_screenshot_display_type, $fields_app_store_version_localizations, $fields_app_screenshot_sets, $fields_app_screenshots, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_screenshot_display_type = array('filter_screenshot_display_type_example'); // string[] | filter by attribute 'screenshotDisplayType'
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$fields_app_screenshot_sets = array('fields_app_screenshot_sets_example'); // string[] | the fields to include for returned resources of type appScreenshotSets
$fields_app_screenshots = array('fields_app_screenshots_example'); // string[] | the fields to include for returned resources of type appScreenshots
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated($id, $filter_screenshot_display_type, $fields_app_store_version_localizations, $fields_app_screenshot_sets, $fields_app_screenshots, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_screenshot_display_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;screenshotDisplayType&#39; | [optional]
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **fields_app_screenshot_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshotSets | [optional]
 **fields_app_screenshots** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshots | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppScreenshotSetsResponse**](../Model/AppScreenshotSetsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionLocalizationsCreateInstance

> \OpenAPI\Client\Model\AppStoreVersionLocalizationResponse appStoreVersionLocalizationsCreateInstance($app_store_version_localization_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_version_localization_create_request = new \OpenAPI\Client\Model\AppStoreVersionLocalizationCreateRequest(); // \OpenAPI\Client\Model\AppStoreVersionLocalizationCreateRequest | AppStoreVersionLocalization representation

try {
    $result = $apiInstance->appStoreVersionLocalizationsCreateInstance($app_store_version_localization_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_version_localization_create_request** | [**\OpenAPI\Client\Model\AppStoreVersionLocalizationCreateRequest**](../Model/AppStoreVersionLocalizationCreateRequest.md)| AppStoreVersionLocalization representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionLocalizationResponse**](../Model/AppStoreVersionLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionLocalizationsDeleteInstance

> appStoreVersionLocalizationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appStoreVersionLocalizationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appStoreVersionLocalizationsGetInstance

> \OpenAPI\Client\Model\AppStoreVersionLocalizationResponse appStoreVersionLocalizationsGetInstance($id, $fields_app_store_version_localizations, $include, $fields_app_screenshot_sets, $fields_app_preview_sets, $limit_app_preview_sets, $limit_app_screenshot_sets)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_screenshot_sets = array('fields_app_screenshot_sets_example'); // string[] | the fields to include for returned resources of type appScreenshotSets
$fields_app_preview_sets = array('fields_app_preview_sets_example'); // string[] | the fields to include for returned resources of type appPreviewSets
$limit_app_preview_sets = 56; // int | maximum number of related appPreviewSets returned (when they are included)
$limit_app_screenshot_sets = 56; // int | maximum number of related appScreenshotSets returned (when they are included)

try {
    $result = $apiInstance->appStoreVersionLocalizationsGetInstance($id, $fields_app_store_version_localizations, $include, $fields_app_screenshot_sets, $fields_app_preview_sets, $limit_app_preview_sets, $limit_app_screenshot_sets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_screenshot_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appScreenshotSets | [optional]
 **fields_app_preview_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviewSets | [optional]
 **limit_app_preview_sets** | **int**| maximum number of related appPreviewSets returned (when they are included) | [optional]
 **limit_app_screenshot_sets** | **int**| maximum number of related appScreenshotSets returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionLocalizationResponse**](../Model/AppStoreVersionLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionLocalizationsUpdateInstance

> \OpenAPI\Client\Model\AppStoreVersionLocalizationResponse appStoreVersionLocalizationsUpdateInstance($id, $app_store_version_localization_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_version_localization_update_request = new \OpenAPI\Client\Model\AppStoreVersionLocalizationUpdateRequest(); // \OpenAPI\Client\Model\AppStoreVersionLocalizationUpdateRequest | AppStoreVersionLocalization representation

try {
    $result = $apiInstance->appStoreVersionLocalizationsUpdateInstance($id, $app_store_version_localization_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionLocalizationsApi->appStoreVersionLocalizationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_version_localization_update_request** | [**\OpenAPI\Client\Model\AppStoreVersionLocalizationUpdateRequest**](../Model/AppStoreVersionLocalizationUpdateRequest.md)| AppStoreVersionLocalization representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionLocalizationResponse**](../Model/AppStoreVersionLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

