<?php


namespace App;


use App\Models\Author;

abstract class Model
{
    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findId()
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT id FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 1',
            static::class
        );
        return $res[0]->id;
    }

    public static function findNum($num)
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE .' ORDER BY id DESC LIMIT '.$num,
            static::class
        );
    }
    /**
    * @return author_id
     */

    public static function findAuthor(Author $author)
    {
        $db = Db::instance();
        $author_id  = $db->query(
            'SELECT id FROM ' . static::TABLE .' WHERE name=:name AND surname=:surname',
            static::class, [':name' => $author->name, ':surname' => $author->surname]
        );
        if ($author_id){return $author_id[0]->id;}else{return false;}
    }


    public static function findById(int $id)
    {
        $db = Db::instance();
        $res = $db->query(
        'SELECT * FROM ' . static::TABLE.' WHERE id=:id ',
        static::class, [':id' => $id]
        );
        if($res){return $res[0];}else{return false;}

    }

    public static function deleteById(int $id)
    {
        $db = Db::instance();
            $sql = 'DELETE FROM ' . static::TABLE.' WHERE id=:id ';
            $param = [':id' => $id];

            $db->query($sql, static::class, $param);


    }



    /**
     * cheks if model is new
     * @return bool
     */
    public function isNew()
    {
        return empty($this->id);
    }
    /**
     * save method
     * @return bool
     */
    public function save()
    {
        if ($this->isNew()) {
            return $this->insert2();
        } else {
            return $this->update2();
        }
    }

    public function insert($values = [])
    {
        if(!$this->isNew()) {
            return;
        }
        $columns = [];
        $val = [];
        foreach ($this as $k => $v){
            if ('id' == $k || 'time' === $k){
                continue;
            }
            $columns[] = $k;

            foreach ($values as $k2 => $v2)
            {
                if ($k == $k2) {
                    $val[':' . $k2] = $v2;
                }
            }

        }

        $sql = 'INSERT INTO '. static::TABLE . ' 
        (' . implode(',',$columns) . ') 
        VALUES 
        (' . implode(',', array_keys($val)) .')
        ';
        //var_dump($sql);
        //var_dump($val);
         $db = Db::instance();
         $db->execute($sql, $val);
         $this->id = static::findId();
         return $this->id;
    }

    /**
     * insert method
     * @return bool
     */
    public function insert2()
    {
        $columns = [];
        $values = [];
        foreach ($this as $key => $val) {
            if ($key === 'id' || $key === 'time') {
                continue;
            }
            $columns[] = $key;
            $values[':' . $key] = $val;
        }
        $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $columns) . ')
            VALUES(' . implode(',', array_keys($values)) . ')';
        $db = Db::instance();
        $res = $db->execute($sql, $values);
        if ($res === false) {
            return false;
        }
        $this->id = static::findId();
        return $this->id;
    }

    public  function update($id, $values = [])
    {

            if (static::findById($id)) {
                $val = [];

                foreach ($this as $k => $v) {
                    if (isset($values [$k])) {
                        $valset[$k . '=:' . $k] = '';


                    }
                }

                foreach ($values as $k => $v) {
                    $val[':' . $k] = $v;
                }
                //var_dump($val);

                $sql = 'UPDATE ' . static::TABLE . ' SET
         
        ' . implode(',', array_keys($valset)) . ' 
         WHERE id = ' . $id;

                //var_dump($sql);
                $db = Db::instance();
                $db->execute($sql, $val);
                return $id;
            }else {return false;}

    }

    /**
     * update method
     * @return bool
     */
    public function update2()
    {
        $columns = [];
        $values = [];
        foreach ($this as $key => $val) {
            if ($key !== 'id') {
                $columns[] = $key . '=:' . $key;
            }
            $values[':' . $key] = $val;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',', $columns) . ' WHERE id=:id';
        $db = Db::instance();
        return $db->execute($sql, $values);
    }




}