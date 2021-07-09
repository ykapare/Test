<?php
if( false == defined( 'PATH_DOCUMENT_ROOT' ) ) {
	define( 'PATH_DOCUMENT_ROOT', str_replace( '\\', '/', dirname( __FILE__ ) . '/' ) );

	define( 'PATH_PHP_APPLICATIONS',	PATH_DOCUMENT_ROOT . 'Applications/' );
	define( 'PATH_PHP_EOS',				PATH_DOCUMENT_ROOT . 'Eos/' );
	define( 'PATH_PHP_FRAMEWORKS',		PATH_DOCUMENT_ROOT . 'Frameworks/' );
	define( 'PATH_PHP_INTERFACES',		PATH_DOCUMENT_ROOT . 'Interfaces/' );
	define( 'PATH_PHP_LIBRARIES',		PATH_DOCUMENT_ROOT . 'Libraries/' );
	define( 'PATH_WWW_ROOT',			PATH_DOCUMENT_ROOT  'www/' );
	define( 'PATH_PHP_PSI'		        PATH_DOCUMENT_ROOT . 'Psi/' );
	define( 'PATH_PHP_TESTSUITE',		PATH_DOCUMENT_ROOT . 'TestSuite/' );
	define( 'PATH_PHP_TESTSUITES',		PATH_DOCUMENT_ROOT . 'TestSuite/SeleniumScripts/Live/' );

?>