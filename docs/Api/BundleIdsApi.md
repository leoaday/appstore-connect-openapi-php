# OpenAPI\Client\BundleIdsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleIdsAppGetToOneRelated**](BundleIdsApi.md#bundleIdsAppGetToOneRelated) | **GET** /v1/bundleIds/{id}/app | 
[**bundleIdsBundleIdCapabilitiesGetToManyRelated**](BundleIdsApi.md#bundleIdsBundleIdCapabilitiesGetToManyRelated) | **GET** /v1/bundleIds/{id}/bundleIdCapabilities | 
[**bundleIdsCreateInstance**](BundleIdsApi.md#bundleIdsCreateInstance) | **POST** /v1/bundleIds | 
[**bundleIdsDeleteInstance**](BundleIdsApi.md#bundleIdsDeleteInstance) | **DELETE** /v1/bundleIds/{id} | 
[**bundleIdsGetCollection**](BundleIdsApi.md#bundleIdsGetCollection) | **GET** /v1/bundleIds | 
[**bundleIdsGetInstance**](BundleIdsApi.md#bundleIdsGetInstance) | **GET** /v1/bundleIds/{id} | 
[**bundleIdsProfilesGetToManyRelated**](BundleIdsApi.md#bundleIdsProfilesGetToManyRelated) | **GET** /v1/bundleIds/{id}/profiles | 
[**bundleIdsUpdateInstance**](BundleIdsApi.md#bundleIdsUpdateInstance) | **PATCH** /v1/bundleIds/{id} | 



## bundleIdsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse bundleIdsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->bundleIdsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## bundleIdsBundleIdCapabilitiesGetToManyRelated

> \OpenAPI\Client\Model\BundleIdCapabilitiesResponse bundleIdsBundleIdCapabilitiesGetToManyRelated($id, $fields_bundle_id_capabilities, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_bundle_id_capabilities = array('fields_bundle_id_capabilities_example'); // string[] | the fields to include for returned resources of type bundleIdCapabilities
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->bundleIdsBundleIdCapabilitiesGetToManyRelated($id, $fields_bundle_id_capabilities, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsBundleIdCapabilitiesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_bundle_id_capabilities** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIdCapabilities | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleIdCapabilitiesResponse**](../Model/BundleIdCapabilitiesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdsCreateInstance

> \OpenAPI\Client\Model\BundleIdResponse bundleIdsCreateInstance($bundle_id_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_id_create_request = new \OpenAPI\Client\Model\BundleIdCreateRequest(); // \OpenAPI\Client\Model\BundleIdCreateRequest | BundleId representation

try {
    $result = $apiInstance->bundleIdsCreateInstance($bundle_id_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id_create_request** | [**\OpenAPI\Client\Model\BundleIdCreateRequest**](../Model/BundleIdCreateRequest.md)| BundleId representation |

### Return type

[**\OpenAPI\Client\Model\BundleIdResponse**](../Model/BundleIdResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdsDeleteInstance

> bundleIdsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->bundleIdsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## bundleIdsGetCollection

> \OpenAPI\Client\Model\BundleIdsResponse bundleIdsGetCollection($filter_identifier, $filter_name, $filter_platform, $filter_seed_id, $filter_id, $sort, $fields_bundle_ids, $limit, $include, $fields_bundle_id_capabilities, $fields_profiles, $fields_apps, $limit_bundle_id_capabilities, $limit_profiles)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_identifier = array('filter_identifier_example'); // string[] | filter by attribute 'identifier'
$filter_name = array('filter_name_example'); // string[] | filter by attribute 'name'
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_seed_id = array('filter_seed_id_example'); // string[] | filter by attribute 'seedId'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_bundle_ids = array('fields_bundle_ids_example'); // string[] | the fields to include for returned resources of type bundleIds
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_bundle_id_capabilities = array('fields_bundle_id_capabilities_example'); // string[] | the fields to include for returned resources of type bundleIdCapabilities
$fields_profiles = array('fields_profiles_example'); // string[] | the fields to include for returned resources of type profiles
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_bundle_id_capabilities = 56; // int | maximum number of related bundleIdCapabilities returned (when they are included)
$limit_profiles = 56; // int | maximum number of related profiles returned (when they are included)

try {
    $result = $apiInstance->bundleIdsGetCollection($filter_identifier, $filter_name, $filter_platform, $filter_seed_id, $filter_id, $sort, $fields_bundle_ids, $limit, $include, $fields_bundle_id_capabilities, $fields_profiles, $fields_apps, $limit_bundle_id_capabilities, $limit_profiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_identifier** | [**string[]**](../Model/string.md)| filter by attribute &#39;identifier&#39; | [optional]
 **filter_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;name&#39; | [optional]
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_seed_id** | [**string[]**](../Model/string.md)| filter by attribute &#39;seedId&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_bundle_ids** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIds | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_bundle_id_capabilities** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIdCapabilities | [optional]
 **fields_profiles** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type profiles | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_bundle_id_capabilities** | **int**| maximum number of related bundleIdCapabilities returned (when they are included) | [optional]
 **limit_profiles** | **int**| maximum number of related profiles returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleIdsResponse**](../Model/BundleIdsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdsGetInstance

> \OpenAPI\Client\Model\BundleIdResponse bundleIdsGetInstance($id, $fields_bundle_ids, $include, $fields_bundle_id_capabilities, $fields_profiles, $fields_apps, $limit_bundle_id_capabilities, $limit_profiles)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_bundle_ids = array('fields_bundle_ids_example'); // string[] | the fields to include for returned resources of type bundleIds
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_bundle_id_capabilities = array('fields_bundle_id_capabilities_example'); // string[] | the fields to include for returned resources of type bundleIdCapabilities
$fields_profiles = array('fields_profiles_example'); // string[] | the fields to include for returned resources of type profiles
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_bundle_id_capabilities = 56; // int | maximum number of related bundleIdCapabilities returned (when they are included)
$limit_profiles = 56; // int | maximum number of related profiles returned (when they are included)

try {
    $result = $apiInstance->bundleIdsGetInstance($id, $fields_bundle_ids, $include, $fields_bundle_id_capabilities, $fields_profiles, $fields_apps, $limit_bundle_id_capabilities, $limit_profiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_bundle_ids** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIds | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_bundle_id_capabilities** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type bundleIdCapabilities | [optional]
 **fields_profiles** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type profiles | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_bundle_id_capabilities** | **int**| maximum number of related bundleIdCapabilities returned (when they are included) | [optional]
 **limit_profiles** | **int**| maximum number of related profiles returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleIdResponse**](../Model/BundleIdResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdsProfilesGetToManyRelated

> \OpenAPI\Client\Model\ProfilesResponse bundleIdsProfilesGetToManyRelated($id, $fields_profiles, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_profiles = array('fields_profiles_example'); // string[] | the fields to include for returned resources of type profiles
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->bundleIdsProfilesGetToManyRelated($id, $fields_profiles, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsProfilesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_profiles** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type profiles | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\ProfilesResponse**](../Model/ProfilesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bundleIdsUpdateInstance

> \OpenAPI\Client\Model\BundleIdResponse bundleIdsUpdateInstance($id, $bundle_id_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BundleIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$bundle_id_update_request = new \OpenAPI\Client\Model\BundleIdUpdateRequest(); // \OpenAPI\Client\Model\BundleIdUpdateRequest | BundleId representation

try {
    $result = $apiInstance->bundleIdsUpdateInstance($id, $bundle_id_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleIdsApi->bundleIdsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **bundle_id_update_request** | [**\OpenAPI\Client\Model\BundleIdUpdateRequest**](../Model/BundleIdUpdateRequest.md)| BundleId representation |

### Return type

[**\OpenAPI\Client\Model\BundleIdResponse**](../Model/BundleIdResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

