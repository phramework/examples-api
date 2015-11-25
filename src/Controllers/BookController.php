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

namespace Phramework\Examples\API\Controllers;

use \Phramework\Phramework;
use \Phramework\Validate\Validate;
use \Phramework\Models\Request;
use \Phramework\Models\Util;
use \Phramework\Examples\API\Models\Book;

/**
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @author Spafaridis Xenofon <nohponex@gmail.com>
 */
class BookController extends \Phramework\Examples\API\Controller
{
    public static function GET($params, $method, $headers)
    {
        $data = Book::get();

        self::view(['data' => $data]);
    }

    public static function GETSingle($params, $method, $headers, $id)
    {
        $id = Request::requireId($params);

        $data = Book::getById($id);

        self::exists($data);

        self::view([
            'data' => $data
        ]);
    }

    public static function POST($params, $method, $headers)
    {
        throw new \Phramework\Exceptions\NotImplemented();
    }
}
