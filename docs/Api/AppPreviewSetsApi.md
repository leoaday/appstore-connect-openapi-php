# OpenAPI\Client\AppPreviewSetsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appPreviewSetsAppPreviewsGetToManyRelated**](AppPreviewSetsApi.md#appPreviewSetsAppPreviewsGetToManyRelated) | **GET** /v1/appPreviewSets/{id}/appPreviews | 
[**appPreviewSetsAppPreviewsGetToManyRelationship**](AppPreviewSetsApi.md#appPreviewSetsAppPreviewsGetToManyRelationship) | **GET** /v1/appPreviewSets/{id}/relationships/appPreviews | 
[**appPreviewSetsAppPreviewsReplaceToManyRelationship**](AppPreviewSetsApi.md#appPreviewSetsAppPreviewsReplaceToManyRelationship) | **PATCH** /v1/appPreviewSets/{id}/relationships/appPreviews | 
[**appPreviewSetsCreateInstance**](AppPreviewSetsApi.md#appPreviewSetsCreateInstance) | **POST** /v1/appPreviewSets | 
[**appPreviewSetsDeleteInstance**](AppPreviewSetsApi.md#appPreviewSetsDeleteInstance) | **DELETE** /v1/appPreviewSets/{id} | 
[**appPreviewSetsGetInstance**](AppPreviewSetsApi.md#appPreviewSetsGetInstance) | **GET** /v1/appPreviewSets/{id} | 



## appPreviewSetsAppPreviewsGetToManyRelated

> \OpenAPI\Client\Model\AppPreviewsResponse appPreviewSetsAppPreviewsGetToManyRelated($id, $fields_app_previews, $fields_app_preview_sets, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_previews = array('fields_app_previews_example'); // string[] | the fields to include for returned resources of type appPreviews
$fields_app_preview_sets = array('fields_app_preview_sets_example'); // string[] | the fields to include for returned resources of type appPreviewSets
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appPreviewSetsAppPreviewsGetToManyRelated($id, $fields_app_previews, $fields_app_preview_sets, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsAppPreviewsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_previews** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviews | [optional]
 **fields_app_preview_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviewSets | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreviewsResponse**](../Model/AppPreviewsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreviewSetsAppPreviewsGetToManyRelationship

> \OpenAPI\Client\Model\AppPreviewSetAppPreviewsLinkagesResponse appPreviewSetsAppPreviewsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appPreviewSetsAppPreviewsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsAppPreviewsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreviewSetAppPreviewsLinkagesResponse**](../Model/AppPreviewSetAppPreviewsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreviewSetsAppPreviewsReplaceToManyRelationship

> appPreviewSetsAppPreviewsReplaceToManyRelationship($id, $app_preview_set_app_previews_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_preview_set_app_previews_linkages_request = new \OpenAPI\Client\Model\AppPreviewSetAppPreviewsLinkagesRequest(); // \OpenAPI\Client\Model\AppPreviewSetAppPreviewsLinkagesRequest | List of related linkages

try {
    $apiInstance->appPreviewSetsAppPreviewsReplaceToManyRelationship($id, $app_preview_set_app_previews_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsAppPreviewsReplaceToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_preview_set_app_previews_linkages_request** | [**\OpenAPI\Client\Model\AppPreviewSetAppPreviewsLinkagesRequest**](../Model/AppPreviewSetAppPreviewsLinkagesRequest.md)| List of related linkages |

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


## appPreviewSetsCreateInstance

> \OpenAPI\Client\Model\AppPreviewSetResponse appPreviewSetsCreateInstance($app_preview_set_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_preview_set_create_request = new \OpenAPI\Client\Model\AppPreviewSetCreateRequest(); // \OpenAPI\Client\Model\AppPreviewSetCreateRequest | AppPreviewSet representation

try {
    $result = $apiInstance->appPreviewSetsCreateInstance($app_preview_set_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_preview_set_create_request** | [**\OpenAPI\Client\Model\AppPreviewSetCreateRequest**](../Model/AppPreviewSetCreateRequest.md)| AppPreviewSet representation |

### Return type

[**\OpenAPI\Client\Model\AppPreviewSetResponse**](../Model/AppPreviewSetResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appPreviewSetsDeleteInstance

> appPreviewSetsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appPreviewSetsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appPreviewSetsGetInstance

> \OpenAPI\Client\Model\AppPreviewSetResponse appPreviewSetsGetInstance($id, $fields_app_preview_sets, $include, $fields_app_previews, $limit_app_previews)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppPreviewSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_preview_sets = array('fields_app_preview_sets_example'); // string[] | the fields to include for returned resources of type appPreviewSets
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_previews = array('fields_app_previews_example'); // string[] | the fields to include for returned resources of type appPreviews
$limit_app_previews = 56; // int | maximum number of related appPreviews returned (when they are included)

try {
    $result = $apiInstance->appPreviewSetsGetInstance($id, $fields_app_preview_sets, $include, $fields_app_previews, $limit_app_previews);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppPreviewSetsApi->appPreviewSetsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_preview_sets** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviewSets | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_previews** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreviews | [optional]
 **limit_app_previews** | **int**| maximum number of related appPreviews returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreviewSetResponse**](../Model/AppPreviewSetResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

