<?php


namespace App;


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
            'SELECT * FROM ' . static::TABLE .' LIMIT '.$num,
            static::class
        );
    }


    public static function findById(int $id)
    {
        $db = Db::instance();
        $res = $db->query(
        'SELECT * FROM ' . static::TABLE.' WHERE id=:id ',
        static::class, [':id' => $id]
        );
        if($res){return $res;}else{return false;}
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if(!$this->isNew()) {
            return;
        }
        $columns = [];
        $values = [];

        foreach ($this as $k => $v){
            if ('id' == $k){
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }


        $sql = 'INSERT INTO '. static::TABLE . ' 
        (' . implode(',',$columns) . ') 
        VALUES 
        (' . implode(',', array_keys($values)) .')
        ';
        var_dump($sql);
        var_dump($values);
         $db = Db::instance();
         $db->execute($sql, $values);
         $this->id = static::findId();
         return $this->id;
    }


    public static function update($id, $values = [])
    {
        $res =  static::findById($id);
        $res = (array) $res[0];

        //var_dump($res);
        if ($res)
        {

            $val = [];

            foreach ($res as $k => $v){
                if (isset($values [$k])) {
                    $valset[$k . '=:' . $k] = '';
                }
            }

            foreach ($values as $k => $v)
            {
                $val[':'.$k] = $v;
            }
           // var_dump($val);

            $sql = 'UPDATE '. static::TABLE . ' SET
         
        ' . implode(',', array_keys($valset)) .' 
         WHERE id = '. $id;

         //var_dump($sql);
            $db = Db::instance();
            $db->execute($sql, $val);
            return $id;

        }else {return false;}
    }

}