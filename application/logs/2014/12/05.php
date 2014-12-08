<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-05 03:03:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/classes/Controller/Product.php [ 40 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:40
2014-12-05 03:03:38 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 40, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:40
2014-12-05 03:07:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Product.php [ 43 ] in file:line
2014-12-05 03:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 03:16:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/classes/Controller/Product.php [ 42 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:42
2014-12-05 03:16:49 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 42, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:42
2014-12-05 03:24:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/product.php [ 91 ] in file:line
2014-12-05 03:24:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 03:31:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/product.php [ 68 ] in /home/wap18/sites/ecommerce/application/views/product.php:68
2014-12-05 03:31:39 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/product.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 68, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(24): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/product.php:68
2014-12-05 05:45:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 05:45:52 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 07:25:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND) ~ APPPATH/classes/Controller/Product.php [ 46 ] in file:line
2014-12-05 07:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 08:32:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:32:44 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:43:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:43:11 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:48:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:48:12 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:59:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:59:29 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:59:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/Product.php [ 49 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 08:59:39 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 49, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:49
2014-12-05 09:01:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: quantity ~ APPPATH/classes/Controller/Product.php [ 52 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:52
2014-12-05 09:01:38 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 52, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addproduct()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:52