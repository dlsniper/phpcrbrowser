<?php
/**
 * This file contains {@link Credentials} which is part of the PHP Content Repository
 * (phpCR), a derivative of the Java Content Repository JSR-170,  and is 
 * licensed under the Apache License, Version 2.0.
 *
 * This file is based on the code created for
 * {@link http://www.jcp.org/en/jsr/detail?id=170 JSR-170}
 *
 * @author Travis Swicegood <development@domain51.com>
 * @copyright PHP Code Copyright &copy; 2004-2005, Domain51, United States
 * @copyright Original Java and Documentation 
 *    Copyright &copy; 2002-2004, Day Management AG, Switerland
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, 
 *    Version 2.0
 * @package phpContentRepository
 */


/**
 * Interface for all credentials that may be passed to the
 * {@link Repository::login()} method.
 *
 * Serves as a marker interface that all repositories must implement when
 * providing a credentials class. See {@link SimpleCredentials} for one example
 * of such a class.
 *
 * @package phpContentRepository
 */
interface phpCR_Credentials 
{
	
}

?>