# OpenAPI\Client\BuildBetaDetailsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildBetaDetailsBuildGetToOneRelated**](BuildBetaDetailsApi.md#buildBetaDetailsBuildGetToOneRelated) | **GET** /v1/buildBetaDetails/{id}/build | 
[**buildBetaDetailsGetCollection**](BuildBetaDetailsApi.md#buildBetaDetailsGetCollection) | **GET** /v1/buildBetaDetails | 
[**buildBetaDetailsGetInstance**](BuildBetaDetailsApi.md#buildBetaDetailsGetInstance) | **GET** /v1/buildBetaDetails/{id} | 
[**buildBetaDetailsUpdateInstance**](BuildBetaDetailsApi.md#buildBetaDetailsUpdateInstance) | **PATCH** /v1/buildBetaDetails/{id} | 



## buildBetaDetailsBuildGetToOneRelated

> \OpenAPI\Client\Model\BuildResponse buildBetaDetailsBuildGetToOneRelated($id, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildBetaDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->buildBetaDetailsBuildGetToOneRelated($id, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildBetaDetailsApi->buildBetaDetailsBuildGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## buildBetaDetailsGetCollection

> \OpenAPI\Client\Model\BuildBetaDetailsResponse buildBetaDetailsGetCollection($filter_build, $filter_id, $fields_build_beta_details, $limit, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildBetaDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_build = array('filter_build_example'); // string[] | filter by id(s) of related 'build'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$fields_build_beta_details = array('fields_build_beta_details_example'); // string[] | the fields to include for returned resources of type buildBetaDetails
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->buildBetaDetailsGetCollection($filter_build, $filter_id, $fields_build_beta_details, $limit, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildBetaDetailsApi->buildBetaDetailsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_build** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;build&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **fields_build_beta_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildBetaDetails | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildBetaDetailsResponse**](../Model/BuildBetaDetailsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildBetaDetailsGetInstance

> \OpenAPI\Client\Model\BuildBetaDetailResponse buildBetaDetailsGetInstance($id, $fields_build_beta_details, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildBetaDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_build_beta_details = array('fields_build_beta_details_example'); // string[] | the fields to include for returned resources of type buildBetaDetails
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->buildBetaDetailsGetInstance($id, $fields_build_beta_details, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildBetaDetailsApi->buildBetaDetailsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_build_beta_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildBetaDetails | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildBetaDetailResponse**](../Model/BuildBetaDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildBetaDetailsUpdateInstance

> \OpenAPI\Client\Model\BuildBetaDetailResponse buildBetaDetailsUpdateInstance($id, $build_beta_detail_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildBetaDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_beta_detail_update_request = new \OpenAPI\Client\Model\BuildBetaDetailUpdateRequest(); // \OpenAPI\Client\Model\BuildBetaDetailUpdateRequest | BuildBetaDetail representation

try {
    $result = $apiInstance->buildBetaDetailsUpdateInstance($id, $build_beta_detail_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildBetaDetailsApi->buildBetaDetailsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_beta_detail_update_request** | [**\OpenAPI\Client\Model\BuildBetaDetailUpdateRequest**](../Model/BuildBetaDetailUpdateRequest.md)| BuildBetaDetail representation |

### Return type

[**\OpenAPI\Client\Model\BuildBetaDetailResponse**](../Model/BuildBetaDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

