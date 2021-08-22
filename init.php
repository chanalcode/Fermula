<?php

    # Объявление констант
    define( 'ROOT', $_SERVER['DOCUMENT_ROOT'] );
    define( 'CORE_DIR', ROOT . '/core' );
    define( 'LIBS_DIR', ROOT . '/libs' );
    define( 'TEMPLATE_DIR', ROOT . '/template' );

    # Подключение библиотек
    include_once( ROOT . '/config.php' );
    include_once( LIBS_DIR . '/smarty/Smarty.class.php' );
    include_once( LIBS_DIR . '/redbaen/rb-mysql.php' );
    include_once( LIBS_DIR . '/redbaen/rb-mysql.php' );

?>