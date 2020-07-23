# OpenAPI\Client\BuildsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildsAppEncryptionDeclarationGetToOneRelated**](BuildsApi.md#buildsAppEncryptionDeclarationGetToOneRelated) | **GET** /v1/builds/{id}/appEncryptionDeclaration | 
[**buildsAppEncryptionDeclarationGetToOneRelationship**](BuildsApi.md#buildsAppEncryptionDeclarationGetToOneRelationship) | **GET** /v1/builds/{id}/relationships/appEncryptionDeclaration | 
[**buildsAppEncryptionDeclarationUpdateToOneRelationship**](BuildsApi.md#buildsAppEncryptionDeclarationUpdateToOneRelationship) | **PATCH** /v1/builds/{id}/relationships/appEncryptionDeclaration | 
[**buildsAppGetToOneRelated**](BuildsApi.md#buildsAppGetToOneRelated) | **GET** /v1/builds/{id}/app | 
[**buildsAppStoreVersionGetToOneRelated**](BuildsApi.md#buildsAppStoreVersionGetToOneRelated) | **GET** /v1/builds/{id}/appStoreVersion | 
[**buildsBetaAppReviewSubmissionGetToOneRelated**](BuildsApi.md#buildsBetaAppReviewSubmissionGetToOneRelated) | **GET** /v1/builds/{id}/betaAppReviewSubmission | 
[**buildsBetaBuildLocalizationsGetToManyRelated**](BuildsApi.md#buildsBetaBuildLocalizationsGetToManyRelated) | **GET** /v1/builds/{id}/betaBuildLocalizations | 
[**buildsBetaGroupsCreateToManyRelationship**](BuildsApi.md#buildsBetaGroupsCreateToManyRelationship) | **POST** /v1/builds/{id}/relationships/betaGroups | 
[**buildsBetaGroupsDeleteToManyRelationship**](BuildsApi.md#buildsBetaGroupsDeleteToManyRelationship) | **DELETE** /v1/builds/{id}/relationships/betaGroups | 
[**buildsBuildBetaDetailGetToOneRelated**](BuildsApi.md#buildsBuildBetaDetailGetToOneRelated) | **GET** /v1/builds/{id}/buildBetaDetail | 
[**buildsDiagnosticSignaturesGetToManyRelated**](BuildsApi.md#buildsDiagnosticSignaturesGetToManyRelated) | **GET** /v1/builds/{id}/diagnosticSignatures | 
[**buildsGetCollection**](BuildsApi.md#buildsGetCollection) | **GET** /v1/builds | 
[**buildsGetInstance**](BuildsApi.md#buildsGetInstance) | **GET** /v1/builds/{id} | 
[**buildsIconsGetToManyRelated**](BuildsApi.md#buildsIconsGetToManyRelated) | **GET** /v1/builds/{id}/icons | 
[**buildsIndividualTestersCreateToManyRelationship**](BuildsApi.md#buildsIndividualTestersCreateToManyRelationship) | **POST** /v1/builds/{id}/relationships/individualTesters | 
[**buildsIndividualTestersDeleteToManyRelationship**](BuildsApi.md#buildsIndividualTestersDeleteToManyRelationship) | **DELETE** /v1/builds/{id}/relationships/individualTesters | 
[**buildsIndividualTestersGetToManyRelated**](BuildsApi.md#buildsIndividualTestersGetToManyRelated) | **GET** /v1/builds/{id}/individualTesters | 
[**buildsIndividualTestersGetToManyRelationship**](BuildsApi.md#buildsIndividualTestersGetToManyRelationship) | **GET** /v1/builds/{id}/relationships/individualTesters | 
[**buildsPerfPowerMetricsGetToManyRelated**](BuildsApi.md#buildsPerfPowerMetricsGetToManyRelated) | **GET** /v1/builds/{id}/perfPowerMetrics | 
[**buildsPreReleaseVersionGetToOneRelated**](BuildsApi.md#buildsPreReleaseVersionGetToOneRelated) | **GET** /v1/builds/{id}/preReleaseVersion | 
[**buildsUpdateInstance**](BuildsApi.md#buildsUpdateInstance) | **PATCH** /v1/builds/{id} | 



## buildsAppEncryptionDeclarationGetToOneRelated

> \OpenAPI\Client\Model\AppEncryptionDeclarationResponse buildsAppEncryptionDeclarationGetToOneRelated($id, $fields_app_encryption_declarations)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_encryption_declarations = array('fields_app_encryption_declarations_example'); // string[] | the fields to include for returned resources of type appEncryptionDeclarations

try {
    $result = $apiInstance->buildsAppEncryptionDeclarationGetToOneRelated($id, $fields_app_encryption_declarations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsAppEncryptionDeclarationGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_encryption_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appEncryptionDeclarations | [optional]

### Return type

[**\OpenAPI\Client\Model\AppEncryptionDeclarationResponse**](../Model/AppEncryptionDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsAppEncryptionDeclarationGetToOneRelationship

> \OpenAPI\Client\Model\BuildAppEncryptionDeclarationLinkageResponse buildsAppEncryptionDeclarationGetToOneRelationship($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $result = $apiInstance->buildsAppEncryptionDeclarationGetToOneRelationship($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsAppEncryptionDeclarationGetToOneRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |

### Return type

[**\OpenAPI\Client\Model\BuildAppEncryptionDeclarationLinkageResponse**](../Model/BuildAppEncryptionDeclarationLinkageResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsAppEncryptionDeclarationUpdateToOneRelationship

> buildsAppEncryptionDeclarationUpdateToOneRelationship($id, $build_app_encryption_declaration_linkage_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_app_encryption_declaration_linkage_request = new \OpenAPI\Client\Model\BuildAppEncryptionDeclarationLinkageRequest(); // \OpenAPI\Client\Model\BuildAppEncryptionDeclarationLinkageRequest | Related linkage

try {
    $apiInstance->buildsAppEncryptionDeclarationUpdateToOneRelationship($id, $build_app_encryption_declaration_linkage_request);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsAppEncryptionDeclarationUpdateToOneRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_app_encryption_declaration_linkage_request** | [**\OpenAPI\Client\Model\BuildAppEncryptionDeclarationLinkageRequest**](../Model/BuildAppEncryptionDeclarationLinkageRequest.md)| Related linkage |

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


## buildsAppGetToOneRelated

> \OpenAPI\Client\Model\AppResponse buildsAppGetToOneRelated($id, $fields_apps)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps

try {
    $result = $apiInstance->buildsAppGetToOneRelated($id, $fields_apps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsAppGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## buildsAppStoreVersionGetToOneRelated

> \OpenAPI\Client\Model\AppStoreVersionResponse buildsAppStoreVersionGetToOneRelated($id, $fields_app_store_versions)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions

try {
    $result = $apiInstance->buildsAppStoreVersionGetToOneRelated($id, $fields_app_store_versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsAppStoreVersionGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]

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


## buildsBetaAppReviewSubmissionGetToOneRelated

> \OpenAPI\Client\Model\BetaAppReviewSubmissionResponse buildsBetaAppReviewSubmissionGetToOneRelated($id, $fields_beta_app_review_submissions)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_review_submissions = array('fields_beta_app_review_submissions_example'); // string[] | the fields to include for returned resources of type betaAppReviewSubmissions

try {
    $result = $apiInstance->buildsBetaAppReviewSubmissionGetToOneRelated($id, $fields_beta_app_review_submissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsBetaAppReviewSubmissionGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_review_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewSubmissions | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewSubmissionResponse**](../Model/BetaAppReviewSubmissionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsBetaBuildLocalizationsGetToManyRelated

> \OpenAPI\Client\Model\BetaBuildLocalizationsResponse buildsBetaBuildLocalizationsGetToManyRelated($id, $fields_beta_build_localizations, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_build_localizations = array('fields_beta_build_localizations_example'); // string[] | the fields to include for returned resources of type betaBuildLocalizations
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->buildsBetaBuildLocalizationsGetToManyRelated($id, $fields_beta_build_localizations, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsBetaBuildLocalizationsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_build_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaBuildLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]

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


## buildsBetaGroupsCreateToManyRelationship

> buildsBetaGroupsCreateToManyRelationship($id, $build_beta_groups_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_beta_groups_linkages_request = new \OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest(); // \OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest | List of related linkages

try {
    $apiInstance->buildsBetaGroupsCreateToManyRelationship($id, $build_beta_groups_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsBetaGroupsCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_beta_groups_linkages_request** | [**\OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest**](../Model/BuildBetaGroupsLinkagesRequest.md)| List of related linkages |

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


## buildsBetaGroupsDeleteToManyRelationship

> buildsBetaGroupsDeleteToManyRelationship($id, $build_beta_groups_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_beta_groups_linkages_request = new \OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest(); // \OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest | List of related linkages

try {
    $apiInstance->buildsBetaGroupsDeleteToManyRelationship($id, $build_beta_groups_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsBetaGroupsDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_beta_groups_linkages_request** | [**\OpenAPI\Client\Model\BuildBetaGroupsLinkagesRequest**](../Model/BuildBetaGroupsLinkagesRequest.md)| List of related linkages |

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


## buildsBuildBetaDetailGetToOneRelated

> \OpenAPI\Client\Model\BuildBetaDetailResponse buildsBuildBetaDetailGetToOneRelated($id, $fields_build_beta_details)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_build_beta_details = array('fields_build_beta_details_example'); // string[] | the fields to include for returned resources of type buildBetaDetails

try {
    $result = $apiInstance->buildsBuildBetaDetailGetToOneRelated($id, $fields_build_beta_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsBuildBetaDetailGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_build_beta_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildBetaDetails | [optional]

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


## buildsDiagnosticSignaturesGetToManyRelated

> \OpenAPI\Client\Model\DiagnosticSignaturesResponse buildsDiagnosticSignaturesGetToManyRelated($id, $filter_diagnostic_type, $fields_diagnostic_signatures, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_diagnostic_type = array('filter_diagnostic_type_example'); // string[] | filter by attribute 'diagnosticType'
$fields_diagnostic_signatures = array('fields_diagnostic_signatures_example'); // string[] | the fields to include for returned resources of type diagnosticSignatures
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->buildsDiagnosticSignaturesGetToManyRelated($id, $filter_diagnostic_type, $fields_diagnostic_signatures, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsDiagnosticSignaturesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_diagnostic_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;diagnosticType&#39; | [optional]
 **fields_diagnostic_signatures** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type diagnosticSignatures | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\DiagnosticSignaturesResponse**](../Model/DiagnosticSignaturesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsGetCollection

> \OpenAPI\Client\Model\BuildsResponse buildsGetCollection($filter_beta_app_review_submission_beta_review_state, $filter_expired, $filter_pre_release_version_platform, $filter_pre_release_version_version, $filter_processing_state, $filter_uses_non_exempt_encryption, $filter_version, $filter_app, $filter_app_store_version, $filter_beta_groups, $filter_pre_release_version, $filter_id, $sort, $fields_builds, $limit, $include, $fields_app_encryption_declarations, $fields_beta_app_review_submissions, $fields_build_beta_details, $fields_build_icons, $fields_perf_power_metrics, $fields_pre_release_versions, $fields_app_store_versions, $fields_diagnostic_signatures, $fields_beta_testers, $fields_beta_build_localizations, $fields_apps, $limit_beta_build_localizations, $limit_icons, $limit_individual_testers)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_beta_app_review_submission_beta_review_state = array('filter_beta_app_review_submission_beta_review_state_example'); // string[] | filter by attribute 'betaAppReviewSubmission.betaReviewState'
$filter_expired = array('filter_expired_example'); // string[] | filter by attribute 'expired'
$filter_pre_release_version_platform = array('filter_pre_release_version_platform_example'); // string[] | filter by attribute 'preReleaseVersion.platform'
$filter_pre_release_version_version = array('filter_pre_release_version_version_example'); // string[] | filter by attribute 'preReleaseVersion.version'
$filter_processing_state = array('filter_processing_state_example'); // string[] | filter by attribute 'processingState'
$filter_uses_non_exempt_encryption = array('filter_uses_non_exempt_encryption_example'); // string[] | filter by attribute 'usesNonExemptEncryption'
$filter_version = array('filter_version_example'); // string[] | filter by attribute 'version'
$filter_app = array('filter_app_example'); // string[] | filter by id(s) of related 'app'
$filter_app_store_version = array('filter_app_store_version_example'); // string[] | filter by id(s) of related 'appStoreVersion'
$filter_beta_groups = array('filter_beta_groups_example'); // string[] | filter by id(s) of related 'betaGroups'
$filter_pre_release_version = array('filter_pre_release_version_example'); // string[] | filter by id(s) of related 'preReleaseVersion'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_encryption_declarations = array('fields_app_encryption_declarations_example'); // string[] | the fields to include for returned resources of type appEncryptionDeclarations
$fields_beta_app_review_submissions = array('fields_beta_app_review_submissions_example'); // string[] | the fields to include for returned resources of type betaAppReviewSubmissions
$fields_build_beta_details = array('fields_build_beta_details_example'); // string[] | the fields to include for returned resources of type buildBetaDetails
$fields_build_icons = array('fields_build_icons_example'); // string[] | the fields to include for returned resources of type buildIcons
$fields_perf_power_metrics = array('fields_perf_power_metrics_example'); // string[] | the fields to include for returned resources of type perfPowerMetrics
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_diagnostic_signatures = array('fields_diagnostic_signatures_example'); // string[] | the fields to include for returned resources of type diagnosticSignatures
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$fields_beta_build_localizations = array('fields_beta_build_localizations_example'); // string[] | the fields to include for returned resources of type betaBuildLocalizations
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_beta_build_localizations = 56; // int | maximum number of related betaBuildLocalizations returned (when they are included)
$limit_icons = 56; // int | maximum number of related icons returned (when they are included)
$limit_individual_testers = 56; // int | maximum number of related individualTesters returned (when they are included)

try {
    $result = $apiInstance->buildsGetCollection($filter_beta_app_review_submission_beta_review_state, $filter_expired, $filter_pre_release_version_platform, $filter_pre_release_version_version, $filter_processing_state, $filter_uses_non_exempt_encryption, $filter_version, $filter_app, $filter_app_store_version, $filter_beta_groups, $filter_pre_release_version, $filter_id, $sort, $fields_builds, $limit, $include, $fields_app_encryption_declarations, $fields_beta_app_review_submissions, $fields_build_beta_details, $fields_build_icons, $fields_perf_power_metrics, $fields_pre_release_versions, $fields_app_store_versions, $fields_diagnostic_signatures, $fields_beta_testers, $fields_beta_build_localizations, $fields_apps, $limit_beta_build_localizations, $limit_icons, $limit_individual_testers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_beta_app_review_submission_beta_review_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;betaAppReviewSubmission.betaReviewState&#39; | [optional]
 **filter_expired** | [**string[]**](../Model/string.md)| filter by attribute &#39;expired&#39; | [optional]
 **filter_pre_release_version_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;preReleaseVersion.platform&#39; | [optional]
 **filter_pre_release_version_version** | [**string[]**](../Model/string.md)| filter by attribute &#39;preReleaseVersion.version&#39; | [optional]
 **filter_processing_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;processingState&#39; | [optional]
 **filter_uses_non_exempt_encryption** | [**string[]**](../Model/string.md)| filter by attribute &#39;usesNonExemptEncryption&#39; | [optional]
 **filter_version** | [**string[]**](../Model/string.md)| filter by attribute &#39;version&#39; | [optional]
 **filter_app** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;app&#39; | [optional]
 **filter_app_store_version** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;appStoreVersion&#39; | [optional]
 **filter_beta_groups** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;betaGroups&#39; | [optional]
 **filter_pre_release_version** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;preReleaseVersion&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_encryption_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appEncryptionDeclarations | [optional]
 **fields_beta_app_review_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewSubmissions | [optional]
 **fields_build_beta_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildBetaDetails | [optional]
 **fields_build_icons** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildIcons | [optional]
 **fields_perf_power_metrics** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type perfPowerMetrics | [optional]
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_diagnostic_signatures** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type diagnosticSignatures | [optional]
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **fields_beta_build_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaBuildLocalizations | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_beta_build_localizations** | **int**| maximum number of related betaBuildLocalizations returned (when they are included) | [optional]
 **limit_icons** | **int**| maximum number of related icons returned (when they are included) | [optional]
 **limit_individual_testers** | **int**| maximum number of related individualTesters returned (when they are included) | [optional]

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


## buildsGetInstance

> \OpenAPI\Client\Model\BuildResponse buildsGetInstance($id, $fields_builds, $include, $fields_app_encryption_declarations, $fields_beta_app_review_submissions, $fields_build_beta_details, $fields_build_icons, $fields_perf_power_metrics, $fields_pre_release_versions, $fields_app_store_versions, $fields_diagnostic_signatures, $fields_beta_testers, $fields_beta_build_localizations, $fields_apps, $limit_beta_build_localizations, $limit_icons, $limit_individual_testers)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_app_encryption_declarations = array('fields_app_encryption_declarations_example'); // string[] | the fields to include for returned resources of type appEncryptionDeclarations
$fields_beta_app_review_submissions = array('fields_beta_app_review_submissions_example'); // string[] | the fields to include for returned resources of type betaAppReviewSubmissions
$fields_build_beta_details = array('fields_build_beta_details_example'); // string[] | the fields to include for returned resources of type buildBetaDetails
$fields_build_icons = array('fields_build_icons_example'); // string[] | the fields to include for returned resources of type buildIcons
$fields_perf_power_metrics = array('fields_perf_power_metrics_example'); // string[] | the fields to include for returned resources of type perfPowerMetrics
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_diagnostic_signatures = array('fields_diagnostic_signatures_example'); // string[] | the fields to include for returned resources of type diagnosticSignatures
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$fields_beta_build_localizations = array('fields_beta_build_localizations_example'); // string[] | the fields to include for returned resources of type betaBuildLocalizations
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit_beta_build_localizations = 56; // int | maximum number of related betaBuildLocalizations returned (when they are included)
$limit_icons = 56; // int | maximum number of related icons returned (when they are included)
$limit_individual_testers = 56; // int | maximum number of related individualTesters returned (when they are included)

try {
    $result = $apiInstance->buildsGetInstance($id, $fields_builds, $include, $fields_app_encryption_declarations, $fields_beta_app_review_submissions, $fields_build_beta_details, $fields_build_icons, $fields_perf_power_metrics, $fields_pre_release_versions, $fields_app_store_versions, $fields_diagnostic_signatures, $fields_beta_testers, $fields_beta_build_localizations, $fields_apps, $limit_beta_build_localizations, $limit_icons, $limit_individual_testers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_app_encryption_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appEncryptionDeclarations | [optional]
 **fields_beta_app_review_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewSubmissions | [optional]
 **fields_build_beta_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildBetaDetails | [optional]
 **fields_build_icons** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildIcons | [optional]
 **fields_perf_power_metrics** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type perfPowerMetrics | [optional]
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_diagnostic_signatures** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type diagnosticSignatures | [optional]
 **fields_beta_testers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaTesters | [optional]
 **fields_beta_build_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaBuildLocalizations | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit_beta_build_localizations** | **int**| maximum number of related betaBuildLocalizations returned (when they are included) | [optional]
 **limit_icons** | **int**| maximum number of related icons returned (when they are included) | [optional]
 **limit_individual_testers** | **int**| maximum number of related individualTesters returned (when they are included) | [optional]

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


## buildsIconsGetToManyRelated

> \OpenAPI\Client\Model\BuildIconsResponse buildsIconsGetToManyRelated($id, $fields_build_icons, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_build_icons = array('fields_build_icons_example'); // string[] | the fields to include for returned resources of type buildIcons
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->buildsIconsGetToManyRelated($id, $fields_build_icons, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsIconsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_build_icons** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type buildIcons | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildIconsResponse**](../Model/BuildIconsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsIndividualTestersCreateToManyRelationship

> buildsIndividualTestersCreateToManyRelationship($id, $build_individual_testers_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_individual_testers_linkages_request = new \OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest(); // \OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest | List of related linkages

try {
    $apiInstance->buildsIndividualTestersCreateToManyRelationship($id, $build_individual_testers_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsIndividualTestersCreateToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_individual_testers_linkages_request** | [**\OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest**](../Model/BuildIndividualTestersLinkagesRequest.md)| List of related linkages |

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


## buildsIndividualTestersDeleteToManyRelationship

> buildsIndividualTestersDeleteToManyRelationship($id, $build_individual_testers_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_individual_testers_linkages_request = new \OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest(); // \OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest | List of related linkages

try {
    $apiInstance->buildsIndividualTestersDeleteToManyRelationship($id, $build_individual_testers_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsIndividualTestersDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_individual_testers_linkages_request** | [**\OpenAPI\Client\Model\BuildIndividualTestersLinkagesRequest**](../Model/BuildIndividualTestersLinkagesRequest.md)| List of related linkages |

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


## buildsIndividualTestersGetToManyRelated

> \OpenAPI\Client\Model\BetaTestersResponse buildsIndividualTestersGetToManyRelated($id, $fields_beta_testers, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_testers = array('fields_beta_testers_example'); // string[] | the fields to include for returned resources of type betaTesters
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->buildsIndividualTestersGetToManyRelated($id, $fields_beta_testers, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsIndividualTestersGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## buildsIndividualTestersGetToManyRelationship

> \OpenAPI\Client\Model\BuildIndividualTestersLinkagesResponse buildsIndividualTestersGetToManyRelationship($id, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->buildsIndividualTestersGetToManyRelationship($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsIndividualTestersGetToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BuildIndividualTestersLinkagesResponse**](../Model/BuildIndividualTestersLinkagesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsPerfPowerMetricsGetToManyRelated

> \OpenAPI\Client\Model\PerfPowerMetricsResponse buildsPerfPowerMetricsGetToManyRelated($id, $filter_device_type, $filter_metric_type, $filter_platform)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_device_type = array('filter_device_type_example'); // string[] | filter by attribute 'deviceType'
$filter_metric_type = array('filter_metric_type_example'); // string[] | filter by attribute 'metricType'
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'

try {
    $result = $apiInstance->buildsPerfPowerMetricsGetToManyRelated($id, $filter_device_type, $filter_metric_type, $filter_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsPerfPowerMetricsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_device_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;deviceType&#39; | [optional]
 **filter_metric_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;metricType&#39; | [optional]
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]

### Return type

[**\OpenAPI\Client\Model\PerfPowerMetricsResponse**](../Model/PerfPowerMetricsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buildsPreReleaseVersionGetToOneRelated

> \OpenAPI\Client\Model\PrereleaseVersionResponse buildsPreReleaseVersionGetToOneRelated($id, $fields_pre_release_versions)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions

try {
    $result = $apiInstance->buildsPreReleaseVersionGetToOneRelated($id, $fields_pre_release_versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsPreReleaseVersionGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]

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


## buildsUpdateInstance

> \OpenAPI\Client\Model\BuildResponse buildsUpdateInstance($id, $build_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$build_update_request = new \OpenAPI\Client\Model\BuildUpdateRequest(); // \OpenAPI\Client\Model\BuildUpdateRequest | Build representation

try {
    $result = $apiInstance->buildsUpdateInstance($id, $build_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **build_update_request** | [**\OpenAPI\Client\Model\BuildUpdateRequest**](../Model/BuildUpdateRequest.md)| Build representation |

### Return type

[**\OpenAPI\Client\Model\BuildResponse**](../Model/BuildResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

