# OpenAPI\Client\BetaAppReviewDetailsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaAppReviewDetailsAppGetToOneRelated**](BetaAppReviewDetailsApi.md#betaAppReviewDetailsAppGetToOneRelated) | **GET** /v1/betaAppReviewDetails/{id}/app | 
[**betaAppReviewDetailsGetCollection**](BetaAppReviewDetailsApi.md#betaAppReviewDetailsGetCollection) | **GET** /v1/betaAppReviewDetails | 
[**betaAppReviewDetailsGetInstance**](BetaAppReviewDetailsApi.md#betaAppReviewDetailsGetInstance) | **GET** /v1/betaAppReviewDetails/{id} | 
[**betaAppReviewDetailsUpdateInstance**](BetaAppReviewDetailsApi.md#betaAppReviewDetailsUpdateInstance) | **PATCH** /v1/betaAppReviewDetails/{id} | 



## betaAppReviewDetailsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse betaAppReviewDetailsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppReviewDetailsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewDetailsApi->betaAppReviewDetailsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## betaAppReviewDetailsGetCollection

> \OpenAPI\Client\Model\BetaAppReviewDetailsResponse betaAppReviewDetailsGetCollection($filter_app, $fields_beta_app_review_details, $limit, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$fields_beta_app_review_details = array('fields_beta_app_review_details_example'); // string[] | the fields to include for returned resources of type betaAppReviewDetails
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppReviewDetailsGetCollection($filter_app, $fields_beta_app_review_details, $limit, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewDetailsApi->betaAppReviewDetailsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; |
 **fields_beta_app_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewDetails | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewDetailsResponse**](../Model/BetaAppReviewDetailsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppReviewDetailsGetInstance

> \OpenAPI\Client\Model\BetaAppReviewDetailResponse betaAppReviewDetailsGetInstance($id, $fields_beta_app_review_details, $include, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_review_details = array('fields_beta_app_review_details_example'); // string[] | the fields to include for returned resources of type betaAppReviewDetails
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaAppReviewDetailsGetInstance($id, $fields_beta_app_review_details, $include, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewDetailsApi->betaAppReviewDetailsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewDetails | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewDetailResponse**](../Model/BetaAppReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppReviewDetailsUpdateInstance

> \OpenAPI\Client\Model\BetaAppReviewDetailResponse betaAppReviewDetailsUpdateInstance($id, $beta_app_review_detail_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_app_review_detail_update_request = new \OpenAPI\Client\Model\BetaAppReviewDetailUpdateRequest(); // \OpenAPI\Client\Model\BetaAppReviewDetailUpdateRequest | BetaAppReviewDetail representation

try {
    $result = $apiInstance->betaAppReviewDetailsUpdateInstance($id, $beta_app_review_detail_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewDetailsApi->betaAppReviewDetailsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_app_review_detail_update_request** | [**\OpenAPI\Client\Model\BetaAppReviewDetailUpdateRequest**](../Model/BetaAppReviewDetailUpdateRequest.md)| BetaAppReviewDetail representation |

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewDetailResponse**](../Model/BetaAppReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

