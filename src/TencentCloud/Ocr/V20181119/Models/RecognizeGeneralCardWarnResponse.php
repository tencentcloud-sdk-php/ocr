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
 * RecognizeGeneralCardWarn返回参数结构体
 *
 * @method string getCardType() 获取卡证类型参数，包含以下范围： 
default：通用卡证
idcard：身份证 
passport：护照 
bizlicense：营业执照 
regcertificate：登记证书 
residpermit：居住证 
transpermit：通行证 
signboard：门头照 
bankcard：银行卡 
drivinglicense：驾驶证、行驶证
 * @method void setCardType(string $CardType) 设置卡证类型参数，包含以下范围： 
default：通用卡证
idcard：身份证 
passport：护照 
bizlicense：营业执照 
regcertificate：登记证书 
residpermit：居住证 
transpermit：通行证 
signboard：门头照 
bankcard：银行卡 
drivinglicense：驾驶证、行驶证
 * @method GeneralCardWarnInfo getBlur() 获取模糊信息
 * @method void setBlur(GeneralCardWarnInfo $Blur) 设置模糊信息
 * @method GeneralCardWarnInfo getBorderIncomplete() 获取边框不完整信息
 * @method void setBorderIncomplete(GeneralCardWarnInfo $BorderIncomplete) 设置边框不完整信息
 * @method GeneralCardWarnInfo getCopy() 获取复印件信息
 * @method void setCopy(GeneralCardWarnInfo $Copy) 设置复印件信息
 * @method GeneralCardWarnInfo getPs() 获取ps篡改信息
 * @method void setPs(GeneralCardWarnInfo $Ps) 设置ps篡改信息
 * @method GeneralCardWarnInfo getReflection() 获取反光信息
 * @method void setReflection(GeneralCardWarnInfo $Reflection) 设置反光信息
 * @method GeneralCardWarnInfo getReprint() 获取翻拍件信息
 * @method void setReprint(GeneralCardWarnInfo $Reprint) 设置翻拍件信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeGeneralCardWarnResponse extends AbstractModel
{
    /**
     * @var string 卡证类型参数，包含以下范围： 
default：通用卡证
idcard：身份证 
passport：护照 
bizlicense：营业执照 
regcertificate：登记证书 
residpermit：居住证 
transpermit：通行证 
signboard：门头照 
bankcard：银行卡 
drivinglicense：驾驶证、行驶证
     */
    public $CardType;

    /**
     * @var GeneralCardWarnInfo 模糊信息
     */
    public $Blur;

    /**
     * @var GeneralCardWarnInfo 边框不完整信息
     */
    public $BorderIncomplete;

    /**
     * @var GeneralCardWarnInfo 复印件信息
     */
    public $Copy;

    /**
     * @var GeneralCardWarnInfo ps篡改信息
     */
    public $Ps;

    /**
     * @var GeneralCardWarnInfo 反光信息
     */
    public $Reflection;

    /**
     * @var GeneralCardWarnInfo 翻拍件信息
     */
    public $Reprint;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CardType 卡证类型参数，包含以下范围： 
default：通用卡证
idcard：身份证 
passport：护照 
bizlicense：营业执照 
regcertificate：登记证书 
residpermit：居住证 
transpermit：通行证 
signboard：门头照 
bankcard：银行卡 
drivinglicense：驾驶证、行驶证
     * @param GeneralCardWarnInfo $Blur 模糊信息
     * @param GeneralCardWarnInfo $BorderIncomplete 边框不完整信息
     * @param GeneralCardWarnInfo $Copy 复印件信息
     * @param GeneralCardWarnInfo $Ps ps篡改信息
     * @param GeneralCardWarnInfo $Reflection 反光信息
     * @param GeneralCardWarnInfo $Reprint 翻拍件信息
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
        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = new GeneralCardWarnInfo();
            $this->Blur->deserialize($param["Blur"]);
        }

        if (array_key_exists("BorderIncomplete",$param) and $param["BorderIncomplete"] !== null) {
            $this->BorderIncomplete = new GeneralCardWarnInfo();
            $this->BorderIncomplete->deserialize($param["BorderIncomplete"]);
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = new GeneralCardWarnInfo();
            $this->Copy->deserialize($param["Copy"]);
        }

        if (array_key_exists("Ps",$param) and $param["Ps"] !== null) {
            $this->Ps = new GeneralCardWarnInfo();
            $this->Ps->deserialize($param["Ps"]);
        }

        if (array_key_exists("Reflection",$param) and $param["Reflection"] !== null) {
            $this->Reflection = new GeneralCardWarnInfo();
            $this->Reflection->deserialize($param["Reflection"]);
        }

        if (array_key_exists("Reprint",$param) and $param["Reprint"] !== null) {
            $this->Reprint = new GeneralCardWarnInfo();
            $this->Reprint->deserialize($param["Reprint"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
