# OpenAPI\Client\AppsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsAppInfosGetToManyRelated**](AppsApi.md#appsAppInfosGetToManyRelated) | **GET** /v1/apps/{id}/appInfos | 
[**appsAppStoreVersionsGetToManyRelated**](AppsApi.md#appsAppStoreVersionsGetToManyRelated) | **GET** /v1/apps/{id}/appStoreVersions | 
[**appsAvailableTerritoriesGetToManyRelated**](AppsApi.md#appsAvailableTerritoriesGetToManyRelated) | **GET** /v1/apps/{id}/availableTerritories | 
[**appsBetaAppLocalizationsGetToManyRelated**](AppsApi.md#appsBetaAppLocalizationsGetToManyRelated) | **GET** /v1/apps/{id}/betaAppLocalizations | 
[**appsBetaAppReviewDetailGetToOneRelated**](AppsApi.md#appsBetaAppReviewDetailGetToOneRelated) | **GET** /v1/apps/{id}/betaAppReviewDetail | 
[**appsBetaGroupsGetToManyRelated**](AppsApi.md#appsBetaGroupsGetToManyRelated) | **GET** /v1/apps/{id}/betaGroups | 
[**appsBetaLicenseAgreementGetToOneRelated**](AppsApi.md#appsBetaLicenseAgreementGetToOneRelated) | **GET** /v1/apps/{id}/betaLicenseAgreement | 
[**appsBetaTestersDeleteToManyRelationship**](AppsApi.md#appsBetaTestersDeleteToManyRelationship) | **DELETE** /v1/apps/{id}/relationships/betaTesters | 
[**appsBuildsGetToManyRelated**](AppsApi.md#appsBuildsGetToManyRelated) | **GET** /v1/apps/{id}/builds | 
[**appsEndUserLicenseAgreementGetToOneRelated**](AppsApi.md#appsEndUserLicenseAgreementGetToOneRelated) | **GET** /v1/apps/{id}/endUserLicenseAgreement | 
[**appsGameCenterEnabledVersionsGetToManyRelated**](AppsApi.md#appsGameCenterEnabledVersionsGetToManyRelated) | **GET** /v1/apps/{id}/gameCenterEnabledVersions | 
[**appsGetCollection**](AppsApi.md#appsGetCollection) | **GET** /v1/apps | 
[**appsGetInstance**](AppsApi.md#appsGetInstance) | **GET** /v1/apps/{id} | 
[**appsInAppPurchasesGetToManyRelated**](AppsApi.md#appsInAppPurchasesGetToManyRelated) | **GET** /v1/apps/{id}/inAppPurchases | 
[**appsPerfPowerMetricsGetToManyRelated**](AppsApi.md#appsPerfPowerMetricsGetToManyRelated) | **GET** /v1/apps/{id}/perfPowerMetrics | 
[**appsPreOrderGetToOneRelated**](AppsApi.md#appsPreOrderGetToOneRelated) | **GET** /v1/apps/{id}/preOrder | 
[**appsPreReleaseVersionsGetToManyRelated**](AppsApi.md#appsPreReleaseVersionsGetToManyRelated) | **GET** /v1/apps/{id}/preReleaseVersions | 
[**appsPricesGetToManyRelated**](AppsApi.md#appsPricesGetToManyRelated) | **GET** /v1/apps/{id}/prices | 
[**appsUpdateInstance**](AppsApi.md#appsUpdateInstance) | **PATCH** /v1/apps/{id} | 



## appsAppInfosGetToManyRelated

> \OpenAPI\Client\Model\AppInfosResponse appsAppInfosGetToManyRelated($id, $fields_app_infos, $fields_app_categories, $fields_app_info_localizations, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_infos = array('fields_app_infos_example'); // string[] | the fields to include for returned resources of type appInfos
$fields_app_categories = array('fields_app_categories_example'); // string[] | the fields to include for returned resources of type appCategories
$fields_app_info_localizations = array('fields_app_info_localizations_example'); // string[] | the fields to include for returned resources of type appInfoLocalizations
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appsAppInfosGetToManyRelated($id, $fields_app_infos, $fields_app_categories, $fields_app_info_localizations, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAppInfosGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_infos** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfos | [optional]
 **fields_app_categories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appCategories | [optional]
 **fields_app_info_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfoLocalizations | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppInfosResponse**](../Model/AppInfosResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsAppStoreVersionsGetToManyRelated

> \OpenAPI\Client\Model\AppStoreVersionsResponse appsAppStoreVersionsGetToManyRelated($id, $filter_app_store_state, $filter_platform, $filter_version_string, $filter_id, $fields_idfa_declarations, $fields_app_store_version_localizations, $fields_routing_app_coverages, $fields_app_store_version_phased_releases, $fields_age_rating_declarations, $fields_app_store_review_details, $fields_app_store_versions, $fields_builds, $fields_app_store_version_submissions, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_app_store_state = array('filter_app_store_state_example'); // string[] | filter by attribute 'appStoreState'
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_version_string = array('filter_version_string_example'); // string[] | filter by attribute 'versionString'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$fields_idfa_declarations = array('fields_idfa_declarations_example'); // string[] | the fields to include for returned resources of type idfaDeclarations
$fields_app_store_version_localizations = array('fields_app_store_version_localizations_example'); // string[] | the fields to include for returned resources of type appStoreVersionLocalizations
$fields_routing_app_coverages = array('fields_routing_app_coverages_example'); // string[] | the fields to include for returned resources of type routingAppCoverages
$fields_app_store_version_phased_releases = array('fields_app_store_version_phased_releases_example'); // string[] | the fields to include for returned resources of type appStoreVersionPhasedReleases
$fields_age_rating_declarations = array('fields_age_rating_declarations_example'); // string[] | the fields to include for returned resources of type ageRatingDeclarations
$fields_app_store_review_details = array('fields_app_store_review_details_example'); // string[] | the fields to include for returned resources of type appStoreReviewDetails
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_app_store_version_submissions = array('fields_app_store_version_submissions_example'); // string[] | the fields to include for returned resources of type appStoreVersionSubmissions
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appsAppStoreVersionsGetToManyRelated($id, $filter_app_store_state, $filter_platform, $filter_version_string, $filter_id, $fields_idfa_declarations, $fields_app_store_version_localizations, $fields_routing_app_coverages, $fields_app_store_version_phased_releases, $fields_age_rating_declarations, $fields_app_store_review_details, $fields_app_store_versions, $fields_builds, $fields_app_store_version_submissions, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAppStoreVersionsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_app_store_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;appStoreState&#39; | [optional]
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_version_string** | [**string[]**](../Model/string.md)| filter by attribute &#39;versionString&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **fields_idfa_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type idfaDeclarations | [optional]
 **fields_app_store_version_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionLocalizations | [optional]
 **fields_routing_app_coverages** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type routingAppCoverages | [optional]
 **fields_app_store_version_phased_releases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionPhasedReleases | [optional]
 **fields_age_rating_declarations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type ageRatingDeclarations | [optional]
 **fields_app_store_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreReviewDetails | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_app_store_version_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersionSubmissions | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppStoreVersionsResponse**](../Model/AppStoreVersionsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsAvailableTerritoriesGetToManyRelated

> \OpenAPI\Client\Model\TerritoriesResponse appsAvailableTerritoriesGetToManyRelated($id, $fields_territories, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appsAvailableTerritoriesGetToManyRelated($id, $fields_territories, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsAvailableTerritoriesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\TerritoriesResponse**](../Model/TerritoriesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsBetaAppLocalizationsGetToManyRelated

> \OpenAPI\Client\Model\BetaAppLocalizationsResponse appsBetaAppLocalizationsGetToManyRelated($id, $fields_beta_app_localizations, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_localizations = array('fields_beta_app_localizations_example'); // string[] | the fields to include for returned resources of type betaAppLocalizations
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appsBetaAppLocalizationsGetToManyRelated($id, $fields_beta_app_localizations, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBetaAppLocalizationsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppLocalizations | [optional]
 **limit** | **int**| maximum resources per page | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppLocalizationsResponse**](../Model/BetaAppLocalizationsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsBetaAppReviewDetailGetToOneRelated

> \OpenAPI\Client\Model\BetaAppReviewDetailResponse appsBetaAppReviewDetailGetToOneRelated($id, $fields_beta_app_review_details)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_review_details = array('fields_beta_app_review_details_example'); // string[] | the fields to include for returned resources of type betaAppReviewDetails

try {
    $result = $apiInstance->appsBetaAppReviewDetailGetToOneRelated($id, $fields_beta_app_review_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBetaAppReviewDetailGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewDetails | [optional]

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


## appsBetaGroupsGetToManyRelated

> \OpenAPI\Client\Model\BetaGroupsResponse appsBetaGroupsGetToManyRelated($id, $fields_beta_groups, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appsBetaGroupsGetToManyRelated($id, $fields_beta_groups, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBetaGroupsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## appsBetaLicenseAgreementGetToOneRelated

> \OpenAPI\Client\Model\BetaLicenseAgreementResponse appsBetaLicenseAgreementGetToOneRelated($id, $fields_beta_license_agreements)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_license_agreements = array('fields_beta_license_agreements_example'); // string[] | the fields to include for returned resources of type betaLicenseAgreements

try {
    $result = $apiInstance->appsBetaLicenseAgreementGetToOneRelated($id, $fields_beta_license_agreements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBetaLicenseAgreementGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaLicenseAgreements | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaLicenseAgreementResponse**](../Model/BetaLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsBetaTestersDeleteToManyRelationship

> appsBetaTestersDeleteToManyRelationship($id, $app_beta_testers_linkages_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_beta_testers_linkages_request = new \OpenAPI\Client\Model\AppBetaTestersLinkagesRequest(); // \OpenAPI\Client\Model\AppBetaTestersLinkagesRequest | List of related linkages

try {
    $apiInstance->appsBetaTestersDeleteToManyRelationship($id, $app_beta_testers_linkages_request);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBetaTestersDeleteToManyRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_beta_testers_linkages_request** | [**\OpenAPI\Client\Model\AppBetaTestersLinkagesRequest**](../Model/AppBetaTestersLinkagesRequest.md)| List of related linkages |

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


## appsBuildsGetToManyRelated

> \OpenAPI\Client\Model\BuildsResponse appsBuildsGetToManyRelated($id, $fields_builds, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appsBuildsGetToManyRelated($id, $fields_builds, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsBuildsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## appsEndUserLicenseAgreementGetToOneRelated

> \OpenAPI\Client\Model\EndUserLicenseAgreementResponse appsEndUserLicenseAgreementGetToOneRelated($id, $fields_end_user_license_agreements)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_end_user_license_agreements = array('fields_end_user_license_agreements_example'); // string[] | the fields to include for returned resources of type endUserLicenseAgreements

try {
    $result = $apiInstance->appsEndUserLicenseAgreementGetToOneRelated($id, $fields_end_user_license_agreements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsEndUserLicenseAgreementGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_end_user_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type endUserLicenseAgreements | [optional]

### Return type

[**\OpenAPI\Client\Model\EndUserLicenseAgreementResponse**](../Model/EndUserLicenseAgreementResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsGameCenterEnabledVersionsGetToManyRelated

> \OpenAPI\Client\Model\GameCenterEnabledVersionsResponse appsGameCenterEnabledVersionsGetToManyRelated($id, $filter_platform, $filter_version_string, $filter_id, $sort, $fields_game_center_enabled_versions, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_platform = array('filter_platform_example'); // string[] | filter by attribute 'platform'
$filter_version_string = array('filter_version_string_example'); // string[] | filter by attribute 'versionString'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_game_center_enabled_versions = array('fields_game_center_enabled_versions_example'); // string[] | the fields to include for returned resources of type gameCenterEnabledVersions
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appsGameCenterEnabledVersionsGetToManyRelated($id, $filter_platform, $filter_version_string, $filter_id, $sort, $fields_game_center_enabled_versions, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGameCenterEnabledVersionsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;platform&#39; | [optional]
 **filter_version_string** | [**string[]**](../Model/string.md)| filter by attribute &#39;versionString&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_game_center_enabled_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type gameCenterEnabledVersions | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\GameCenterEnabledVersionsResponse**](../Model/GameCenterEnabledVersionsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsGetCollection

> \OpenAPI\Client\Model\AppsResponse appsGetCollection($filter_app_store_versions_app_store_state, $filter_app_store_versions_platform, $filter_bundle_id, $filter_name, $filter_sku, $filter_app_store_versions, $filter_id, $exists_game_center_enabled_versions, $sort, $fields_apps, $limit, $include, $fields_beta_groups, $fields_perf_power_metrics, $fields_app_infos, $fields_app_pre_orders, $fields_pre_release_versions, $fields_app_prices, $fields_in_app_purchases, $fields_beta_app_review_details, $fields_territories, $fields_game_center_enabled_versions, $fields_app_store_versions, $fields_builds, $fields_beta_app_localizations, $fields_beta_license_agreements, $fields_end_user_license_agreements, $limit_app_infos, $limit_app_store_versions, $limit_available_territories, $limit_beta_app_localizations, $limit_beta_groups, $limit_builds, $limit_game_center_enabled_versions, $limit_in_app_purchases, $limit_pre_release_versions, $limit_prices)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_app_store_versions_app_store_state = array('filter_app_store_versions_app_store_state_example'); // string[] | filter by attribute 'appStoreVersions.appStoreState'
$filter_app_store_versions_platform = array('filter_app_store_versions_platform_example'); // string[] | filter by attribute 'appStoreVersions.platform'
$filter_bundle_id = array('filter_bundle_id_example'); // string[] | filter by attribute 'bundleId'
$filter_name = array('filter_name_example'); // string[] | filter by attribute 'name'
$filter_sku = array('filter_sku_example'); // string[] | filter by attribute 'sku'
$filter_app_store_versions = array('filter_app_store_versions_example'); // string[] | filter by id(s) of related 'appStoreVersions'
$filter_id = array('filter_id_example'); // string[] | filter by id(s)
$exists_game_center_enabled_versions = array('exists_game_center_enabled_versions_example'); // string[] | filter by existence or non-existence of related 'gameCenterEnabledVersions'
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$fields_perf_power_metrics = array('fields_perf_power_metrics_example'); // string[] | the fields to include for returned resources of type perfPowerMetrics
$fields_app_infos = array('fields_app_infos_example'); // string[] | the fields to include for returned resources of type appInfos
$fields_app_pre_orders = array('fields_app_pre_orders_example'); // string[] | the fields to include for returned resources of type appPreOrders
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$fields_app_prices = array('fields_app_prices_example'); // string[] | the fields to include for returned resources of type appPrices
$fields_in_app_purchases = array('fields_in_app_purchases_example'); // string[] | the fields to include for returned resources of type inAppPurchases
$fields_beta_app_review_details = array('fields_beta_app_review_details_example'); // string[] | the fields to include for returned resources of type betaAppReviewDetails
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$fields_game_center_enabled_versions = array('fields_game_center_enabled_versions_example'); // string[] | the fields to include for returned resources of type gameCenterEnabledVersions
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_beta_app_localizations = array('fields_beta_app_localizations_example'); // string[] | the fields to include for returned resources of type betaAppLocalizations
$fields_beta_license_agreements = array('fields_beta_license_agreements_example'); // string[] | the fields to include for returned resources of type betaLicenseAgreements
$fields_end_user_license_agreements = array('fields_end_user_license_agreements_example'); // string[] | the fields to include for returned resources of type endUserLicenseAgreements
$limit_app_infos = 56; // int | maximum number of related appInfos returned (when they are included)
$limit_app_store_versions = 56; // int | maximum number of related appStoreVersions returned (when they are included)
$limit_available_territories = 56; // int | maximum number of related availableTerritories returned (when they are included)
$limit_beta_app_localizations = 56; // int | maximum number of related betaAppLocalizations returned (when they are included)
$limit_beta_groups = 56; // int | maximum number of related betaGroups returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)
$limit_game_center_enabled_versions = 56; // int | maximum number of related gameCenterEnabledVersions returned (when they are included)
$limit_in_app_purchases = 56; // int | maximum number of related inAppPurchases returned (when they are included)
$limit_pre_release_versions = 56; // int | maximum number of related preReleaseVersions returned (when they are included)
$limit_prices = 56; // int | maximum number of related prices returned (when they are included)

try {
    $result = $apiInstance->appsGetCollection($filter_app_store_versions_app_store_state, $filter_app_store_versions_platform, $filter_bundle_id, $filter_name, $filter_sku, $filter_app_store_versions, $filter_id, $exists_game_center_enabled_versions, $sort, $fields_apps, $limit, $include, $fields_beta_groups, $fields_perf_power_metrics, $fields_app_infos, $fields_app_pre_orders, $fields_pre_release_versions, $fields_app_prices, $fields_in_app_purchases, $fields_beta_app_review_details, $fields_territories, $fields_game_center_enabled_versions, $fields_app_store_versions, $fields_builds, $fields_beta_app_localizations, $fields_beta_license_agreements, $fields_end_user_license_agreements, $limit_app_infos, $limit_app_store_versions, $limit_available_territories, $limit_beta_app_localizations, $limit_beta_groups, $limit_builds, $limit_game_center_enabled_versions, $limit_in_app_purchases, $limit_pre_release_versions, $limit_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_app_store_versions_app_store_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;appStoreVersions.appStoreState&#39; | [optional]
 **filter_app_store_versions_platform** | [**string[]**](../Model/string.md)| filter by attribute &#39;appStoreVersions.platform&#39; | [optional]
 **filter_bundle_id** | [**string[]**](../Model/string.md)| filter by attribute &#39;bundleId&#39; | [optional]
 **filter_name** | [**string[]**](../Model/string.md)| filter by attribute &#39;name&#39; | [optional]
 **filter_sku** | [**string[]**](../Model/string.md)| filter by attribute &#39;sku&#39; | [optional]
 **filter_app_store_versions** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;appStoreVersions&#39; | [optional]
 **filter_id** | [**string[]**](../Model/string.md)| filter by id(s) | [optional]
 **exists_game_center_enabled_versions** | [**string[]**](../Model/string.md)| filter by existence or non-existence of related &#39;gameCenterEnabledVersions&#39; | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **fields_perf_power_metrics** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type perfPowerMetrics | [optional]
 **fields_app_infos** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfos | [optional]
 **fields_app_pre_orders** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreOrders | [optional]
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **fields_app_prices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPrices | [optional]
 **fields_in_app_purchases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type inAppPurchases | [optional]
 **fields_beta_app_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewDetails | [optional]
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **fields_game_center_enabled_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type gameCenterEnabledVersions | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_beta_app_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppLocalizations | [optional]
 **fields_beta_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaLicenseAgreements | [optional]
 **fields_end_user_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type endUserLicenseAgreements | [optional]
 **limit_app_infos** | **int**| maximum number of related appInfos returned (when they are included) | [optional]
 **limit_app_store_versions** | **int**| maximum number of related appStoreVersions returned (when they are included) | [optional]
 **limit_available_territories** | **int**| maximum number of related availableTerritories returned (when they are included) | [optional]
 **limit_beta_app_localizations** | **int**| maximum number of related betaAppLocalizations returned (when they are included) | [optional]
 **limit_beta_groups** | **int**| maximum number of related betaGroups returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]
 **limit_game_center_enabled_versions** | **int**| maximum number of related gameCenterEnabledVersions returned (when they are included) | [optional]
 **limit_in_app_purchases** | **int**| maximum number of related inAppPurchases returned (when they are included) | [optional]
 **limit_pre_release_versions** | **int**| maximum number of related preReleaseVersions returned (when they are included) | [optional]
 **limit_prices** | **int**| maximum number of related prices returned (when they are included) | [optional]

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


## appsGetInstance

> \OpenAPI\Client\Model\AppResponse appsGetInstance($id, $fields_apps, $include, $fields_beta_groups, $fields_perf_power_metrics, $fields_app_infos, $fields_app_pre_orders, $fields_pre_release_versions, $fields_app_prices, $fields_in_app_purchases, $fields_beta_app_review_details, $fields_territories, $fields_game_center_enabled_versions, $fields_app_store_versions, $fields_builds, $fields_beta_app_localizations, $fields_beta_license_agreements, $fields_end_user_license_agreements, $limit_app_infos, $limit_app_store_versions, $limit_available_territories, $limit_beta_app_localizations, $limit_beta_groups, $limit_builds, $limit_game_center_enabled_versions, $limit_in_app_purchases, $limit_pre_release_versions, $limit_prices)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_beta_groups = array('fields_beta_groups_example'); // string[] | the fields to include for returned resources of type betaGroups
$fields_perf_power_metrics = array('fields_perf_power_metrics_example'); // string[] | the fields to include for returned resources of type perfPowerMetrics
$fields_app_infos = array('fields_app_infos_example'); // string[] | the fields to include for returned resources of type appInfos
$fields_app_pre_orders = array('fields_app_pre_orders_example'); // string[] | the fields to include for returned resources of type appPreOrders
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$fields_app_prices = array('fields_app_prices_example'); // string[] | the fields to include for returned resources of type appPrices
$fields_in_app_purchases = array('fields_in_app_purchases_example'); // string[] | the fields to include for returned resources of type inAppPurchases
$fields_beta_app_review_details = array('fields_beta_app_review_details_example'); // string[] | the fields to include for returned resources of type betaAppReviewDetails
$fields_territories = array('fields_territories_example'); // string[] | the fields to include for returned resources of type territories
$fields_game_center_enabled_versions = array('fields_game_center_enabled_versions_example'); // string[] | the fields to include for returned resources of type gameCenterEnabledVersions
$fields_app_store_versions = array('fields_app_store_versions_example'); // string[] | the fields to include for returned resources of type appStoreVersions
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds
$fields_beta_app_localizations = array('fields_beta_app_localizations_example'); // string[] | the fields to include for returned resources of type betaAppLocalizations
$fields_beta_license_agreements = array('fields_beta_license_agreements_example'); // string[] | the fields to include for returned resources of type betaLicenseAgreements
$fields_end_user_license_agreements = array('fields_end_user_license_agreements_example'); // string[] | the fields to include for returned resources of type endUserLicenseAgreements
$limit_app_infos = 56; // int | maximum number of related appInfos returned (when they are included)
$limit_app_store_versions = 56; // int | maximum number of related appStoreVersions returned (when they are included)
$limit_available_territories = 56; // int | maximum number of related availableTerritories returned (when they are included)
$limit_beta_app_localizations = 56; // int | maximum number of related betaAppLocalizations returned (when they are included)
$limit_beta_groups = 56; // int | maximum number of related betaGroups returned (when they are included)
$limit_builds = 56; // int | maximum number of related builds returned (when they are included)
$limit_game_center_enabled_versions = 56; // int | maximum number of related gameCenterEnabledVersions returned (when they are included)
$limit_in_app_purchases = 56; // int | maximum number of related inAppPurchases returned (when they are included)
$limit_pre_release_versions = 56; // int | maximum number of related preReleaseVersions returned (when they are included)
$limit_prices = 56; // int | maximum number of related prices returned (when they are included)

try {
    $result = $apiInstance->appsGetInstance($id, $fields_apps, $include, $fields_beta_groups, $fields_perf_power_metrics, $fields_app_infos, $fields_app_pre_orders, $fields_pre_release_versions, $fields_app_prices, $fields_in_app_purchases, $fields_beta_app_review_details, $fields_territories, $fields_game_center_enabled_versions, $fields_app_store_versions, $fields_builds, $fields_beta_app_localizations, $fields_beta_license_agreements, $fields_end_user_license_agreements, $limit_app_infos, $limit_app_store_versions, $limit_available_territories, $limit_beta_app_localizations, $limit_beta_groups, $limit_builds, $limit_game_center_enabled_versions, $limit_in_app_purchases, $limit_pre_release_versions, $limit_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_beta_groups** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaGroups | [optional]
 **fields_perf_power_metrics** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type perfPowerMetrics | [optional]
 **fields_app_infos** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appInfos | [optional]
 **fields_app_pre_orders** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreOrders | [optional]
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **fields_app_prices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPrices | [optional]
 **fields_in_app_purchases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type inAppPurchases | [optional]
 **fields_beta_app_review_details** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewDetails | [optional]
 **fields_territories** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type territories | [optional]
 **fields_game_center_enabled_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type gameCenterEnabledVersions | [optional]
 **fields_app_store_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appStoreVersions | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]
 **fields_beta_app_localizations** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppLocalizations | [optional]
 **fields_beta_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaLicenseAgreements | [optional]
 **fields_end_user_license_agreements** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type endUserLicenseAgreements | [optional]
 **limit_app_infos** | **int**| maximum number of related appInfos returned (when they are included) | [optional]
 **limit_app_store_versions** | **int**| maximum number of related appStoreVersions returned (when they are included) | [optional]
 **limit_available_territories** | **int**| maximum number of related availableTerritories returned (when they are included) | [optional]
 **limit_beta_app_localizations** | **int**| maximum number of related betaAppLocalizations returned (when they are included) | [optional]
 **limit_beta_groups** | **int**| maximum number of related betaGroups returned (when they are included) | [optional]
 **limit_builds** | **int**| maximum number of related builds returned (when they are included) | [optional]
 **limit_game_center_enabled_versions** | **int**| maximum number of related gameCenterEnabledVersions returned (when they are included) | [optional]
 **limit_in_app_purchases** | **int**| maximum number of related inAppPurchases returned (when they are included) | [optional]
 **limit_pre_release_versions** | **int**| maximum number of related preReleaseVersions returned (when they are included) | [optional]
 **limit_prices** | **int**| maximum number of related prices returned (when they are included) | [optional]

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


## appsInAppPurchasesGetToManyRelated

> \OpenAPI\Client\Model\InAppPurchasesResponse appsInAppPurchasesGetToManyRelated($id, $filter_in_app_purchase_type, $filter_can_be_submitted, $sort, $fields_in_app_purchases, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$filter_in_app_purchase_type = array('filter_in_app_purchase_type_example'); // string[] | filter by attribute 'inAppPurchaseType'
$filter_can_be_submitted = array('filter_can_be_submitted_example'); // string[] | filter by canBeSubmitted
$sort = array('sort_example'); // string[] | comma-separated list of sort expressions; resources will be sorted as specified
$fields_in_app_purchases = array('fields_in_app_purchases_example'); // string[] | the fields to include for returned resources of type inAppPurchases
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appsInAppPurchasesGetToManyRelated($id, $filter_in_app_purchase_type, $filter_can_be_submitted, $sort, $fields_in_app_purchases, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsInAppPurchasesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **filter_in_app_purchase_type** | [**string[]**](../Model/string.md)| filter by attribute &#39;inAppPurchaseType&#39; | [optional]
 **filter_can_be_submitted** | [**string[]**](../Model/string.md)| filter by canBeSubmitted | [optional]
 **sort** | [**string[]**](../Model/string.md)| comma-separated list of sort expressions; resources will be sorted as specified | [optional]
 **fields_in_app_purchases** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type inAppPurchases | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\InAppPurchasesResponse**](../Model/InAppPurchasesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsPerfPowerMetricsGetToManyRelated

> \OpenAPI\Client\Model\PerfPowerMetricsResponse appsPerfPowerMetricsGetToManyRelated($id, $filter_device_type, $filter_metric_type, $filter_platform)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
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
    $result = $apiInstance->appsPerfPowerMetricsGetToManyRelated($id, $filter_device_type, $filter_metric_type, $filter_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPerfPowerMetricsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
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


## appsPreOrderGetToOneRelated

> \OpenAPI\Client\Model\AppPreOrderResponse appsPreOrderGetToOneRelated($id, $fields_app_pre_orders)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_pre_orders = array('fields_app_pre_orders_example'); // string[] | the fields to include for returned resources of type appPreOrders

try {
    $result = $apiInstance->appsPreOrderGetToOneRelated($id, $fields_app_pre_orders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPreOrderGetToOneRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_pre_orders** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPreOrders | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPreOrderResponse**](../Model/AppPreOrderResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsPreReleaseVersionsGetToManyRelated

> \OpenAPI\Client\Model\PreReleaseVersionsResponse appsPreReleaseVersionsGetToManyRelated($id, $fields_pre_release_versions, $limit)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_pre_release_versions = array('fields_pre_release_versions_example'); // string[] | the fields to include for returned resources of type preReleaseVersions
$limit = 56; // int | maximum resources per page

try {
    $result = $apiInstance->appsPreReleaseVersionsGetToManyRelated($id, $fields_pre_release_versions, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPreReleaseVersionsGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_pre_release_versions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type preReleaseVersions | [optional]
 **limit** | **int**| maximum resources per page | [optional]

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


## appsPricesGetToManyRelated

> \OpenAPI\Client\Model\AppPricesResponse appsPricesGetToManyRelated($id, $fields_app_prices, $fields_app_price_tiers, $fields_apps, $limit, $include)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_app_prices = array('fields_app_prices_example'); // string[] | the fields to include for returned resources of type appPrices
$fields_app_price_tiers = array('fields_app_price_tiers_example'); // string[] | the fields to include for returned resources of type appPriceTiers
$fields_apps = array('fields_apps_example'); // string[] | the fields to include for returned resources of type apps
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include

try {
    $result = $apiInstance->appsPricesGetToManyRelated($id, $fields_app_prices, $fields_app_price_tiers, $fields_apps, $limit, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPricesGetToManyRelated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_app_prices** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPrices | [optional]
 **fields_app_price_tiers** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type appPriceTiers | [optional]
 **fields_apps** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type apps | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]

### Return type

[**\OpenAPI\Client\Model\AppPricesResponse**](../Model/AppPricesResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsUpdateInstance

> \OpenAPI\Client\Model\AppResponse appsUpdateInstance($id, $app_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$app_update_request = new \OpenAPI\Client\Model\AppUpdateRequest(); // \OpenAPI\Client\Model\AppUpdateRequest | App representation

try {
    $result = $apiInstance->appsUpdateInstance($id, $app_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **app_update_request** | [**\OpenAPI\Client\Model\AppUpdateRequest**](../Model/AppUpdateRequest.md)| App representation |

### Return type

[**\OpenAPI\Client\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

