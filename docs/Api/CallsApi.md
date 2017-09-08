# Swagger\Client\CallsApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retriveCallById1**](CallsApi.md#retriveCallById1) | **GET** /calls/{id} | Retrive call by id
[**retriveCallsWithFiltrs1**](CallsApi.md#retriveCallsWithFiltrs1) | **GET** /calls | Retrive calls with filters
[**retriveTotalCallsByDate1**](CallsApi.md#retriveTotalCallsByDate1) | **GET** /calls/count/{date} | Retrive calls total by date


# **retriveCallById1**
> \Swagger\Client\Model\Call retriveCallById1($id, $sensedia_auth)

Retrive call by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->retriveCallById1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->retriveCallById1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retriveCallsWithFiltrs1**
> \Swagger\Client\Model\CallResponse retriveCallsWithFiltrs1($sensedia_auth, $actual_page, $base_uris, $app_token_code, $page_size, $app_token_name, $auth_token_owner, $api_id, $operation_id, $resource_id, $environment_id, $revision_id, $uri, $custom_search, $method, $http_status_from, $http_status_to, $begin_date, $end_date, $app_developer, $force_download)

Retrive calls with filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$actual_page = 56; // int | Number of the page in pagination. The starting page number is zero.
$base_uris = "base_uris_example"; // string | Base uris
$app_token_code = "app_token_code_example"; // string | Code app token
$page_size = 56; // int | Define the size of the returned list of developers.
$app_token_name = "app_token_name_example"; // string | Name app token
$auth_token_owner = "auth_token_owner_example"; // string | Owner auth token
$api_id = 789; // int | API id
$operation_id = 789; // int | Operation id
$resource_id = 789; // int | Resource id
$environment_id = 789; // int | Environment id
$revision_id = 789; // int | Revision id
$uri = "uri_example"; // string | URI
$custom_search = "custom_search_example"; // string | Custom search
$method = "method_example"; // string | HTTP Method (GET, POST, PUT, DELETE, PATCH, OPTIONS, HEAD)
$http_status_from = 56; // int | HTTP status from
$http_status_to = 56; // int | HTTP status to
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$app_developer = "app_developer_example"; // string | APP Developer
$force_download = "force_download_example"; // string | Force archive download

try {
    $result = $api_instance->retriveCallsWithFiltrs1($sensedia_auth, $actual_page, $base_uris, $app_token_code, $page_size, $app_token_name, $auth_token_owner, $api_id, $operation_id, $resource_id, $environment_id, $revision_id, $uri, $custom_search, $method, $http_status_from, $http_status_to, $begin_date, $end_date, $app_developer, $force_download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->retriveCallsWithFiltrs1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **actual_page** | **int**| Number of the page in pagination. The starting page number is zero. | [optional]
 **base_uris** | **string**| Base uris | [optional]
 **app_token_code** | **string**| Code app token | [optional]
 **page_size** | **int**| Define the size of the returned list of developers. | [optional]
 **app_token_name** | **string**| Name app token | [optional]
 **auth_token_owner** | **string**| Owner auth token | [optional]
 **api_id** | **int**| API id | [optional]
 **operation_id** | **int**| Operation id | [optional]
 **resource_id** | **int**| Resource id | [optional]
 **environment_id** | **int**| Environment id | [optional]
 **revision_id** | **int**| Revision id | [optional]
 **uri** | **string**| URI | [optional]
 **custom_search** | **string**| Custom search | [optional]
 **method** | **string**| HTTP Method (GET, POST, PUT, DELETE, PATCH, OPTIONS, HEAD) | [optional]
 **http_status_from** | **int**| HTTP status from | [optional]
 **http_status_to** | **int**| HTTP status to | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **app_developer** | **string**| APP Developer | [optional]
 **force_download** | **string**| Force archive download | [optional]

### Return type

[**\Swagger\Client\Model\CallResponse**](../Model/CallResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retriveTotalCallsByDate1**
> int retriveTotalCallsByDate1($date, $sensedia_auth, $api_id)

Retrive calls total by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$date = "date_example"; // string | Date searched
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_id = 789; // int | API id

try {
    $result = $api_instance->retriveTotalCallsByDate1($date, $sensedia_auth, $api_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->retriveTotalCallsByDate1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date searched |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_id** | **int**| API id | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

