# OpenAPI\Client\AppStoreReviewDetailsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated**](AppStoreReviewDetailsApi.md#appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated) | **GET** /v1/appStoreReviewDetails/{id}/appStoreReviewAttachments | 
[**appStoreReviewDetailsCreateInstance**](AppStoreReviewDetailsApi.md#appStoreReviewDetailsCreateInstance) | **POST** /v1/appStoreReviewDetails | 
[**appStoreReviewDetailsGetInstance**](AppStoreReviewDetailsApi.md#appStoreReviewDetailsGetInstance) | **GET** /v1/appStoreReviewDetails/{id} | 
[**appStoreReviewDetailsUpdateInstance**](AppStoreReviewDetailsApi.md#appStoreReviewDetailsUpdateInstance) | **PATCH** /v1/appStoreReviewDetails/{id} | 



## appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated

> \OpenAPI\Client\Model\AppStoreReviewAttachmentsResponse appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated($id, $fields_app_store_review_details, $fields_app_store_review_attachments, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_review_details = array('fields_app_store_review_details_example'); // string[] | the fields to include for returned resources of type appStoreReviewDetails
$fields_app_store_review_attachments = array('fields_app_store_review_attachments_example'); // string[] | the fields to include for returned resources of type appStoreReviewAttachments
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated($id, $fields_app_store_review_details, $fields_app_store_review_attachments, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewDetailsApi->appStoreReviewDetailsAppStoreReviewAttachmentsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewDetails | [optional]
 **fields_app_store_review_attachments** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewAttachments | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewAttachmentsResponse**](../Model/AppStoreReviewAttachmentsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreReviewDetailsCreateInstance

> \OpenAPI\Client\Model\AppStoreReviewDetailResponse appStoreReviewDetailsCreateInstance($app_store_review_detail_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_review_detail_create_request = new \OpenAPI\Client\Model\AppStoreReviewDetailCreateRequest(); // \OpenAPI\Client\Model\AppStoreReviewDetailCreateRequest | AppStoreReviewDetail representation

try {
    $result = $apiInstance->appStoreReviewDetailsCreateInstance($app_store_review_detail_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewDetailsApi->appStoreReviewDetailsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_review_detail_create_request** | [**\OpenAPI\Client\Model\AppStoreReviewDetailCreateRequest**](../Model/AppStoreReviewDetailCreateRequest.md)| AppStoreReviewDetail representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewDetailResponse**](../Model/AppStoreReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreReviewDetailsGetInstance

> \OpenAPI\Client\Model\AppStoreReviewDetailResponse appStoreReviewDetailsGetInstance($id, $fields_app_store_review_details, $include, $fields_app_store_review_attachments, $limit_app_store_review_attachments)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_review_details = array('fields_app_store_review_details_example'); // string[] | the fields to include for returned resources of type appStoreReviewDetails
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_store_review_attachments = array('fields_app_store_review_attachments_example'); // string[] | the fields to include for returned resources of type appStoreReviewAttachments
$limit_app_store_review_attachments = 56; // int | maximum number of related appStoreReviewAttachments returned (when they are included)

try {
    $result = $apiInstance->appStoreReviewDetailsGetInstance($id, $fields_app_store_review_details, $include, $fields_app_store_review_attachments, $limit_app_store_review_attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewDetailsApi->appStoreReviewDetailsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewDetails | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_store_review_attachments** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewAttachments | [optional]
 **limit_app_store_review_attachments** | **int**| maximum number of related appStoreReviewAttachments returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewDetailResponse**](../Model/AppStoreReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreReviewDetailsUpdateInstance

> \OpenAPI\Client\Model\AppStoreReviewDetailResponse appStoreReviewDetailsUpdateInstance($id, $app_store_review_detail_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_review_detail_update_request = new \OpenAPI\Client\Model\AppStoreReviewDetailUpdateRequest(); // \OpenAPI\Client\Model\AppStoreReviewDetailUpdateRequest | AppStoreReviewDetail representation

try {
    $result = $apiInstance->appStoreReviewDetailsUpdateInstance($id, $app_store_review_detail_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewDetailsApi->appStoreReviewDetailsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_review_detail_update_request** | [**\OpenAPI\Client\Model\AppStoreReviewDetailUpdateRequest**](../Model/AppStoreReviewDetailUpdateRequest.md)| AppStoreReviewDetail representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewDetailResponse**](../Model/AppStoreReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

