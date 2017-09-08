# Swagger\Client\MetricsApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessTokensByMonth1**](MetricsApi.md#getAccessTokensByMonth1) | **GET** /metrics/access-tokens | Find access token consolited by month
[**getAppsByMonth1**](MetricsApi.md#getAppsByMonth1) | **GET** /metrics/apps | Find apps consolited by month
[**getCache1**](MetricsApi.md#getCache1) | **GET** /metrics/cache | Find cache
[**getCacheLatency1**](MetricsApi.md#getCacheLatency1) | **GET** /metrics/cache/latency | Find cache latency
[**getCacheSize1**](MetricsApi.md#getCacheSize1) | **GET** /metrics/cache/size | Retrive cache size
[**getCallsByMonth1**](MetricsApi.md#getCallsByMonth1) | **GET** /metrics/calls | Find calls by month
[**getHealth1**](MetricsApi.md#getHealth1) | **GET** /metrics/health | Find Health
[**getLatencyByMonth1**](MetricsApi.md#getLatencyByMonth1) | **GET** /metrics/latency | Find latency by month
[**getStatusError1**](MetricsApi.md#getStatusError1) | **GET** /metrics/statusError | Retrive Status Error
[**getTopAccessTokens1**](MetricsApi.md#getTopAccessTokens1) | **GET** /metrics/top-access-tokens/{howMany} | Find top access token
[**getTopApps1**](MetricsApi.md#getTopApps1) | **GET** /metrics/top-apps/{howMany} | Find top apps


# **getAccessTokensByMonth1**
> \Swagger\Client\Model\TokensMetric[] getAccessTokensByMonth1($sensedia_auth, $begin_date, $end_date, $resolution)

Find access token consolited by month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getAccessTokensByMonth1($sensedia_auth, $begin_date, $end_date, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAccessTokensByMonth1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\TokensMetric[]**](../Model/TokensMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppsByMonth1**
> \Swagger\Client\Model\TokensMetric[] getAppsByMonth1($sensedia_auth, $begin_date, $end_date, $resolution)

Find apps consolited by month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getAppsByMonth1($sensedia_auth, $begin_date, $end_date, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAppsByMonth1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\TokensMetric[]**](../Model/TokensMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCache1**
> \Swagger\Client\Model\OperationMetric[] getCache1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id, $begin_date, $end_date, $resolution)

Find cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_id = 789; // int | API id
$revision_id = 789; // int | Revision id
$operation_id = 789; // int | Operation id
$environment_id = 789; // int | Environment id
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getCache1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id, $begin_date, $end_date, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getCache1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_id** | **int**| API id | [optional]
 **revision_id** | **int**| Revision id | [optional]
 **operation_id** | **int**| Operation id | [optional]
 **environment_id** | **int**| Environment id | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\OperationMetric[]**](../Model/OperationMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCacheLatency1**
> \Swagger\Client\Model\OperationMetric[] getCacheLatency1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id, $begin_date, $end_date, $resolution)

Find cache latency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_id = 789; // int | API id
$revision_id = 789; // int | Revision id
$operation_id = 789; // int | Operation id
$environment_id = 789; // int | Environment id
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getCacheLatency1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id, $begin_date, $end_date, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getCacheLatency1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_id** | **int**| API id | [optional]
 **revision_id** | **int**| Revision id | [optional]
 **operation_id** | **int**| Operation id | [optional]
 **environment_id** | **int**| Environment id | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\OperationMetric[]**](../Model/OperationMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCacheSize1**
> \Swagger\Client\Model\CacheMetric getCacheSize1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id)

Retrive cache size

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$api_id = 789; // int | API id
$revision_id = 789; // int | Revision id
$operation_id = 789; // int | Operation id
$environment_id = 789; // int | Environment id

try {
    $result = $api_instance->getCacheSize1($sensedia_auth, $api_id, $revision_id, $operation_id, $environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getCacheSize1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **api_id** | **int**| API id | [optional]
 **revision_id** | **int**| Revision id | [optional]
 **operation_id** | **int**| Operation id | [optional]
 **environment_id** | **int**| Environment id | [optional]

### Return type

[**\Swagger\Client\Model\CacheMetric**](../Model/CacheMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsByMonth1**
> \Swagger\Client\Model\CallsMetric[] getCallsByMonth1($sensedia_auth, $begin_date, $end_date, $resolution, $environment_id, $api_id, $revision_id)

Find calls by month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution
$environment_id = 789; // int | Environment id
$api_id = 789; // int | API id
$revision_id = 789; // int | Revision id

try {
    $result = $api_instance->getCallsByMonth1($sensedia_auth, $begin_date, $end_date, $resolution, $environment_id, $api_id, $revision_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getCallsByMonth1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]
 **environment_id** | **int**| Environment id | [optional]
 **api_id** | **int**| API id | [optional]
 **revision_id** | **int**| Revision id | [optional]

### Return type

[**\Swagger\Client\Model\CallsMetric[]**](../Model/CallsMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHealth1**
> \Swagger\Client\Model\OperationHealth[] getHealth1($sensedia_auth, $health_portal)

Find Health

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$health_portal = true; // bool | Health Portal

try {
    $result = $api_instance->getHealth1($sensedia_auth, $health_portal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getHealth1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **health_portal** | **bool**| Health Portal | [optional]

### Return type

[**\Swagger\Client\Model\OperationHealth[]**](../Model/OperationHealth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLatencyByMonth1**
> \Swagger\Client\Model\LatencyMetric[] getLatencyByMonth1($sensedia_auth, $begin_date, $end_date, $resolution)

Find latency by month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getLatencyByMonth1($sensedia_auth, $begin_date, $end_date, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getLatencyByMonth1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\LatencyMetric[]**](../Model/LatencyMetric.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusError1**
> int getStatusError1($sensedia_auth)

Retrive Status Error

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getStatusError1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getStatusError1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopAccessTokens1**
> \Swagger\Client\Model\TopAccessToken[] getTopAccessTokens1($how_many, $sensedia_auth, $begin_date, $end_date, $status, $resolution)

Find top access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$how_many = 56; // int | How many
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$status = "status_example"; // string | Metric status
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getTopAccessTokens1($how_many, $sensedia_auth, $begin_date, $end_date, $status, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getTopAccessTokens1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **how_many** | **int**| How many |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **status** | **string**| Metric status | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\TopAccessToken[]**](../Model/TopAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopApps1**
> \Swagger\Client\Model\TopApp[] getTopApps1($how_many, $sensedia_auth, $begin_date, $end_date, $status, $resolution)

Find top apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MetricsApi();
$how_many = 56; // int | How many
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$begin_date = "begin_date_example"; // string | Begin date
$end_date = "end_date_example"; // string | End date
$status = "status_example"; // string | Metric status
$resolution = "resolution_example"; // string | Metric resolution

try {
    $result = $api_instance->getTopApps1($how_many, $sensedia_auth, $begin_date, $end_date, $status, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getTopApps1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **how_many** | **int**| How many |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **begin_date** | **string**| Begin date | [optional]
 **end_date** | **string**| End date | [optional]
 **status** | **string**| Metric status | [optional]
 **resolution** | **string**| Metric resolution | [optional]

### Return type

[**\Swagger\Client\Model\TopApp[]**](../Model/TopApp.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

