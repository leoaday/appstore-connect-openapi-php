# OpenAPI\Client\BetaGroupsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaGroupsAppGetToOneRelated**](BetaGroupsApi.md#betaGroupsAppGetToOneRelated) | **GET** /v1/betaGroups/{id}/app | 
[**betaGroupsBetaTestersCreateToManyRelationship**](BetaGroupsApi.md#betaGroupsBetaTestersCreateToManyRelationship) | **POST** /v1/betaGroups/{id}/relationships/betaTesters | 
[**betaGroupsBetaTestersDeleteToManyRelationship**](BetaGroupsApi.md#betaGroupsBetaTestersDeleteToManyRelationship) | **DELETE** /v1/betaGroups/{id}/relationships/betaTesters | 
[**betaGroupsBetaTestersGetToManyRelated**](BetaGroupsApi.md#betaGroupsBetaTestersGetToManyRelated) | **GET** /v1/betaGroups/{id}/betaTesters | 
[**betaGroupsBetaTestersGetToManyRelationship**](BetaGroupsApi.md#betaGroupsBetaTestersGetToManyRelationship) | **GET** /v1/betaGroups/{id}/relationships/betaTesters | 
[**betaGroupsBuildsCreateToManyRelationship**](BetaGroupsApi.md#betaGroupsBuildsCreateToManyRelationship) | **POST** /v1/betaGroups/{id}/relationships/builds | 
[**betaGroupsBuildsDeleteToManyRelationship**](BetaGroupsApi.md#betaGroupsBuildsDeleteToManyRelationship) | **DELETE** /v1/betaGroups/{id}/relationships/builds | 
[**betaGroupsBuildsGetToManyRelated**](BetaGroupsApi.md#betaGroupsBuildsGetToManyRelated) | **GET** /v1/betaGroups/{id}/builds | 
[**betaGroupsBuildsGetToManyRelationship**](BetaGroupsApi.md#betaGroupsBuildsGetToManyRelationship) | **GET** /v1/betaGroups/{id}/relationships/builds | 
[**betaGroupsCreateInstance**](BetaGroupsApi.md#betaGroupsCreateInstance) | **POST** /v1/betaGroups | 
[**betaGroupsDeleteInstance**](BetaGroupsApi.md#betaGroupsDeleteInstance) | **DELETE** /v1/betaGroups/{id} | 
[**betaGroupsGetCollection**](BetaGroupsApi.md#betaGroupsGetCollection) | **GET** /v1/betaGroups | 
[**betaGroupsGetInstance**](BetaGroupsApi.md#betaGroupsGetInstance) | **GET** /v1/betaGroups/{id} | 
[**betaGroupsUpdateInstance**](BetaGroupsApi.md#betaGroupsUpdateInstance) | **PATCH** /v1/betaGroups/{id} | 



## betaGroupsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse betaGroupsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->betaGroupsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## betaGroupsBetaTestersCreateToManyRelationship

> betaGroupsBetaTestersCreateToManyRelationship($id, $beta_group_beta_testers_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_group_beta_testers_linkages_request = new \OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest(); // \OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest | List of related linkages

try {
    $apiInstance->betaGroupsBetaTestersCreateToManyRelationship($id, $beta_group_beta_testers_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBetaTestersCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_group_beta_testers_linkages_request** | [**\OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest**](../Model/BetaGroupBetaTestersLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBetaTestersDeleteToManyRelationship

> betaGroupsBetaTestersDeleteToManyRelationship($id, $beta_group_beta_testers_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_group_beta_testers_linkages_request = new \OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest(); // \OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest | List of related linkages

try {
    $apiInstance->betaGroupsBetaTestersDeleteToManyRelationship($id, $beta_group_beta_testers_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBetaTestersDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_group_beta_testers_linkages_request** | [**\OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesRequest**](../Model/BetaGroupBetaTestersLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBetaTestersGetToManyRelated

> \OpenAPI\Client\Model\BetaTestersResponse betaGroupsBetaTestersGetToManyRelated($id, $fields_beta_testers, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaGroupsBetaTestersGetToManyRelated($id, $fields_beta_testers, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBetaTestersGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaTestersResponse**](../Model/BetaTestersResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBetaTestersGetToManyRelationship

> \OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesResponse betaGroupsBetaTestersGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaGroupsBetaTestersGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBetaTestersGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaGroupBetaTestersLinkagesResponse**](../Model/BetaGroupBetaTestersLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBuildsCreateToManyRelationship

> betaGroupsBuildsCreateToManyRelationship($id, $beta_group_builds_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_group_builds_linkages_request = new \OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest(); // \OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaGroupsBuildsCreateToManyRelationship($id, $beta_group_builds_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBuildsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_group_builds_linkages_request** | [**\OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest**](../Model/BetaGroupBuildsLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBuildsDeleteToManyRelationship

> betaGroupsBuildsDeleteToManyRelationship($id, $beta_group_builds_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_group_builds_linkages_request = new \OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest(); // \OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaGroupsBuildsDeleteToManyRelationship($id, $beta_group_builds_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBuildsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_group_builds_linkages_request** | [**\OpenAPI\Client\Model\BetaGroupBuildsLinkagesRequest**](../Model/BetaGroupBuildsLinkagesRequest.md)| List of related linkages |

### Return type

void (empty response body)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsBuildsGetToManyRelated

> \OpenAPI\Client\Model\BuildsResponse betaGroupsBuildsGetToManyRelated($id, $fields_builds, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaGroupsBuildsGetToManyRelated($id, $fields_builds, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBuildsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## betaGroupsBuildsGetToManyRelationship

> \OpenAPI\Client\Model\BetaGroupBuildsLinkagesResponse betaGroupsBuildsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaGroupsBuildsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsBuildsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaGroupBuildsLinkagesResponse**](../Model/BetaGroupBuildsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsCreateInstance

> \OpenAPI\Client\Model\BetaGroupResponse betaGroupsCreateInstance($beta_group_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_group_create_request = new \OpenAPI\Client\Model\BetaGroupCreateRequest(); // \OpenAPI\Client\Model\BetaGroupCreateRequest | BetaGroup representation

try {
    $result = $apiInstance->betaGroupsCreateInstance($beta_group_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_group_create_request** | [**\OpenAPI\Client\Model\BetaGroupCreateRequest**](../Model/BetaGroupCreateRequest.md)| BetaGroup representation |

### Return type

[**\OpenAPI\Client\Model\BetaGroupResponse**](../Model/BetaGroupResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsDeleteInstance

> betaGroupsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->betaGroupsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## betaGroupsGetCollection

> \OpenAPI\Client\Model\BetaGroupsResponse betaGroupsGetCollection($filter_is_internal_group, $filter_name, $filter_public_link, $filter_public_link_enabled, $filter_public_link_limit_enabled, $filter_app, $filter_builds, $filter_id, $sort, $fields_beta_groups, $limit, $include, $fields_builds, $fields_beta_testers, $fields_apps, $limit_beta_testers, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_is_internal_group = array('filter_is_internal_group_example'); // string[] | filter by attribute 'isInternalGroup'
$filter_name = array('filter_name_example'); // string[] | filter by attribute 'name'
$filter_public_link = array('filter_public_link_example'); // string[] | filter by attribute 'publicLink'
$filter_public_link_enabled = array('filter_public_link_enabled_example'); // string[] | filter by attribute 'publicLinkEnabled'
$filter_public_link_limit_enabled = array('filter_public_link_limit_enabled_example'); // string[] | filter by attribute 'publicLinkLimitEnabled'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$filter_builds = array('filter_builds_example'); // string[] | filter by id(s) of related 'builds'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_beta_testers = 56; // int | maximum number of related betaTesters returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->betaGroupsGetCollection($filter_is_internal_group, $filter_name, $filter_public_link, $filter_public_link_enabled, $filter_public_link_limit_enabled, $filter_app, $filter_builds, $filter_id, $sort, $fields_beta_groups, $limit, $include, $fields_builds, $fields_beta_testers, $fields_apps, $limit_beta_testers, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_is_internal_group** | [**string[]**](../Model/string.md)| filter by attribute &#39;isInternalGroup&#39; | [optional]
 **filter_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;name&#39; | [optional]
 **filter_public_link** | [**string[]**](../Model/string.md)| filter by attribute &#39;publicLink&#39; | [optional]
 **filter_public_link_enabled** | [**string[]**](../Model/string.md)| filter by attribute &#39;publicLinkEnabled&#39; | [optional]
 **filter_public_link_limit_enabled** | [**string[]**](../Model/string.md)| filter by attribute &#39;publicLinkLimitEnabled&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **filter_builds** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;builds&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_beta_testers** | **int**| maximum number of related betaTesters returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaGroupsResponse**](../Model/BetaGroupsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsGetInstance

> \OpenAPI\Client\Model\BetaGroupResponse betaGroupsGetInstance($id, $fields_beta_groups, $include, $fields_builds, $fields_beta_testers, $fields_apps, $limit_beta_testers, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_beta_testers = 56; // int | maximum number of related betaTesters returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->betaGroupsGetInstance($id, $fields_beta_groups, $include, $fields_builds, $fields_beta_testers, $fields_apps, $limit_beta_testers, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_beta_testers** | **int**| maximum number of related betaTesters returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaGroupResponse**](../Model/BetaGroupResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaGroupsUpdateInstance

> \OpenAPI\Client\Model\BetaGroupResponse betaGroupsUpdateInstance($id, $beta_group_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_group_update_request = new \OpenAPI\Client\Model\BetaGroupUpdateRequest(); // \OpenAPI\Client\Model\BetaGroupUpdateRequest | BetaGroup representation

try {
    $result = $apiInstance->betaGroupsUpdateInstance($id, $beta_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaGroupsApi->betaGroupsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_group_update_request** | [**\OpenAPI\Client\Model\BetaGroupUpdateRequest**](../Model/BetaGroupUpdateRequest.md)| BetaGroup representation |

### Return type

[**\OpenAPI\Client\Model\BetaGroupResponse**](../Model/BetaGroupResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

