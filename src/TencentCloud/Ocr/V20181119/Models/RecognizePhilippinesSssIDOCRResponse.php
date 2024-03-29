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
 * RecognizePhilippinesSssIDOCR返回参数结构体
 *
 * @method TextDetectionResult getHeadPortrait() 获取人像照片Base64后的结果
 * @method void setHeadPortrait(TextDetectionResult $HeadPortrait) 设置人像照片Base64后的结果
 * @method TextDetectionResult getLicenseNumber() 获取编号
 * @method void setLicenseNumber(TextDetectionResult $LicenseNumber) 设置编号
 * @method TextDetectionResult getFullName() 获取姓名
 * @method void setFullName(TextDetectionResult $FullName) 设置姓名
 * @method TextDetectionResult getBirthday() 获取生日
 * @method void setBirthday(TextDetectionResult $Birthday) 设置生日
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizePhilippinesSssIDOCRResponse extends AbstractModel
{
    /**
     * @var TextDetectionResult 人像照片Base64后的结果
     */
    public $HeadPortrait;

    /**
     * @var TextDetectionResult 编号
     */
    public $LicenseNumber;

    /**
     * @var TextDetectionResult 姓名
     */
    public $FullName;

    /**
     * @var TextDetectionResult 生日
     */
    public $Birthday;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TextDetectionResult $HeadPortrait 人像照片Base64后的结果
     * @param TextDetectionResult $LicenseNumber 编号
     * @param TextDetectionResult $FullName 姓名
     * @param TextDetectionResult $Birthday 生日
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HeadPortrait",$param) and $param["HeadPortrait"] !== null) {
            $this->HeadPortrait = new TextDetectionResult();
            $this->HeadPortrait->deserialize($param["HeadPortrait"]);
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = new TextDetectionResult();
            $this->LicenseNumber->deserialize($param["LicenseNumber"]);
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = new TextDetectionResult();
            $this->FullName->deserialize($param["FullName"]);
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = new TextDetectionResult();
            $this->Birthday->deserialize($param["Birthday"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
