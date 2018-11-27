<?php
/**
 * Created by PhpStorm.
 * User: zwyl
 * Date: 2018/11/27
 * Time: 11:39
 */
if ( ! function_exists ( 'config_path' ))
{
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function config_path ( $path = ' ' )
    {
        return app() -> basePath() .  ' /config ' .  ( $path ? ' / ' . $path : $path );
    }
}