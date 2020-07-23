# OpenAPI\Client\AppInfoLocalizationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appInfoLocalizationsCreateInstance**](AppInfoLocalizationsApi.md#appInfoLocalizationsCreateInstance) | **POST** /v1/appInfoLocalizations | 
[**appInfoLocalizationsDeleteInstance**](AppInfoLocalizationsApi.md#appInfoLocalizationsDeleteInstance) | **DELETE** /v1/appInfoLocalizations/{id} | 
[**appInfoLocalizationsGetInstance**](AppInfoLocalizationsApi.md#appInfoLocalizationsGetInstance) | **GET** /v1/appInfoLocalizations/{id} | 
[**appInfoLocalizationsUpdateInstance**](AppInfoLocalizationsApi.md#appInfoLocalizationsUpdateInstance) | **PATCH** /v1/appInfoLocalizations/{id} | 



## appInfoLocalizationsCreateInstance

> \OpenAPI\Client\Model\AppInfoLocalizationResponse appInfoLocalizationsCreateInstance($app_info_localization_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfoLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_info_localization_create_request = new \OpenAPI\Client\Model\AppInfoLocalizationCreateRequest(); // \OpenAPI\Client\Model\AppInfoLocalizationCreateRequest | AppInfoLocalization representation

try {
    $result = $apiInstance->appInfoLocalizationsCreateInstance($app_info_localization_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfoLocalizationsApi->appInfoLocalizationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_info_localization_create_request** | [**\OpenAPI\Client\Model\AppInfoLocalizationCreateRequest**](../Model/AppInfoLocalizationCreateRequest.md)| AppInfoLocalization representation |

### Return type

[**\OpenAPI\Client\Model\AppInfoLocalizationResponse**](../Model/AppInfoLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfoLocalizationsDeleteInstance

> appInfoLocalizationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfoLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appInfoLocalizationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppInfoLocalizationsApi->appInfoLocalizationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appInfoLocalizationsGetInstance

> \OpenAPI\Client\Model\AppInfoLocalizationResponse appInfoLocalizationsGetInstance($id, $fields_app_info_localizations, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfoLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_info_localizations = array('fields_app_info_localizations_example'); // string[] | the fields to include for returned resources of type appInfoLocalizations
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appInfoLocalizationsGetInstance($id, $fields_app_info_localizations, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfoLocalizationsApi->appInfoLocalizationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_info_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfoLocalizations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppInfoLocalizationResponse**](../Model/AppInfoLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfoLocalizationsUpdateInstance

> \OpenAPI\Client\Model\AppInfoLocalizationResponse appInfoLocalizationsUpdateInstance($id, $app_info_localization_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfoLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_info_localization_update_request = new \OpenAPI\Client\Model\AppInfoLocalizationUpdateRequest(); // \OpenAPI\Client\Model\AppInfoLocalizationUpdateRequest | AppInfoLocalization representation

try {
    $result = $apiInstance->appInfoLocalizationsUpdateInstance($id, $app_info_localization_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfoLocalizationsApi->appInfoLocalizationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_info_localization_update_request** | [**\OpenAPI\Client\Model\AppInfoLocalizationUpdateRequest**](../Model/AppInfoLocalizationUpdateRequest.md)| AppInfoLocalization representation |

### Return type

[**\OpenAPI\Client\Model\AppInfoLocalizationResponse**](../Model/AppInfoLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

