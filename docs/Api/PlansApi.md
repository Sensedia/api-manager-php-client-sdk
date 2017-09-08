# Swagger\Client\PlansApi

All URIs are relative to *https://localhost/api-manager/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clonePlan1**](PlansApi.md#clonePlan1) | **POST** /plans/{id}/clone | Clone a plan
[**createPlan1**](PlansApi.md#createPlan1) | **POST** /plans | Create a new plan
[**getAllPlan1**](PlansApi.md#getAllPlan1) | **GET** /plans | Return all plan
[**getChangeLogByPlanId1**](PlansApi.md#getChangeLogByPlanId1) | **GET** /plans/{id}/changelog | Retrive changelog per plan id
[**getPlanById1**](PlansApi.md#getPlanById1) | **GET** /plans/{id} | Find plan by id
[**getPlanDefaultByApiId1**](PlansApi.md#getPlanDefaultByApiId1) | **GET** /plans/{id}/defaultPlan | Find default plan by api id
[**plansCount1**](PlansApi.md#plansCount1) | **GET** /plans/count | Retrieve plan total
[**removePlan1**](PlansApi.md#removePlan1) | **DELETE** /plans/{id} | Delete a plan
[**updatePlan1**](PlansApi.md#updatePlan1) | **PUT** /plans/{id} | Update a plan
[**validatePartialPlan1**](PlansApi.md#validatePartialPlan1) | **POST** /plans/validate | Validate partial a plan


# **clonePlan1**
> \Swagger\Client\Model\PlanResponse clonePlan1($id, $sensedia_auth)

Clone a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = "id_example"; // string | Plan id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->clonePlan1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->clonePlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPlan1**
> \Swagger\Client\Model\PlanResponse createPlan1($plan_bean, $sensedia_auth)

Create a new plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$plan_bean = new \Swagger\Client\Model\PlanResponse(); // \Swagger\Client\Model\PlanResponse | planBean
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->createPlan1($plan_bean, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_bean** | [**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)| planBean |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPlan1**
> \Swagger\Client\Model\PlanResponse[] getAllPlan1($sensedia_auth)

Return all plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getAllPlan1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getAllPlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse[]**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeLogByPlanId1**
> \Swagger\Client\Model\ChangeLogBean[] getChangeLogByPlanId1($id, $sensedia_auth)

Retrive changelog per plan id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = 789; // int | id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getChangeLogByPlanId1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getChangeLogByPlanId1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ChangeLogBean[]**](../Model/ChangeLogBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanById1**
> \Swagger\Client\Model\PlanResponse getPlanById1($id, $sensedia_auth)

Find plan by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = "id_example"; // string | id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getPlanById1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlanById1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlanDefaultByApiId1**
> \Swagger\Client\Model\PlanResponse getPlanDefaultByApiId1($id, $sensedia_auth)

Find default plan by api id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = "id_example"; // string | Api id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->getPlanDefaultByApiId1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlanDefaultByApiId1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Api id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plansCount1**
> int plansCount1($sensedia_auth)

Retrieve plan total

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->plansCount1($sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->plansCount1: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePlan1**
> \Swagger\Client\Model\ResponseEntity removePlan1($id, $sensedia_auth)

Delete a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = "id_example"; // string | Plan id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth

try {
    $result = $api_instance->removePlan1($id, $sensedia_auth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->removePlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlan1**
> \Swagger\Client\Model\PlanResponse updatePlan1($id, $sensedia_auth, $plan_bean)

Update a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$id = "id_example"; // string | Plan id
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$plan_bean = new \Swagger\Client\Model\PlanResponse(); // \Swagger\Client\Model\PlanResponse | Plan json to update a plan

try {
    $result = $api_instance->updatePlan1($id, $sensedia_auth, $plan_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Plan id |
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **plan_bean** | [**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)| Plan json to update a plan | [optional]

### Return type

[**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePartialPlan1**
> \Swagger\Client\Model\ResponseEntity validatePartialPlan1($sensedia_auth, $plan_bean)

Validate partial a plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PlansApi();
$sensedia_auth = "sensedia_auth_example"; // string | Sensedia-Auth
$plan_bean = new \Swagger\Client\Model\PlanResponse(); // \Swagger\Client\Model\PlanResponse | Plan json to validate a plan

try {
    $result = $api_instance->validatePartialPlan1($sensedia_auth, $plan_bean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->validatePartialPlan1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sensedia_auth** | **string**| Sensedia-Auth | [optional]
 **plan_bean** | [**\Swagger\Client\Model\PlanResponse**](../Model/PlanResponse.md)| Plan json to validate a plan | [optional]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

