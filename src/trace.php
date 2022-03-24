<?php

xdebug_set_filter(
    XDEBUG_FILTER_STACK,
    XDEBUG_NAMESPACE_INCLUDE,
    [ '', 'Xdebug' ]
);
