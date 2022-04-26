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
 * RecognizeHealthCodeOCR返回参数结构体
 *
 * @method string getName() 获取持码人姓名，如：王*
 * @method void setName(string $Name) 设置持码人姓名，如：王*
 * @method string getIDNumber() 获取持码人身份证号，如：11**************01
 * @method void setIDNumber(string $IDNumber) 设置持码人身份证号，如：11**************01
 * @method string getTime() 获取健康码更新时间
 * @method void setTime(string $Time) 设置健康码更新时间
 * @method string getColor() 获取健康码颜色：绿色、黄色、红色
 * @method void setColor(string $Color) 设置健康码颜色：绿色、黄色、红色
 * @method string getTestingInterval() 获取核酸检测间隔时长：24小时、48小时、72小时、暂无核酸检测记录
 * @method void setTestingInterval(string $TestingInterval) 设置核酸检测间隔时长：24小时、48小时、72小时、暂无核酸检测记录
 * @method string getTestingResult() 获取核酸检测结果：阴性、阳性、暂无核酸检测记录
 * @method void setTestingResult(string $TestingResult) 设置核酸检测结果：阴性、阳性、暂无核酸检测记录
 * @method string getTestingTime() 获取核酸检测时间
 * @method void setTestingTime(string $TestingTime) 设置核酸检测时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeHealthCodeOCRResponse extends AbstractModel
{
    /**
     * @var string 持码人姓名，如：王*
     */
    public $Name;

    /**
     * @var string 持码人身份证号，如：11**************01
     */
    public $IDNumber;

    /**
     * @var string 健康码更新时间
     */
    public $Time;

    /**
     * @var string 健康码颜色：绿色、黄色、红色
     */
    public $Color;

    /**
     * @var string 核酸检测间隔时长：24小时、48小时、72小时、暂无核酸检测记录
     */
    public $TestingInterval;

    /**
     * @var string 核酸检测结果：阴性、阳性、暂无核酸检测记录
     */
    public $TestingResult;

    /**
     * @var string 核酸检测时间
     */
    public $TestingTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 持码人姓名，如：王*
     * @param string $IDNumber 持码人身份证号，如：11**************01
     * @param string $Time 健康码更新时间
     * @param string $Color 健康码颜色：绿色、黄色、红色
     * @param string $TestingInterval 核酸检测间隔时长：24小时、48小时、72小时、暂无核酸检测记录
     * @param string $TestingResult 核酸检测结果：阴性、阳性、暂无核酸检测记录
     * @param string $TestingTime 核酸检测时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IDNumber",$param) and $param["IDNumber"] !== null) {
            $this->IDNumber = $param["IDNumber"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("TestingInterval",$param) and $param["TestingInterval"] !== null) {
            $this->TestingInterval = $param["TestingInterval"];
        }

        if (array_key_exists("TestingResult",$param) and $param["TestingResult"] !== null) {
            $this->TestingResult = $param["TestingResult"];
        }

        if (array_key_exists("TestingTime",$param) and $param["TestingTime"] !== null) {
            $this->TestingTime = $param["TestingTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
