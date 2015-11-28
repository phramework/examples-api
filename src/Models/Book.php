<?php
/**
 * Copyright 2015 Xenofon Spafaridis
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
namespace Phramework\Examples\API\Models;

/**
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @author Xenofon Spafaridis <nohponex@gmail.com>
 */
class Book
{
    public static function get()
    {
        return [
            [
               'type' => 'book',
               'id' => 1,
               'attributes' => [
                   'title' => 'A book'
               ]
            ],
            [
                'type' => 'book',
                'id' => 2,
                'attributes' => [
                    'title' => 'Another book'
                ]
            ]
        ];
    }

    public static function getById($id)
    {
        $books = self::get();

        if ($id <= 0 || $id > count($books)) {
            return false;
        }

        return $books[$id-1];
    }
}
