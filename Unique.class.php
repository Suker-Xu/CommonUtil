<?php
/**
 * Unique类，用于生成随机值
 *
 * @desc 产生唯一值
 * @author guohuixu
 * @date 2017-03-22
 */
class Unique
{
    /**
     * 根据干扰值，产生唯一值
     *
     * @author guohuixu
     * @date 2017-03-22
     * @param string $annoyance
     * @return string 返回md5之后的32个字符
     */
    public static function get($annoyance)
    {
        $str = $annoyance . microtime(true) . self::randStr();
        return md5($str);
    }

    /**
     * 随机产生字符串
     *
     * @author guohuixu
     * @date 2017-03-22
     * @param int $length
     * @return string
     */
    public static function randStr($length=6) 
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
    
}

