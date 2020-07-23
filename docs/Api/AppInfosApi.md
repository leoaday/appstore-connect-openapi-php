# OpenAPI\Client\AppInfosApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appInfosAppInfoLocalizationsGetToManyRelated**](AppInfosApi.md#appInfosAppInfoLocalizationsGetToManyRelated) | **GET** /v1/appInfos/{id}/appInfoLocalizations | 
[**appInfosGetInstance**](AppInfosApi.md#appInfosGetInstance) | **GET** /v1/appInfos/{id} | 
[**appInfosPrimaryCategoryGetToOneRelated**](AppInfosApi.md#appInfosPrimaryCategoryGetToOneRelated) | **GET** /v1/appInfos/{id}/primaryCategory | 
[**appInfosPrimarySubcategoryOneGetToOneRelated**](AppInfosApi.md#appInfosPrimarySubcategoryOneGetToOneRelated) | **GET** /v1/appInfos/{id}/primarySubcategoryOne | 
[**appInfosPrimarySubcategoryTwoGetToOneRelated**](AppInfosApi.md#appInfosPrimarySubcategoryTwoGetToOneRelated) | **GET** /v1/appInfos/{id}/primarySubcategoryTwo | 
[**appInfosSecondaryCategoryGetToOneRelated**](AppInfosApi.md#appInfosSecondaryCategoryGetToOneRelated) | **GET** /v1/appInfos/{id}/secondaryCategory | 
[**appInfosSecondarySubcategoryOneGetToOneRelated**](AppInfosApi.md#appInfosSecondarySubcategoryOneGetToOneRelated) | **GET** /v1/appInfos/{id}/secondarySubcategoryOne | 
[**appInfosSecondarySubcategoryTwoGetToOneRelated**](AppInfosApi.md#appInfosSecondarySubcategoryTwoGetToOneRelated) | **GET** /v1/appInfos/{id}/secondarySubcategoryTwo | 
[**appInfosUpdateInstance**](AppInfosApi.md#appInfosUpdateInstance) | **PATCH** /v1/appInfos/{id} | 



## appInfosAppInfoLocalizationsGetToManyRelated

> \OpenAPI\Client\Model\AppInfoLocalizationsResponse appInfosAppInfoLocalizationsGetToManyRelated($id, $filter_locale, $fields_app_infos, $fields_app_info_localizations, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_locale = array('filter_locale_example'); // string[] | filter by attribute 'locale'
$fields_app_infos = array('fields_app_infos_example'); // string[] | the fields to include for returned resources of type appInfos
$fields_app_info_localizations = array('fields_app_info_localizations_example'); // string[] | the fields to include for returned resources of type appInfoLocalizations
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appInfosAppInfoLocalizationsGetToManyRelated($id, $filter_locale, $fields_app_infos, $fields_app_info_localizations, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosAppInfoLocalizationsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_locale** | [**string[]**](../Model/string.md)| filter by attribute &#39;locale&#39; | [optional]
 **fields_app_infos** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfos | [optional]
 **fields_app_info_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfoLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppInfoLocalizationsResponse**](../Model/AppInfoLocalizationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosGetInstance

> \OpenAPI\Client\Model\AppInfoResponse appInfosGetInstance($id, $fields_app_infos, $include, $fields_app_categories, $fields_app_info_localizations, $limit_app_info_localizations)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_infos = array('fields_app_infos_example'); // string[] | the fields to include for returned resources of type appInfos
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories
$fields_app_info_localizations = array('fields_app_info_localizations_example'); // string[] | the fields to include for returned resources of type appInfoLocalizations
$limit_app_info_localizations = 56; // int | maximum number of related appInfoLocalizations returned (when they are included)

try {
    $result = $apiInstance->appInfosGetInstance($id, $fields_app_infos, $include, $fields_app_categories, $fields_app_info_localizations, $limit_app_info_localizations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_infos** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfos | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]
 **fields_app_info_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfoLocalizations | [optional]
 **limit_app_info_localizations** | **int**| maximum number of related appInfoLocalizations returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppInfoResponse**](../Model/AppInfoResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosPrimaryCategoryGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosPrimaryCategoryGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosPrimaryCategoryGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosPrimaryCategoryGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosPrimarySubcategoryOneGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosPrimarySubcategoryOneGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosPrimarySubcategoryOneGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosPrimarySubcategoryOneGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosPrimarySubcategoryTwoGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosPrimarySubcategoryTwoGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosPrimarySubcategoryTwoGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosPrimarySubcategoryTwoGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosSecondaryCategoryGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosSecondaryCategoryGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosSecondaryCategoryGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosSecondaryCategoryGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosSecondarySubcategoryOneGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosSecondarySubcategoryOneGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosSecondarySubcategoryOneGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosSecondarySubcategoryOneGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosSecondarySubcategoryTwoGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appInfosSecondarySubcategoryTwoGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appInfosSecondarySubcategoryTwoGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosSecondarySubcategoryTwoGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoryResponse**](../Model/AppCategoryResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appInfosUpdateInstance

> \OpenAPI\Client\Model\AppInfoResponse appInfosUpdateInstance($id, $app_info_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppInfosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_info_update_request = new \OpenAPI\Client\Model\AppInfoUpdateRequest(); // \OpenAPI\Client\Model\AppInfoUpdateRequest | AppInfo representation

try {
    $result = $apiInstance->appInfosUpdateInstance($id, $app_info_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppInfosApi->appInfosUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_info_update_request** | [**\OpenAPI\Client\Model\AppInfoUpdateRequest**](../Model/AppInfoUpdateRequest.md)| AppInfo representation |

### Return type

[**\OpenAPI\Client\Model\AppInfoResponse**](../Model/AppInfoResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

