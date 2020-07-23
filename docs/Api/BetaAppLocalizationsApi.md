# OpenAPI\Client\BetaAppLocalizationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaAppLocalizationsAppGetToOneRelated**](BetaAppLocalizationsApi.md#betaAppLocalizationsAppGetToOneRelated) | **GET** /v1/betaAppLocalizations/{id}/app | 
[**betaAppLocalizationsCreateInstance**](BetaAppLocalizationsApi.md#betaAppLocalizationsCreateInstance) | **POST** /v1/betaAppLocalizations | 
[**betaAppLocalizationsDeleteInstance**](BetaAppLocalizationsApi.md#betaAppLocalizationsDeleteInstance) | **DELETE** /v1/betaAppLocalizations/{id} | 
[**betaAppLocalizationsGetCollection**](BetaAppLocalizationsApi.md#betaAppLocalizationsGetCollection) | **GET** /v1/betaAppLocalizations | 
[**betaAppLocalizationsGetInstance**](BetaAppLocalizationsApi.md#betaAppLocalizationsGetInstance) | **GET** /v1/betaAppLocalizations/{id} | 
[**betaAppLocalizationsUpdateInstance**](BetaAppLocalizationsApi.md#betaAppLocalizationsUpdateInstance) | **PATCH** /v1/betaAppLocalizations/{id} | 



## betaAppLocalizationsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse betaAppLocalizationsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppLocalizationsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppLocalizationsCreateInstance

> \OpenAPI\Client\Model\BetaAppLocalizationResponse betaAppLocalizationsCreateInstance($beta_app_localization_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_app_localization_create_request = new \OpenAPI\Client\Model\BetaAppLocalizationCreateRequest(); // \OpenAPI\Client\Model\BetaAppLocalizationCreateRequest | BetaAppLocalization representation

try {
    $result = $apiInstance->betaAppLocalizationsCreateInstance($beta_app_localization_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_app_localization_create_request** | [**\OpenAPI\Client\Model\BetaAppLocalizationCreateRequest**](../Model/BetaAppLocalizationCreateRequest.md)| BetaAppLocalization representation |

### Return type

[**\OpenAPI\Client\Model\BetaAppLocalizationResponse**](../Model/BetaAppLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppLocalizationsDeleteInstance

> betaAppLocalizationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->betaAppLocalizationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## betaAppLocalizationsGetCollection

> \OpenAPI\Client\Model\BetaAppLocalizationsResponse betaAppLocalizationsGetCollection($filter_locale, $filter_app, $fields_beta_app_localizations, $limit, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_locale = array('filter_locale_example'); // string[] | filter by attribute 'locale'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$fields_beta_app_localizations = array('fields_beta_app_localizations_example'); // string[] | the fields to include for returned resources of type betaAppLocalizations
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppLocalizationsGetCollection($filter_locale, $filter_app, $fields_beta_app_localizations, $limit, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_locale** | [**string[]**](../Model/string.md)| filter by attribute &#39;locale&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **fields_beta_app_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppLocalizationsResponse**](../Model/BetaAppLocalizationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppLocalizationsGetInstance

> \OpenAPI\Client\Model\BetaAppLocalizationResponse betaAppLocalizationsGetInstance($id, $fields_beta_app_localizations, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_localizations = array('fields_beta_app_localizations_example'); // string[] | the fields to include for returned resources of type betaAppLocalizations
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppLocalizationsGetInstance($id, $fields_beta_app_localizations, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppLocalizations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppLocalizationResponse**](../Model/BetaAppLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppLocalizationsUpdateInstance

> \OpenAPI\Client\Model\BetaAppLocalizationResponse betaAppLocalizationsUpdateInstance($id, $beta_app_localization_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_app_localization_update_request = new \OpenAPI\Client\Model\BetaAppLocalizationUpdateRequest(); // \OpenAPI\Client\Model\BetaAppLocalizationUpdateRequest | BetaAppLocalization representation

try {
    $result = $apiInstance->betaAppLocalizationsUpdateInstance($id, $beta_app_localization_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppLocalizationsApi->betaAppLocalizationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_app_localization_update_request** | [**\OpenAPI\Client\Model\BetaAppLocalizationUpdateRequest**](../Model/BetaAppLocalizationUpdateRequest.md)| BetaAppLocalization representation |

### Return type

[**\OpenAPI\Client\Model\BetaAppLocalizationResponse**](../Model/BetaAppLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

