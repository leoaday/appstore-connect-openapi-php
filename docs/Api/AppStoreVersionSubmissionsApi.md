# OpenAPI\Client\AppStoreVersionSubmissionsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreVersionSubmissionsCreateInstance**](AppStoreVersionSubmissionsApi.md#appStoreVersionSubmissionsCreateInstance) | **POST** /v1/appStoreVersionSubmissions | 
[**appStoreVersionSubmissionsDeleteInstance**](AppStoreVersionSubmissionsApi.md#appStoreVersionSubmissionsDeleteInstance) | **DELETE** /v1/appStoreVersionSubmissions/{id} | 



## appStoreVersionSubmissionsCreateInstance

> \OpenAPI\Client\Model\AppStoreVersionSubmissionResponse appStoreVersionSubmissionsCreateInstance($app_store_version_submission_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_version_submission_create_request = new \OpenAPI\Client\Model\AppStoreVersionSubmissionCreateRequest(); // \OpenAPI\Client\Model\AppStoreVersionSubmissionCreateRequest | AppStoreVersionSubmission representation

try {
    $result = $apiInstance->appStoreVersionSubmissionsCreateInstance($app_store_version_submission_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionSubmissionsApi->appStoreVersionSubmissionsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_version_submission_create_request** | [**\OpenAPI\Client\Model\AppStoreVersionSubmissionCreateRequest**](../Model/AppStoreVersionSubmissionCreateRequest.md)| AppStoreVersionSubmission representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionSubmissionResponse**](../Model/AppStoreVersionSubmissionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionSubmissionsDeleteInstance

> appStoreVersionSubmissionsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appStoreVersionSubmissionsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionSubmissionsApi->appStoreVersionSubmissionsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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

