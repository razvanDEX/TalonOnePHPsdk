# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this application. | 
**description** | **string** | A longer description of the application. | [optional] 
**timezone** | **string** | A string containing an IANA timezone descriptor. | 
**currency** | **string** | A string describing a default currency for new customer sessions. | 
**caseSensitivity** | **string** | A string indicating how should campaigns in this application deal with case sensitivity on coupon codes. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Default limits for campaigns created in this application | [optional] 
**attributesSettings** | [**\TalonOne\Client\Model\AttributesSettings**](AttributesSettings.md) |  | [optional] 
**loyaltyPrograms** | [**\TalonOne\Client\Model\LoyaltyProgram[]**](LoyaltyProgram.md) | An array containing all the loyalty programs to which this application is subscribed | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


