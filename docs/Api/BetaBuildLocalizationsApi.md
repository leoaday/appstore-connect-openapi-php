# OpenAPI\Client\BetaBuildLocalizationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaBuildLocalizationsBuildGetToOneRelated**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsBuildGetToOneRelated) | **GET** /v1/betaBuildLocalizations/{id}/build | 
[**betaBuildLocalizationsCreateInstance**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsCreateInstance) | **POST** /v1/betaBuildLocalizations | 
[**betaBuildLocalizationsDeleteInstance**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsDeleteInstance) | **DELETE** /v1/betaBuildLocalizations/{id} | 
[**betaBuildLocalizationsGetCollection**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsGetCollection) | **GET** /v1/betaBuildLocalizations | 
[**betaBuildLocalizationsGetInstance**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsGetInstance) | **GET** /v1/betaBuildLocalizations/{id} | 
[**betaBuildLocalizationsUpdateInstance**](BetaBuildLocalizationsApi.md#betaBuildLocalizationsUpdateInstance) | **PATCH** /v1/betaBuildLocalizations/{id} | 



## betaBuildLocalizationsBuildGetToOneRelated

> \OpenAPI\Client\Model\BuildResponse betaBuildLocalizationsBuildGetToOneRelated($id, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaBuildLocalizationsBuildGetToOneRelated($id, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsBuildGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildResponse**](../Model/BuildResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaBuildLocalizationsCreateInstance

> \OpenAPI\Client\Model\BetaBuildLocalizationResponse betaBuildLocalizationsCreateInstance($beta_build_localization_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_build_localization_create_request = new \OpenAPI\Client\Model\BetaBuildLocalizationCreateRequest(); // \OpenAPI\Client\Model\BetaBuildLocalizationCreateRequest | BetaBuildLocalization representation

try {
    $result = $apiInstance->betaBuildLocalizationsCreateInstance($beta_build_localization_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_build_localization_create_request** | [**\OpenAPI\Client\Model\BetaBuildLocalizationCreateRequest**](../Model/BetaBuildLocalizationCreateRequest.md)| BetaBuildLocalization representation |

### Return type

[**\OpenAPI\Client\Model\BetaBuildLocalizationResponse**](../Model/BetaBuildLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaBuildLocalizationsDeleteInstance

> betaBuildLocalizationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->betaBuildLocalizationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## betaBuildLocalizationsGetCollection

> \OpenAPI\Client\Model\BetaBuildLocalizationsResponse betaBuildLocalizationsGetCollection($filter_locale, $filter_build, $fields_beta_build_localizations, $limit, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_locale = array('filter_locale_example'); // string[] | filter by attribute 'locale'
$filter_build = array('filter_build_example'); // string[] | filter by id(s) of related 'build'
$fields_beta_build_localizations = array('fields_beta_build_localizations_example'); // string[] | the fields to include for returned resources of type betaBuildLocalizations
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaBuildLocalizationsGetCollection($filter_locale, $filter_build, $fields_beta_build_localizations, $limit, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_locale** | [**string[]**](../Model/string.md)| filter by attribute &#39;locale&#39; | [optional]
 **filter_build** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;build&#39; | [optional]
 **fields_beta_build_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaBuildLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaBuildLocalizationsResponse**](../Model/BetaBuildLocalizationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaBuildLocalizationsGetInstance

> \OpenAPI\Client\Model\BetaBuildLocalizationResponse betaBuildLocalizationsGetInstance($id, $fields_beta_build_localizations, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_build_localizations = array('fields_beta_build_localizations_example'); // string[] | the fields to include for returned resources of type betaBuildLocalizations
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaBuildLocalizationsGetInstance($id, $fields_beta_build_localizations, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_build_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaBuildLocalizations | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaBuildLocalizationResponse**](../Model/BetaBuildLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaBuildLocalizationsUpdateInstance

> \OpenAPI\Client\Model\BetaBuildLocalizationResponse betaBuildLocalizationsUpdateInstance($id, $beta_build_localization_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaBuildLocalizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_build_localization_update_request = new \OpenAPI\Client\Model\BetaBuildLocalizationUpdateRequest(); // \OpenAPI\Client\Model\BetaBuildLocalizationUpdateRequest | BetaBuildLocalization representation

try {
    $result = $apiInstance->betaBuildLocalizationsUpdateInstance($id, $beta_build_localization_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaBuildLocalizationsApi->betaBuildLocalizationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_build_localization_update_request** | [**\OpenAPI\Client\Model\BetaBuildLocalizationUpdateRequest**](../Model/BetaBuildLocalizationUpdateRequest.md)| BetaBuildLocalization representation |

### Return type

[**\OpenAPI\Client\Model\BetaBuildLocalizationResponse**](../Model/BetaBuildLocalizationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

