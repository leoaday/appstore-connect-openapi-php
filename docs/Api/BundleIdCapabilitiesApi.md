# OpenAPI\Client\BundleIdCapabilitiesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleIdCapabilitiesCreateInstance**](BundleIdCapabilitiesApi.md#bundleIdCapabilitiesCreateInstance) | **POST** /v1/bundleIdCapabilities | 
[**bundleIdCapabilitiesDeleteInstance**](BundleIdCapabilitiesApi.md#bundleIdCapabilitiesDeleteInstance) | **DELETE** /v1/bundleIdCapabilities/{id} | 
[**bundleIdCapabilitiesUpdateInstance**](BundleIdCapabilitiesApi.md#bundleIdCapabilitiesUpdateInstance) | **PATCH** /v1/bundleIdCapabilities/{id} | 



## bundleIdCapabilitiesCreateInstance

> \OpenAPI\Client\Model\BundleIdCapabilityResponse bundleIdCapabilitiesCreateInstance($bundle_id_capability_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdCapabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_id_capability_create_request = new \OpenAPI\Client\Model\BundleIdCapabilityCreateRequest(); // \OpenAPI\Client\Model\BundleIdCapabilityCreateRequest | BundleIdCapability representation

try {
    $result = $apiInstance->bundleIdCapabilitiesCreateInstance($bundle_id_capability_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdCapabilitiesApi->bundleIdCapabilitiesCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id_capability_create_request** | [**\OpenAPI\Client\Model\BundleIdCapabilityCreateRequest**](../Model/BundleIdCapabilityCreateRequest.md)| BundleIdCapability representation |

### Return type

[**\OpenAPI\Client\Model\BundleIdCapabilityResponse**](../Model/BundleIdCapabilityResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdCapabilitiesDeleteInstance

> bundleIdCapabilitiesDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdCapabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->bundleIdCapabilitiesDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdCapabilitiesApi->bundleIdCapabilitiesDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## bundleIdCapabilitiesUpdateInstance

> \OpenAPI\Client\Model\BundleIdCapabilityResponse bundleIdCapabilitiesUpdateInstance($id, $bundle_id_capability_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdCapabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$bundle_id_capability_update_request = new \OpenAPI\Client\Model\BundleIdCapabilityUpdateRequest(); // \OpenAPI\Client\Model\BundleIdCapabilityUpdateRequest | BundleIdCapability representation

try {
    $result = $apiInstance->bundleIdCapabilitiesUpdateInstance($id, $bundle_id_capability_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdCapabilitiesApi->bundleIdCapabilitiesUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **bundle_id_capability_update_request** | [**\OpenAPI\Client\Model\BundleIdCapabilityUpdateRequest**](../Model/BundleIdCapabilityUpdateRequest.md)| BundleIdCapability representation |

### Return type

[**\OpenAPI\Client\Model\BundleIdCapabilityResponse**](../Model/BundleIdCapabilityResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

