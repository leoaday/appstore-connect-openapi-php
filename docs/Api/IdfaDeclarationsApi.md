# OpenAPI\Client\IdfaDeclarationsApi

All URIs are relative to *https://api.appstoreconnect.apple.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**idfaDeclarationsCreateInstance**](IdfaDeclarationsApi.md#idfaDeclarationsCreateInstance) | **POST** /v1/idfaDeclarations | 
[**idfaDeclarationsDeleteInstance**](IdfaDeclarationsApi.md#idfaDeclarationsDeleteInstance) | **DELETE** /v1/idfaDeclarations/{id} | 
[**idfaDeclarationsUpdateInstance**](IdfaDeclarationsApi.md#idfaDeclarationsUpdateInstance) | **PATCH** /v1/idfaDeclarations/{id} | 



## idfaDeclarationsCreateInstance

> \OpenAPI\Client\Model\IdfaDeclarationResponse idfaDeclarationsCreateInstance($idfa_declaration_create_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IdfaDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idfa_declaration_create_request = new \OpenAPI\Client\Model\IdfaDeclarationCreateRequest(); // \OpenAPI\Client\Model\IdfaDeclarationCreateRequest | IdfaDeclaration representation

try {
    $result = $apiInstance->idfaDeclarationsCreateInstance($idfa_declaration_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdfaDeclarationsApi->idfaDeclarationsCreateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idfa_declaration_create_request** | [**\OpenAPI\Client\Model\IdfaDeclarationCreateRequest**](../Model/IdfaDeclarationCreateRequest.md)| IdfaDeclaration representation |

### Return type

[**\OpenAPI\Client\Model\IdfaDeclarationResponse**](../Model/IdfaDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## idfaDeclarationsDeleteInstance

> idfaDeclarationsDeleteInstance($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IdfaDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource

try {
    $apiInstance->idfaDeclarationsDeleteInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling IdfaDeclarationsApi->idfaDeclarationsDeleteInstance: ', $e->getMessage(), PHP_EOL;
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


## idfaDeclarationsUpdateInstance

> \OpenAPI\Client\Model\IdfaDeclarationResponse idfaDeclarationsUpdateInstance($id, $idfa_declaration_update_request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: itc-bearer-token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IdfaDeclarationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the id of the requested resource
$idfa_declaration_update_request = new \OpenAPI\Client\Model\IdfaDeclarationUpdateRequest(); // \OpenAPI\Client\Model\IdfaDeclarationUpdateRequest | IdfaDeclaration representation

try {
    $result = $apiInstance->idfaDeclarationsUpdateInstance($id, $idfa_declaration_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdfaDeclarationsApi->idfaDeclarationsUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the id of the requested resource |
 **idfa_declaration_update_request** | [**\OpenAPI\Client\Model\IdfaDeclarationUpdateRequest**](../Model/IdfaDeclarationUpdateRequest.md)| IdfaDeclaration representation |

### Return type

[**\OpenAPI\Client\Model\IdfaDeclarationResponse**](../Model/IdfaDeclarationResponse.md)

### Authorization

[itc-bearer-token](../../README.md#itc-bearer-token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

