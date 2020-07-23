# OpenAPI\Client\BetaAppReviewSubmissionsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**betaAppReviewSubmissionsBuildGetToOneRelated**](BetaAppReviewSubmissionsApi.md#betaAppReviewSubmissionsBuildGetToOneRelated) | **GET** /v1/betaAppReviewSubmissions/{id}/build | 
[**betaAppReviewSubmissionsCreateInstance**](BetaAppReviewSubmissionsApi.md#betaAppReviewSubmissionsCreateInstance) | **POST** /v1/betaAppReviewSubmissions | 
[**betaAppReviewSubmissionsGetCollection**](BetaAppReviewSubmissionsApi.md#betaAppReviewSubmissionsGetCollection) | **GET** /v1/betaAppReviewSubmissions | 
[**betaAppReviewSubmissionsGetInstance**](BetaAppReviewSubmissionsApi.md#betaAppReviewSubmissionsGetInstance) | **GET** /v1/betaAppReviewSubmissions/{id} | 



## betaAppReviewSubmissionsBuildGetToOneRelated

> \OpenAPI\Client\Model\BuildResponse betaAppReviewSubmissionsBuildGetToOneRelated($id, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaAppReviewSubmissionsBuildGetToOneRelated($id, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewSubmissionsApi->betaAppReviewSubmissionsBuildGetToOneRelated: ', $e->getMessage(), PHP_EOL;
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


## betaAppReviewSubmissionsCreateInstance

> \OpenAPI\Client\Model\BetaAppReviewSubmissionResponse betaAppReviewSubmissionsCreateInstance($beta_app_review_submission_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beta_app_review_submission_create_request = new \OpenAPI\Client\Model\BetaAppReviewSubmissionCreateRequest(); // \OpenAPI\Client\Model\BetaAppReviewSubmissionCreateRequest | BetaAppReviewSubmission representation

try {
    $result = $apiInstance->betaAppReviewSubmissionsCreateInstance($beta_app_review_submission_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewSubmissionsApi->betaAppReviewSubmissionsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **beta_app_review_submission_create_request** | [**\OpenAPI\Client\Model\BetaAppReviewSubmissionCreateRequest**](../Model/BetaAppReviewSubmissionCreateRequest.md)| BetaAppReviewSubmission representation |

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewSubmissionResponse**](../Model/BetaAppReviewSubmissionResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppReviewSubmissionsGetCollection

> \OpenAPI\Client\Model\BetaAppReviewSubmissionsResponse betaAppReviewSubmissionsGetCollection($filter_build, $filter_beta_review_state, $fields_beta_app_review_submissions, $limit, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_build = array('filter_build_example'); // string[] | filter by id(s) of related 'build'
$filter_beta_review_state = array('filter_beta_review_state_example'); // string[] | filter by attribute 'betaReviewState'
$fields_beta_app_review_submissions = array('fields_beta_app_review_submissions_example'); // string[] | the fields to include for returned resources of type betaAppReviewSubmissions
$limit = 56; // int | maximum resources per page
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaAppReviewSubmissionsGetCollection($filter_build, $filter_beta_review_state, $fields_beta_app_review_submissions, $limit, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewSubmissionsApi->betaAppReviewSubmissionsGetCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_build** | [**string[]**](../Model/string.md)| filter by id(s) of related &#39;build&#39; |
 **filter_beta_review_state** | [**string[]**](../Model/string.md)| filter by attribute &#39;betaReviewState&#39; | [optional]
 **fields_beta_app_review_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewSubmissions | [optional]
 **limit** | **int**| maximum resources per page | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

### Return type

[**\OpenAPI\Client\Model\BetaAppReviewSubmissionsResponse**](../Model/BetaAppReviewSubmissionsResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## betaAppReviewSubmissionsGetInstance

> \OpenAPI\Client\Model\BetaAppReviewSubmissionResponse betaAppReviewSubmissionsGetInstance($id, $fields_beta_app_review_submissions, $include, $fields_builds)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BetaAppReviewSubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$fields_beta_app_review_submissions = array('fields_beta_app_review_submissions_example'); // string[] | the fields to include for returned resources of type betaAppReviewSubmissions
$include = array('include_example'); // string[] | comma-separated list of relationships to include
$fields_builds = array('fields_builds_example'); // string[] | the fields to include for returned resources of type builds

try {
    $result = $apiInstance->betaAppReviewSubmissionsGetInstance($id, $fields_beta_app_review_submissions, $include, $fields_builds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BetaAppReviewSubmissionsApi->betaAppReviewSubmissionsGetInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **fields_beta_app_review_submissions** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type betaAppReviewSubmissions | [optional]
 **include** | [**string[]**](../Model/string.md)| comma-separated list of relationships to include | [optional]
 **fields_builds** | [**string[]**](../Model/string.md)| the fields to include for returned resources of type builds | [optional]

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

