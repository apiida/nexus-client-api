# Swagger\Client\SupportApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supportzip**](SupportApi.md#supportzip) | **POST** /v1/support/supportzip | Creates and downloads a support zip


# **supportzip**
> supportzip($body)

Creates and downloads a support zip



### Example
```php
<?php
use Apiida\Nexus\Client\Model\Request;require_once(__DIR__ . '/vendor/autoload.php');
$apiInstance = new Apiida\Nexus\Client\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new Request(); // \Swagger\Client\Model\Request | 

try {
    $apiInstance->supportzip($body);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportzip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Request**](../Model/Request.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

