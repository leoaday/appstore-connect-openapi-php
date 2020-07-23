# OpenAPI\Client\PreReleaseVersionsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preReleaseVersionsAppGetToOneRelated**](PreReleaseVersionsApi.md#preReleaseVersionsAppGetToOneRelated) | **GET** /v1/preReleaseVersions/{id}/app | 
[**preReleaseVersionsBuildsGetToManyRelated**](PreReleaseVersionsApi.md#preReleaseVersionsBuildsGetToManyRelated) | **GET** /v1/preReleaseVersions/{id}/builds | 
[**preReleaseVersionsGetCollection**](PreReleaseVersionsApi.md#preReleaseVersionsGetCollection) | **GET** /v1/preReleaseVersions | 
[**preReleaseVersionsGetInstance**](PreReleaseVersionsApi.md#preReleaseVersionsGetInstance) | **GET** /v1/preReleaseVersions/{id} | 



## preReleaseVersionsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse preReleaseVersionsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreReleaseVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->preReleaseVersionsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreReleaseVersionsApi->preReleaseVersionsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## preReleaseVersionsBuildsGetToManyRelated

> \OpenAPI\Client\Model\BuildsResponse preReleaseVersionsBuildsGetToManyRelated($id, $fields_builds, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreReleaseVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->preReleaseVersionsBuildsGetToManyRelated($id, $fields_builds, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreReleaseVersionsApi->preReleaseVersionsBuildsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildsResponse**](../Model/BuildsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## preReleaseVersionsGetCollection

> \OpenAPI\Client\Model\PreReleaseVersionsResponse preReleaseVersionsGetCollection($filter_builds_expired, $filter_builds_processing_state, $filter_platform, $filter_version, $filter_app, $filter_builds, $sort, $fields_pre_release_versions, $limit, $include, $fields_builds, $fields_apps, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreReleaseVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_builds_expired = array('filter_builds_expired_example'); // string[] | filter by attribute 'builds.expired'
$filter_builds_processing_state = array('filter_builds_processing_state_example'); // string[] | filter by attribute 'builds.processingState'
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_version = array('filter_version_example'); // string[] | filter by attribute 'version'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$filter_builds = array('filter_builds_example'); // string[] | filter by id(s) of related 'builds'
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->preReleaseVersionsGetCollection($filter_builds_expired, $filter_builds_processing_state, $filter_platform, $filter_version, $filter_app, $filter_builds, $sort, $fields_pre_release_versions, $limit, $include, $fields_builds, $fields_apps, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreReleaseVersionsApi->preReleaseVersionsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_builds_expired** | [**string[]**](../Model/string.md)| filter by attribute &#39;builds.expired&#39; | [optional]
 **filter_builds_processing_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;builds.processingState&#39; | [optional]
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_version** | [**string[]**](../Model/string.md)| filter by attribute &#39;version&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **filter_builds** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;builds&#39; | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\PreReleaseVersionsResponse**](../Model/PreReleaseVersionsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## preReleaseVersionsGetInstance

> \OpenAPI\Client\Model\PrereleaseVersionResponse preReleaseVersionsGetInstance($id, $fields_pre_release_versions, $include, $fields_builds, $fields_apps, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreReleaseVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->preReleaseVersionsGetInstance($id, $fields_pre_release_versions, $include, $fields_builds, $fields_apps, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreReleaseVersionsApi->preReleaseVersionsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\PrereleaseVersionResponse**](../Model/PrereleaseVersionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

