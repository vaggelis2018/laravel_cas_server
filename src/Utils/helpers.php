<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/14
 * Time: 11:25
 */

if (!function_exists('cas_route')) {
    /**
     * @param string $name
     * @param array  $parameters
     * @param bool   $absolute
     * @return string
     */
    function cas_route($name, $parameters = [], $absolute = true)
    {
        $name = config('cas.router.name_prefix').$name;

        return route($name, $parameters, $absolute);
    }
}
