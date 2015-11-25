<?php
/**
 * Copyright 2015 Spafaridis Xenofon
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Phramework\Examples\API;

/**
 * Base controller, contains shortcut helper methods.
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @author Spafaridis Xenofon <nohponex@gmail.com>
 */
class Controller
{
    /**
     * Shortcut to \Phramework\Phramework::view
     * @param array $params
     * @uses \Phramework\Phramework::view
     */
    protected static function view($params = [])
    {
        \Phramework\Phramework::view($params);
    }

    /**
     * If !assert then a NotFoundException exception is thrown.     *
     * @param mixed  $assert
     * @param string $exceptionMessage [Optional] Default is 'Resource not found'     *
     * @throws \Phramework\Exceptions\NotFoundException
     */
    protected static function exists($assert, $exceptionMessage = 'Resource not found')
    {
        if (!$assert) {
            throw new \Phramework\Exceptions\NotFoundException($exceptionMessage);
        }
    }

    /**
     * If !assert then a Exception exception is thrown.     *
     * @param mixed  $assert
     * @param string $exceptionMessage [Optional] Default is 'Unknown error'     *
     * @throws Exception
     */
    protected static function testUnknownError($assert, $exceptionMessage = 'Unknown error')
    {
        if (!$assert) {
            throw new \Exception($exceptionMessage);
        }
    }
}
