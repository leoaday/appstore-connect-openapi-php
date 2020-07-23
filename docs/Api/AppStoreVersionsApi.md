# OpenAPI\Client\AppStoreVersionsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreVersionsAgeRatingDeclarationGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsAgeRatingDeclarationGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/ageRatingDeclaration | 
[**appStoreVersionsAppStoreReviewDetailGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsAppStoreReviewDetailGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/appStoreReviewDetail | 
[**appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated**](AppStoreVersionsApi.md#appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated) | **GET** /v1/appStoreVersions/{id}/appStoreVersionLocalizations | 
[**appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/appStoreVersionPhasedRelease | 
[**appStoreVersionsAppStoreVersionSubmissionGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsAppStoreVersionSubmissionGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/appStoreVersionSubmission | 
[**appStoreVersionsBuildGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsBuildGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/build | 
[**appStoreVersionsBuildGetToOneRelationship**](AppStoreVersionsApi.md#appStoreVersionsBuildGetToOneRelationship) | **GET** /v1/appStoreVersions/{id}/relationships/build | 
[**appStoreVersionsBuildUpdateToOneRelationship**](AppStoreVersionsApi.md#appStoreVersionsBuildUpdateToOneRelationship) | **PATCH** /v1/appStoreVersions/{id}/relationships/build | 
[**appStoreVersionsCreateInstance**](AppStoreVersionsApi.md#appStoreVersionsCreateInstance) | **POST** /v1/appStoreVersions | 
[**appStoreVersionsDeleteInstance**](AppStoreVersionsApi.md#appStoreVersionsDeleteInstance) | **DELETE** /v1/appStoreVersions/{id} | 
[**appStoreVersionsGetInstance**](AppStoreVersionsApi.md#appStoreVersionsGetInstance) | **GET** /v1/appStoreVersions/{id} | 
[**appStoreVersionsIdfaDeclarationGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsIdfaDeclarationGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/idfaDeclaration | 
[**appStoreVersionsRoutingAppCoverageGetToOneRelated**](AppStoreVersionsApi.md#appStoreVersionsRoutingAppCoverageGetToOneRelated) | **GET** /v1/appStoreVersions/{id}/routingAppCoverage | 
[**appStoreVersionsUpdateInstance**](AppStoreVersionsApi.md#appStoreVersionsUpdateInstance) | **PATCH** /v1/appStoreVersions/{id} | 



## appStoreVersionsAgeRatingDeclarationGetToOneRelated

> \OpenAPI\Client\Model\AgeRatingDeclarationResponse appStoreVersionsAgeRatingDeclarationGetToOneRelated($id, $fields_age_rating_declarations)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_age_rating_declarations = array('fields_age_rating_declarations_example'); // string[] | the fields to include for returned resources of type ageRatingDeclarations

try {
    $result = $apiInstance->appStoreVersionsAgeRatingDeclarationGetToOneRelated($id, $fields_age_rating_declarations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsAgeRatingDeclarationGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_age_rating_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type ageRatingDeclarations | [optional]

### Return type

[**\OpenAPI\Client\Model\AgeRatingDeclarationResponse**](../Model/AgeRatingDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsAppStoreReviewDetailGetToOneRelated

> \OpenAPI\Client\Model\AppStoreReviewDetailResponse appStoreVersionsAppStoreReviewDetailGetToOneRelated($id, $fields_app_store_review_details, $fields_app_store_versions, $fields_app_store_review_attachments, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_review_details = array('fields_app_store_review_details_example'); // string[] | the fields to include for returned resources of type appStoreReviewDetails
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_app_store_review_attachments = array('fields_app_store_review_attachments_example'); // string[] | the fields to include for returned resources of type appStoreReviewAttachments
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreVersionsAppStoreReviewDetailGetToOneRelated($id, $fields_app_store_review_details, $fields_app_store_versions, $fields_app_store_review_attachments, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsAppStoreReviewDetailGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewDetails | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_app_store_review_attachments** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewAttachments | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreReviewDetailResponse**](../Model/AppStoreReviewDetailResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated

> \OpenAPI\Client\Model\AppStoreVersionLocalizationsResponse appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated($id, $fields_app_store_version_localizations, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated($id, $fields_app_store_version_localizations, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionLocalizationsResponse**](../Model/AppStoreVersionLocalizationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated

> \OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated($id, $fields_app_store_version_phased_releases)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_version_phased_releases = array('fields_app_store_version_phased_releases_example'); // string[] | the fields to include for returned resources of type appStoreVersionPhasedReleases

try {
    $result = $apiInstance->appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated($id, $fields_app_store_version_phased_releases);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_version_phased_releases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionPhasedReleases | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionPhasedReleaseResponse**](../Model/AppStoreVersionPhasedReleaseResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsAppStoreVersionSubmissionGetToOneRelated

> \OpenAPI\Client\Model\AppStoreVersionSubmissionResponse appStoreVersionsAppStoreVersionSubmissionGetToOneRelated($id, $fields_app_store_versions, $fields_app_store_version_submissions, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_app_store_version_submissions = array('fields_app_store_version_submissions_example'); // string[] | the fields to include for returned resources of type appStoreVersionSubmissions
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appStoreVersionsAppStoreVersionSubmissionGetToOneRelated($id, $fields_app_store_versions, $fields_app_store_version_submissions, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsAppStoreVersionSubmissionGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_app_store_version_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionSubmissions | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionSubmissionResponse**](../Model/AppStoreVersionSubmissionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsBuildGetToOneRelated

> \OpenAPI\Client\Model\BuildResponse appStoreVersionsBuildGetToOneRelated($id, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->appStoreVersionsBuildGetToOneRelated($id, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsBuildGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## appStoreVersionsBuildGetToOneRelationship

> \OpenAPI\Client\Model\AppStoreVersionBuildLinkageResponse appStoreVersionsBuildGetToOneRelationship($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $result = $apiInstance->appStoreVersionsBuildGetToOneRelationship($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsBuildGetToOneRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionBuildLinkageResponse**](../Model/AppStoreVersionBuildLinkageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsBuildUpdateToOneRelationship

> appStoreVersionsBuildUpdateToOneRelationship($id, $app_store_version_build_linkage_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_version_build_linkage_request = new \OpenAPI\Client\Model\AppStoreVersionBuildLinkageRequest(); // \OpenAPI\Client\Model\AppStoreVersionBuildLinkageRequest | Related linkage

try {
    $apiInstance->appStoreVersionsBuildUpdateToOneRelationship($id, $app_store_version_build_linkage_request);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsBuildUpdateToOneRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_version_build_linkage_request** | [**\OpenAPI\Client\Model\AppStoreVersionBuildLinkageRequest**](../Model/AppStoreVersionBuildLinkageRequest.md)| Related linkage |

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


## appStoreVersionsCreateInstance

> \OpenAPI\Client\Model\AppStoreVersionResponse appStoreVersionsCreateInstance($app_store_version_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_version_create_request = new \OpenAPI\Client\Model\AppStoreVersionCreateRequest(); // \OpenAPI\Client\Model\AppStoreVersionCreateRequest | AppStoreVersion representation

try {
    $result = $apiInstance->appStoreVersionsCreateInstance($app_store_version_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_version_create_request** | [**\OpenAPI\Client\Model\AppStoreVersionCreateRequest**](../Model/AppStoreVersionCreateRequest.md)| AppStoreVersion representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionResponse**](../Model/AppStoreVersionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsDeleteInstance

> appStoreVersionsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->appStoreVersionsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## appStoreVersionsGetInstance

> \OpenAPI\Client\Model\AppStoreVersionResponse appStoreVersionsGetInstance($id, $fields_app_store_versions, $include, $fields_app_store_version_localizations, $fields_idfa_declarations, $fields_routing_app_coverages, $fields_app_store_version_phased_releases, $fields_age_rating_declarations, $fields_app_store_review_details, $fields_builds, $fields_app_store_version_submissions, $limit_app_store_version_localizations)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$fields_idfa_declarations = array('fields_idfa_declarations_example'); // string[] | the fields to include for returned resources of type idfaDeclarations
$fields_routing_app_coverages = array('fields_routing_app_coverages_example'); // string[] | the fields to include for returned resources of type routingAppCoverages
$fields_app_store_version_phased_releases = array('fields_app_store_version_phased_releases_example'); // string[] | the fields to include for returned resources of type appStoreVersionPhasedReleases
$fields_age_rating_declarations = array('fields_age_rating_declarations_example'); // string[] | the fields to include for returned resources of type ageRatingDeclarations
$fields_app_store_review_details = array('fields_app_store_review_details_example'); // string[] | the fields to include for returned resources of type appStoreReviewDetails
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_app_store_version_submissions = array('fields_app_store_version_submissions_example'); // string[] | the fields to include for returned resources of type appStoreVersionSubmissions
$limit_app_store_version_localizations = 56; // int | maximum number of related appStoreVersionLocalizations returned (when they are included)

try {
    $result = $apiInstance->appStoreVersionsGetInstance($id, $fields_app_store_versions, $include, $fields_app_store_version_localizations, $fields_idfa_declarations, $fields_routing_app_coverages, $fields_app_store_version_phased_releases, $fields_age_rating_declarations, $fields_app_store_review_details, $fields_builds, $fields_app_store_version_submissions, $limit_app_store_version_localizations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **fields_idfa_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type idfaDeclarations | [optional]
 **fields_routing_app_coverages** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type routingAppCoverages | [optional]
 **fields_app_store_version_phased_releases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionPhasedReleases | [optional]
 **fields_age_rating_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type ageRatingDeclarations | [optional]
 **fields_app_store_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewDetails | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_app_store_version_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionSubmissions | [optional]
 **limit_app_store_version_localizations** | **int**| maximum number of related appStoreVersionLocalizations returned (when they are included) | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionResponse**](../Model/AppStoreVersionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsIdfaDeclarationGetToOneRelated

> \OpenAPI\Client\Model\IdfaDeclarationResponse appStoreVersionsIdfaDeclarationGetToOneRelated($id, $fields_idfa_declarations)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_idfa_declarations = array('fields_idfa_declarations_example'); // string[] | the fields to include for returned resources of type idfaDeclarations

try {
    $result = $apiInstance->appStoreVersionsIdfaDeclarationGetToOneRelated($id, $fields_idfa_declarations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsIdfaDeclarationGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_idfa_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type idfaDeclarations | [optional]

### Return type

[**\OpenAPI\Client\Model\IdfaDeclarationResponse**](../Model/IdfaDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsRoutingAppCoverageGetToOneRelated

> \OpenAPI\Client\Model\RoutingAppCoverageResponse appStoreVersionsRoutingAppCoverageGetToOneRelated($id, $fields_routing_app_coverages)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_routing_app_coverages = array('fields_routing_app_coverages_example'); // string[] | the fields to include for returned resources of type routingAppCoverages

try {
    $result = $apiInstance->appStoreVersionsRoutingAppCoverageGetToOneRelated($id, $fields_routing_app_coverages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsRoutingAppCoverageGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_routing_app_coverages** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type routingAppCoverages | [optional]

### Return type

[**\OpenAPI\Client\Model\RoutingAppCoverageResponse**](../Model/RoutingAppCoverageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appStoreVersionsUpdateInstance

> \OpenAPI\Client\Model\AppStoreVersionResponse appStoreVersionsUpdateInstance($id, $app_store_version_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppStoreVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_store_version_update_request = new \OpenAPI\Client\Model\AppStoreVersionUpdateRequest(); // \OpenAPI\Client\Model\AppStoreVersionUpdateRequest | AppStoreVersion representation

try {
    $result = $apiInstance->appStoreVersionsUpdateInstance($id, $app_store_version_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreVersionsApi->appStoreVersionsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_store_version_update_request** | [**\OpenAPI\Client\Model\AppStoreVersionUpdateRequest**](../Model/AppStoreVersionUpdateRequest.md)| AppStoreVersion representation |

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionResponse**](../Model/AppStoreVersionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

