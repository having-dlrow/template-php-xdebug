<?php
class Strings
{
    static function fix_string( $a )
    {
        echo
            xdebug_call_class( 2 ).
            "::".
            xdebug_call_function( 2 ).
            " is called at ".
            xdebug_call_file( 2 ).
            ":".
            xdebug_call_line( 2 );
    }

    static function fix_strings( array $a )
    {
        foreach ( $a as $element )
        {
            self::fix_string( $a );
        }
    }
}

$ret = Strings::fix_strings( [ 'Derick' ] );
?>