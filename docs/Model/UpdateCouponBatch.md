# # UpdateCouponBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 
**batchID** | **string** | The id of the batch the coupon belongs to. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


