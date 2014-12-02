<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 04:48:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap18/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 04:48:14 --- DEBUG: #0 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('register')
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('register', NULL)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(19): Kohana_View::factory('register')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 05:59:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 21 ] in file:line
2014-12-01 05:59:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 06:00:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 21 ] in file:line
2014-12-01 06:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 06:00:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 21 ] in file:line
2014-12-01 06:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 06:51:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: userManager ~ APPPATH/classes/Controller/User.php [ 21 ] in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:21
2014-12-01 06:51:56 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 21, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:21
2014-12-01 07:00:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:23
2014-12-01 07:00:48 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 23, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:23
2014-12-01 07:00:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:23
2014-12-01 07:00:50 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 23, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/User.php:23
2014-12-01 07:21:48 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:21:48 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('vcbvcbvcb', 'vcbcvbcb', 'cvbcvbcvb', 'vcbvcbc')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:23:19 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:23:19 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('vcbvcbvcb', 'vcbcvbcb', 'cvbcvbcvb', 'vcbvcbc')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:24:49 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:24:49 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('bhgfbfg', 'bgfbgf', 'bgfbgf', 'bfgbfg')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:25:26 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:25:26 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('bhgfbfg', 'bgfbgf', 'bgfbgf', '')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:25:36 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:25:36 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('fgfdgf', 'fdgdfgdg', 'dgdfgdfg', 'dgdfgfd')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:28:52 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:28:52 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('ghgfhgf', 'hfghfh', 'fghfhf', 'fhgfgh')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:31:05 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:31:05 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('fdfdsf', 'fdsfsdf', 'sfsfs', 'dsfsdf')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:31:54 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:31:54 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('hjghj', 'hgjghj', 'hgjghj', 'ghjgh')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:40:24 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.user' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 36 ] in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 07:40:24 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(36): PDOStatement->execute(Array)
#1 /home/wap18/sites/ecommerce/application/classes/Model/UserManager.php(24): Helper_Database->execute('INSERT INTO use...', Array)
#2 /home/wap18/sites/ecommerce/application/classes/Controller/User.php(31): Model_UserManager->createUser('vcbvcb', 'cbcvbv', 'vcbcvb', 'cvbcb')
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap18/sites/ecommerce/application/classes/Helper/Database.php:36
2014-12-01 08:04:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:04:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:05:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:05:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:10:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:11:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:11:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:11:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:11:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:11:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:16:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:16:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserManager::userExists() ~ APPPATH/classes/Controller/User.php [ 11 ] in file:line
2014-12-01 08:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:34:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/views/index.php [ 18 ] in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 08:34:35 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 18, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Welcome.php(8): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 09:42:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/index.php [ 18 ] in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 09:42:25 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 18, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Welcome.php(8): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 09:42:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/views/index.php [ 18 ] in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 09:42:59 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 18, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Welcome.php(8): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/index.php:18
2014-12-01 09:44:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/index.php [ 17 ] in file:line
2014-12-01 09:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 09:44:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/index.php [ 17 ] in file:line
2014-12-01 09:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 09:44:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/index.php [ 17 ] in file:line
2014-12-01 09:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line