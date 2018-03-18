<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 18.03.2018
 * Time: 13:51
 */

namespace App;


class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
}