<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * BizLicenseOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method boolean getEnableCopyWarn() 获取是否返回告警码，默认为false
 * @method void setEnableCopyWarn(boolean $EnableCopyWarn) 设置是否返回告警码，默认为false
 * @method boolean getEnablePeriodComplete() 获取是否返回自动拼接的有效期，默认为true
 * @method void setEnablePeriodComplete(boolean $EnablePeriodComplete) 设置是否返回自动拼接的有效期，默认为true
 * @method boolean getEnableBusinessCertificate() 获取是否支持营业类证件识别（包括营业执照和非营业执照的其他证件），默认为false
 * @method void setEnableBusinessCertificate(boolean $EnableBusinessCertificate) 设置是否支持营业类证件识别（包括营业执照和非营业执照的其他证件），默认为false
 */
class BizLicenseOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var boolean 是否返回告警码，默认为false
     */
    public $EnableCopyWarn;

    /**
     * @var boolean 是否返回自动拼接的有效期，默认为true
     */
    public $EnablePeriodComplete;

    /**
     * @var boolean 是否支持营业类证件识别（包括营业执照和非营业执照的其他证件），默认为false
     */
    public $EnableBusinessCertificate;

    /**
     * @param string $ImageBase64 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param boolean $EnableCopyWarn 是否返回告警码，默认为false
     * @param boolean $EnablePeriodComplete 是否返回自动拼接的有效期，默认为true
     * @param boolean $EnableBusinessCertificate 是否支持营业类证件识别（包括营业执照和非营业执照的其他证件），默认为false
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("EnableCopyWarn",$param) and $param["EnableCopyWarn"] !== null) {
            $this->EnableCopyWarn = $param["EnableCopyWarn"];
        }

        if (array_key_exists("EnablePeriodComplete",$param) and $param["EnablePeriodComplete"] !== null) {
            $this->EnablePeriodComplete = $param["EnablePeriodComplete"];
        }

        if (array_key_exists("EnableBusinessCertificate",$param) and $param["EnableBusinessCertificate"] !== null) {
            $this->EnableBusinessCertificate = $param["EnableBusinessCertificate"];
        }
    }
}
