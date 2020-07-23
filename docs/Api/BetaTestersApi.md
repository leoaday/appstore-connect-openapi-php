# OpenAPI\Client\BetaTestersApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaTestersAppsDeleteToManyRelationship**](BetaTestersApi.md#betaTestersAppsDeleteToManyRelationship) | **DELETE** /v1/betaTesters/{id}/relationships/apps | 
[**betaTestersAppsGetToManyRelated**](BetaTestersApi.md#betaTestersAppsGetToManyRelated) | **GET** /v1/betaTesters/{id}/apps | 
[**betaTestersAppsGetToManyRelationship**](BetaTestersApi.md#betaTestersAppsGetToManyRelationship) | **GET** /v1/betaTesters/{id}/relationships/apps | 
[**betaTestersBetaGroupsCreateToManyRelationship**](BetaTestersApi.md#betaTestersBetaGroupsCreateToManyRelationship) | **POST** /v1/betaTesters/{id}/relationships/betaGroups | 
[**betaTestersBetaGroupsDeleteToManyRelationship**](BetaTestersApi.md#betaTestersBetaGroupsDeleteToManyRelationship) | **DELETE** /v1/betaTesters/{id}/relationships/betaGroups | 
[**betaTestersBetaGroupsGetToManyRelated**](BetaTestersApi.md#betaTestersBetaGroupsGetToManyRelated) | **GET** /v1/betaTesters/{id}/betaGroups | 
[**betaTestersBetaGroupsGetToManyRelationship**](BetaTestersApi.md#betaTestersBetaGroupsGetToManyRelationship) | **GET** /v1/betaTesters/{id}/relationships/betaGroups | 
[**betaTestersBuildsCreateToManyRelationship**](BetaTestersApi.md#betaTestersBuildsCreateToManyRelationship) | **POST** /v1/betaTesters/{id}/relationships/builds | 
[**betaTestersBuildsDeleteToManyRelationship**](BetaTestersApi.md#betaTestersBuildsDeleteToManyRelationship) | **DELETE** /v1/betaTesters/{id}/relationships/builds | 
[**betaTestersBuildsGetToManyRelated**](BetaTestersApi.md#betaTestersBuildsGetToManyRelated) | **GET** /v1/betaTesters/{id}/builds | 
[**betaTestersBuildsGetToManyRelationship**](BetaTestersApi.md#betaTestersBuildsGetToManyRelationship) | **GET** /v1/betaTesters/{id}/relationships/builds | 
[**betaTestersCreateInstance**](BetaTestersApi.md#betaTestersCreateInstance) | **POST** /v1/betaTesters | 
[**betaTestersDeleteInstance**](BetaTestersApi.md#betaTestersDeleteInstance) | **DELETE** /v1/betaTesters/{id} | 
[**betaTestersGetCollection**](BetaTestersApi.md#betaTestersGetCollection) | **GET** /v1/betaTesters | 
[**betaTestersGetInstance**](BetaTestersApi.md#betaTestersGetInstance) | **GET** /v1/betaTesters/{id} | 



## betaTestersAppsDeleteToManyRelationship

> betaTestersAppsDeleteToManyRelationship($id, $beta_tester_apps_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_tester_apps_linkages_request = new \OpenAPI\Client\Model\BetaTesterAppsLinkagesRequest(); // \OpenAPI\Client\Model\BetaTesterAppsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaTestersAppsDeleteToManyRelationship($id, $beta_tester_apps_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersAppsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_tester_apps_linkages_request** | [**\OpenAPI\Client\Model\BetaTesterAppsLinkagesRequest**](../Model/BetaTesterAppsLinkagesRequest.md)| List of related linkages |

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


## betaTestersAppsGetToManyRelated

> \OpenAPI\Client\Model\AppsResponse betaTestersAppsGetToManyRelated($id, $fields_apps, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersAppsGetToManyRelated($id, $fields_apps, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersAppsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppsResponse**](../Model/AppsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaTestersAppsGetToManyRelationship

> \OpenAPI\Client\Model\BetaTesterAppsLinkagesResponse betaTestersAppsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersAppsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersAppsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaTesterAppsLinkagesResponse**](../Model/BetaTesterAppsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaTestersBetaGroupsCreateToManyRelationship

> betaTestersBetaGroupsCreateToManyRelationship($id, $beta_tester_beta_groups_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_tester_beta_groups_linkages_request = new \OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest(); // \OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaTestersBetaGroupsCreateToManyRelationship($id, $beta_tester_beta_groups_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBetaGroupsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_tester_beta_groups_linkages_request** | [**\OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest**](../Model/BetaTesterBetaGroupsLinkagesRequest.md)| List of related linkages |

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


## betaTestersBetaGroupsDeleteToManyRelationship

> betaTestersBetaGroupsDeleteToManyRelationship($id, $beta_tester_beta_groups_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_tester_beta_groups_linkages_request = new \OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest(); // \OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaTestersBetaGroupsDeleteToManyRelationship($id, $beta_tester_beta_groups_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBetaGroupsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_tester_beta_groups_linkages_request** | [**\OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesRequest**](../Model/BetaTesterBetaGroupsLinkagesRequest.md)| List of related linkages |

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


## betaTestersBetaGroupsGetToManyRelated

> \OpenAPI\Client\Model\BetaGroupsResponse betaTestersBetaGroupsGetToManyRelated($id, $fields_beta_groups, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersBetaGroupsGetToManyRelated($id, $fields_beta_groups, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBetaGroupsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **limit** | **int**| maximum resources per page | [optional]

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


## betaTestersBetaGroupsGetToManyRelationship

> \OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesResponse betaTestersBetaGroupsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersBetaGroupsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBetaGroupsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaTesterBetaGroupsLinkagesResponse**](../Model/BetaTesterBetaGroupsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaTestersBuildsCreateToManyRelationship

> betaTestersBuildsCreateToManyRelationship($id, $beta_tester_builds_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_tester_builds_linkages_request = new \OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest(); // \OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaTestersBuildsCreateToManyRelationship($id, $beta_tester_builds_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBuildsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_tester_builds_linkages_request** | [**\OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest**](../Model/BetaTesterBuildsLinkagesRequest.md)| List of related linkages |

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


## betaTestersBuildsDeleteToManyRelationship

> betaTestersBuildsDeleteToManyRelationship($id, $beta_tester_builds_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$beta_tester_builds_linkages_request = new \OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest(); // \OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest | List of related linkages

try {
    $apiInstance->betaTestersBuildsDeleteToManyRelationship($id, $beta_tester_builds_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBuildsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **beta_tester_builds_linkages_request** | [**\OpenAPI\Client\Model\BetaTesterBuildsLinkagesRequest**](../Model/BetaTesterBuildsLinkagesRequest.md)| List of related linkages |

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


## betaTestersBuildsGetToManyRelated

> \OpenAPI\Client\Model\BuildsResponse betaTestersBuildsGetToManyRelated($id, $fields_builds, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersBuildsGetToManyRelated($id, $fields_builds, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBuildsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## betaTestersBuildsGetToManyRelationship

> \OpenAPI\Client\Model\BetaTesterBuildsLinkagesResponse betaTestersBuildsGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->betaTestersBuildsGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersBuildsGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaTesterBuildsLinkagesResponse**](../Model/BetaTesterBuildsLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaTestersCreateInstance

> \OpenAPI\Client\Model\BetaTesterResponse betaTestersCreateInstance($beta_tester_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_tester_create_request = new \OpenAPI\Client\Model\BetaTesterCreateRequest(); // \OpenAPI\Client\Model\BetaTesterCreateRequest | BetaTester representation

try {
    $result = $apiInstance->betaTestersCreateInstance($beta_tester_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_tester_create_request** | [**\OpenAPI\Client\Model\BetaTesterCreateRequest**](../Model/BetaTesterCreateRequest.md)| BetaTester representation |

### Return type

[**\OpenAPI\Client\Model\BetaTesterResponse**](../Model/BetaTesterResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaTestersDeleteInstance

> betaTestersDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->betaTestersDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## betaTestersGetCollection

> \OpenAPI\Client\Model\BetaTestersResponse betaTestersGetCollection($filter_email, $filter_first_name, $filter_invite_type, $filter_last_name, $filter_apps, $filter_beta_groups, $filter_builds, $sort, $fields_beta_testers, $limit, $include, $fields_beta_groups, $fields_builds, $fields_apps, $limit_apps, $limit_beta_groups, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_email = array('filter_email_example'); // string[] | filter by attribute 'email'
$filter_first_name = array('filter_first_name_example'); // string[] | filter by attribute 'firstName'
$filter_invite_type = array('filter_invite_type_example'); // string[] | filter by attribute 'inviteType'
$filter_last_name = array('filter_last_name_example'); // string[] | filter by attribute 'lastName'
$filter_apps = array('filter_apps_example'); // string[] | filter by id(s) of related 'apps'
$filter_beta_groups = array('filter_beta_groups_example'); // string[] | filter by id(s) of related 'betaGroups'
$filter_builds = array('filter_builds_example'); // string[] | filter by id(s) of related 'builds'
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_apps = 56; // int | maximum number of related apps returned (when they are included)
$limit_beta_groups = 56; // int | maximum number of related betaGroups returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->betaTestersGetCollection($filter_email, $filter_first_name, $filter_invite_type, $filter_last_name, $filter_apps, $filter_beta_groups, $filter_builds, $sort, $fields_beta_testers, $limit, $include, $fields_beta_groups, $fields_builds, $fields_apps, $limit_apps, $limit_beta_groups, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_email** | [**string[]**](../Model/string.md)| filter by attribute &#39;email&#39; | [optional]
 **filter_first_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;firstName&#39; | [optional]
 **filter_invite_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;inviteType&#39; | [optional]
 **filter_last_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;lastName&#39; | [optional]
 **filter_apps** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;apps&#39; | [optional]
 **filter_beta_groups** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;betaGroups&#39; | [optional]
 **filter_builds** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;builds&#39; | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_apps** | **int**| maximum number of related apps returned (when they are included) | [optional]
 **limit_beta_groups** | **int**| maximum number of related betaGroups returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

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


## betaTestersGetInstance

> \OpenAPI\Client\Model\BetaTesterResponse betaTestersGetInstance($id, $fields_beta_testers, $include, $fields_beta_groups, $fields_builds, $fields_apps, $limit_apps, $limit_beta_groups, $limit_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaTestersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_apps = 56; // int | maximum number of related apps returned (when they are included)
$limit_beta_groups = 56; // int | maximum number of related betaGroups returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)

try {
    $result = $apiInstance->betaTestersGetInstance($id, $fields_beta_testers, $include, $fields_beta_groups, $fields_builds, $fields_apps, $limit_apps, $limit_beta_groups, $limit_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaTestersApi->betaTestersGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_apps** | **int**| maximum number of related apps returned (when they are included) | [optional]
 **limit_beta_groups** | **int**| maximum number of related betaGroups returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaTesterResponse**](../Model/BetaTesterResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

