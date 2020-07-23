# OpenAPI\Client\AppStoreReviewAttachmentsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreReviewAttachmentsCreateInstance**](AppStoreReviewAttachmentsApi.md#appStoreReviewAttachmentsCreateInstance) | **POST** /v1/appStoreReviewAttachments | 
[**appStoreReviewAttachmentsDeleteInstance**](AppStoreReviewAttachmentsApi.md#appStoreReviewAttachmentsDeleteInstance) | **DELETE** /v1/appStoreReviewAttachments/{id} | 
[**appStoreReviewAttachmentsGetInstance**](AppStoreReviewAttachmentsApi.md#appStoreReviewAttachmentsGetInstance) | **GET** /v1/appStoreReviewAttachments/{id} | 
[**appStoreReviewAttachmentsUpdateInstance**](AppStoreReviewAttachmentsApi.md#appStoreReviewAttachmentsUpdateInstance) | **PATCH** /v1/appStoreReviewAttachments/{id} | 



## appStoreReviewAttachmentsCreateInstance

> \OpenAPI\Client\Model\AppStoreReviewAttachmentResponse appStoreReviewAttachmentsCreateInstance($app_store_review_attachment_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_review_attachment_create_request = new \OpenAPI\Client\Model\AppStoreReviewAttachmentCreateRequest(); // \OpenAPI\Client\Model\AppStoreReviewAttachmentCreateRequest | AppStoreReviewAttachment representation

try {
    $result = $apiInstance->appStoreReviewAttachmentsCreateInstance($app_store_review_attachment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewAttachmentsApi->appStoreReviewAttachmentsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_review_attachment_create_request** | [**\OpenAPI\Client\Model\AppStoreReviewAttachmentCreateRequest**](../Model/AppStoreReviewAttachmentCreateRequest.md)| AppStoreReviewAttachment representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewAttachmentResponse**](../Model/AppStoreReviewAttachmentResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreReviewAttachmentsDeleteInstance

> appStoreReviewAttachmentsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appStoreReviewAttachmentsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewAttachmentsApi->appStoreReviewAttachmentsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appStoreReviewAttachmentsGetInstance

> \OpenAPI\Client\Model\AppStoreReviewAttachmentResponse appStoreReviewAttachmentsGetInstance($id, $fields_app_store_review_attachments, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_review_attachments = array('fields_app_store_review_attachments_example'); // string[] | the fields to include for returned resources of type appStoreReviewAttachments
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreReviewAttachmentsGetInstance($id, $fields_app_store_review_attachments, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewAttachmentsApi->appStoreReviewAttachmentsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_review_attachments** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewAttachments | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewAttachmentResponse**](../Model/AppStoreReviewAttachmentResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreReviewAttachmentsUpdateInstance

> \OpenAPI\Client\Model\AppStoreReviewAttachmentResponse appStoreReviewAttachmentsUpdateInstance($id, $app_store_review_attachment_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreReviewAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_review_attachment_update_request = new \OpenAPI\Client\Model\AppStoreReviewAttachmentUpdateRequest(); // \OpenAPI\Client\Model\AppStoreReviewAttachmentUpdateRequest | AppStoreReviewAttachment representation

try {
    $result = $apiInstance->appStoreReviewAttachmentsUpdateInstance($id, $app_store_review_attachment_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreReviewAttachmentsApi->appStoreReviewAttachmentsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_review_attachment_update_request** | [**\OpenAPI\Client\Model\AppStoreReviewAttachmentUpdateRequest**](../Model/AppStoreReviewAttachmentUpdateRequest.md)| AppStoreReviewAttachment representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewAttachmentResponse**](../Model/AppStoreReviewAttachmentResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

