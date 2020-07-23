# OpenAPI\Client\AppCategoriesApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appCategoriesGetCollection**](AppCategoriesApi.md#appCategoriesGetCollection) | **GET** /v1/appCategories | 
[**appCategoriesGetInstance**](AppCategoriesApi.md#appCategoriesGetInstance) | **GET** /v1/appCategories/{id} | 
[**appCategoriesParentGetToOneRelated**](AppCategoriesApi.md#appCategoriesParentGetToOneRelated) | **GET** /v1/appCategories/{id}/parent | 
[**appCategoriesSubcategoriesGetToManyRelated**](AppCategoriesApi.md#appCategoriesSubcategoriesGetToManyRelated) | **GET** /v1/appCategories/{id}/subcategories | 



## appCategoriesGetCollection

> \OpenAPI\Client\Model\AppCategoriesResponse appCategoriesGetCollection($filter_platforms, $exists_parent, $fields_app_categories, $limit, $include, $limit_subcategories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_platforms = array('filter_platforms_example'); // string[] | filter by attribute 'platforms'
$exists_parent = array('exists_parent_example'); // string[] | filter by existence or non-existence of related 'parent'
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$limit_subcategories = 56; // int | maximum number of related subcategories returned (when they are included)

try {
    $result = $apiInstance->appCategoriesGetCollection($filter_platforms, $exists_parent, $fields_app_categories, $limit, $include, $limit_subcategories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppCategoriesApi->appCategoriesGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_platforms** | [**string[]**](../Model/string.md)| filter by attribute &#39;platforms&#39; | [optional]
 **exists_parent** | [**string[]**](../Model/string.md)| filter by existence or non-existence of related &#39;parent&#39; | [optional]
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **limit_subcategories** | **int**| maximum number of related subcategories returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoriesResponse**](../Model/AppCategoriesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appCategoriesGetInstance

> \OpenAPI\Client\Model\AppCategoryResponse appCategoriesGetInstance($id, $fields_app_categories, $include, $limit_subcategories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$limit_subcategories = 56; // int | maximum number of related subcategories returned (when they are included)

try {
    $result = $apiInstance->appCategoriesGetInstance($id, $fields_app_categories, $include, $limit_subcategories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppCategoriesApi->appCategoriesGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **limit_subcategories** | **int**| maximum number of related subcategories returned (when they are included) | [optional]

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


## appCategoriesParentGetToOneRelated

> \OpenAPI\Client\Model\AppCategoryResponse appCategoriesParentGetToOneRelated($id, $fields_app_categories)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories

try {
    $result = $apiInstance->appCategoriesParentGetToOneRelated($id, $fields_app_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppCategoriesApi->appCategoriesParentGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## appCategoriesSubcategoriesGetToManyRelated

> \OpenAPI\Client\Model\AppCategoriesResponse appCategoriesSubcategoriesGetToManyRelated($id, $fields_app_categories, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appCategoriesSubcategoriesGetToManyRelated($id, $fields_app_categories, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppCategoriesApi->appCategoriesSubcategoriesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppCategoriesResponse**](../Model/AppCategoriesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

