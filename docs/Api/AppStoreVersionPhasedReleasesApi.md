# OpenAPI\Client\AppStoreVersionPhasedReleasesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreVersionPhasedReleasesCreateInstance**](AppStoreVersionPhasedReleasesApi.md#appStoreVersionPhasedReleasesCreateInstance) | **POST** /v1/appStoreVersionPhasedReleases | 
[**appStoreVersionPhasedReleasesDeleteInstance**](AppStoreVersionPhasedReleasesApi.md#appStoreVersionPhasedReleasesDeleteInstance) | **DELETE** /v1/appStoreVersionPhasedReleases/{id} | 
[**appStoreVersionPhasedReleasesUpdateInstance**](AppStoreVersionPhasedReleasesApi.md#appStoreVersionPhasedReleasesUpdateInstance) | **PATCH** /v1/appStoreVersionPhasedReleases/{id} | 



## appStoreVersionPhasedReleasesCreateInstance

> \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse appStoreVersionPhasedReleasesCreateInstance($app_store_version_phased_release_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionPhasedReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_version_phased_release_create_request = new \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseCreateRequest(); // \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseCreateRequest | AppStoreVersionPhasedRelease representation

try {
    $result = $apiInstance->appStoreVersionPhasedReleasesCreateInstance($app_store_version_phased_release_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionPhasedReleasesApi->appStoreVersionPhasedReleasesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_version_phased_release_create_request** | [**\OpenAPI\Client\Model\AppStoreVersionPhasedReleaseCreateRequest**](../Model/AppStoreVersionPhasedReleaseCreateRequest.md)| AppStoreVersionPhasedRelease representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse**](../Model/AppStoreVersionPhasedReleaseResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionPhasedReleasesDeleteInstance

> appStoreVersionPhasedReleasesDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionPhasedReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appStoreVersionPhasedReleasesDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionPhasedReleasesApi->appStoreVersionPhasedReleasesDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appStoreVersionPhasedReleasesUpdateInstance

> \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse appStoreVersionPhasedReleasesUpdateInstance($id, $app_store_version_phased_release_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionPhasedReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_version_phased_release_update_request = new \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseUpdateRequest(); // \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseUpdateRequest | AppStoreVersionPhasedRelease representation

try {
    $result = $apiInstance->appStoreVersionPhasedReleasesUpdateInstance($id, $app_store_version_phased_release_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionPhasedReleasesApi->appStoreVersionPhasedReleasesUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_version_phased_release_update_request** | [**\OpenAPI\Client\Model\AppStoreVersionPhasedReleaseUpdateRequest**](../Model/AppStoreVersionPhasedReleaseUpdateRequest.md)| AppStoreVersionPhasedRelease representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse**](../Model/AppStoreVersionPhasedReleaseResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

