<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 28.02.2018
 * Time: 14:16
 */

namespace App\Models;

use App\Model;

/**
 * Class Author
 * author model
 * @package App\Models
 */
class Author extends Model
{
    const TABLE = 'authors';
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var string $surname
     */
    public $surname;
}