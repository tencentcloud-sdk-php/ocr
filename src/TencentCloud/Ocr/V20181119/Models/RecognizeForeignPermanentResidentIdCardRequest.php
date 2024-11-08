<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeForeignPermanentResidentIdCard请求参数结构体
 *
 * @method string getImageUrl() 获取图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/docume
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/docume
 * @method string getImageBase64() 获取图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method boolean getEnablePdf() 获取是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method void setEnablePdf(boolean $EnablePdf) 设置是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
示例值：1
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
示例值：1
 * @method boolean getCropPortrait() 获取是否返回头像和位置坐标
 * @method void setCropPortrait(boolean $CropPortrait) 设置是否返回头像和位置坐标
 */
class RecognizeForeignPermanentResidentIdCardRequest extends AbstractModel
{
    /**
     * @var string 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/docume
     */
    public $ImageUrl;

    /**
     * @var string 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var boolean 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     */
    public $EnablePdf;

    /**
     * @var integer 需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
示例值：1
     */
    public $PdfPageNumber;

    /**
     * @var boolean 是否返回头像和位置坐标
     */
    public $CropPortrait;

    /**
     * @param string $ImageUrl 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
示例值：https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/docume
     * @param string $ImageBase64 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
支持的图片像素：需介于20-10000px之间。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param boolean $EnablePdf 是否开启PDF识别，默认值为false，开启后可同时支持图片和PDF的识别。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，传入时仅支持PDF单页识别，当上传文件为PDF且EnablePdf参数值为true时有效，默认值为1。
示例值：1
     * @param boolean $CropPortrait 是否返回头像和位置坐标
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("EnablePdf",$param) and $param["EnablePdf"] !== null) {
            $this->EnablePdf = $param["EnablePdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("CropPortrait",$param) and $param["CropPortrait"] !== null) {
            $this->CropPortrait = $param["CropPortrait"];
        }
    }
}
