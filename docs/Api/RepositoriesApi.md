# Swagger\Client\RepositoriesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRepositories**](RepositoriesApi.md#getRepositories) | **GET** /v1/repositories | List repositories


# **getRepositories**
> \Swagger\Client\Model\RepositoryXO[] getRepositories()

List repositories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Apiida\Nexus\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRepositories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RepositoryXO[]**](../Model/RepositoryXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

