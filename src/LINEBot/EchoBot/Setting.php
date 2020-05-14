<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => '/42KeqBCYWdRREXvEhBYgIxnRd/YwD0qrbLGObjqz2jkLCBq2/fVRnTqmjJwqR+UIXBx4SK2dh2zfTTEx3rK3Rc+N+6Be7yrYmArDvEulUB0RhH8gdix6C9XaK4VGFrVTIJ4gyFV2WOVIgr3RPHXSwdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => '72396ec97ef80dc174055bc561a3d3bb',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
