<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-08 04:16:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Cart ~ APPPATH/views/product.php [ 85 ] in /home/wap18/sites/ecommerce/application/views/product.php:85
2014-12-08 04:16:29 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/product.php(85): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 85, Array)
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
#12 {main} in /home/wap18/sites/ecommerce/application/views/product.php:85
2014-12-08 04:17:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Product.php [ 69 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:69
2014-12-08 04:17:26 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 69, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addcart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:69
2014-12-08 04:18:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Product.php [ 82 ] in file:line
2014-12-08 04:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 04:24:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH/views/product.php [ 90 ] in file:line
2014-12-08 04:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 04:48:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_product ~ APPPATH/views/product.php [ 41 ] in /home/wap18/sites/ecommerce/application/views/product.php:41
2014-12-08 04:48:02 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/product.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 41, Array)
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
#12 {main} in /home/wap18/sites/ecommerce/application/views/product.php:41
2014-12-08 05:16:11 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 29 ] in file:line
2014-12-08 05:16:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap18/sit...', 29, Array)
#1 /home/wap18/sites/ecommerce/application/classes/Helper/Database.php(29): PDOStatement->execute(Array)
#2 /home/wap18/sites/ecommerce/application/classes/Model/ProductManager.php(14): Helper_Database->queryOne('SELECT * FROM p...', Array)
#3 /home/wap18/sites/ecommerce/application/views/product.php(86): Model_ProductManager->getProduct(Array)
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#8 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(25): Kohana_Response->body(Object(View))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#12 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-12-08 05:23:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: variable ~ APPPATH/views/viewcart.php [ 30 ] in /home/wap18/sites/ecommerce/application/views/viewcart.php:30
2014-12-08 05:23:56 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/viewcart.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 30, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/viewcart.php:30
2014-12-08 05:35:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: quantity ~ APPPATH/classes/Controller/Product.php [ 75 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:75
2014-12-08 05:35:58 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap18/sit...', 75, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_addcart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:75
2014-12-08 07:45:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' ~ APPPATH/classes/Controller/Product.php [ 83 ] in file:line
2014-12-08 07:45:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 07:47:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' ~ APPPATH/classes/Controller/Product.php [ 83 ] in file:line
2014-12-08 07:47:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 07:47:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ',' or ')' ~ APPPATH/classes/Controller/Product.php [ 82 ] in file:line
2014-12-08 07:47:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 07:48:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ',' or ')' ~ APPPATH/classes/Controller/Product.php [ 82 ] in file:line
2014-12-08 07:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 07:49:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Product.php [ 82 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:82
2014-12-08 07:49:41 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 82, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_deleteCart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:82
2014-12-08 08:10:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/classes/Controller/Product.php [ 100 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:100
2014-12-08 08:10:01 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 100, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:100
2014-12-08 08:18:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/classes/Controller/Product.php [ 95 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:95
2014-12-08 08:18:54 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 95, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:95
2014-12-08 08:39:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/classes/Controller/Product.php [ 95 ] in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:95
2014-12-08 08:39:11 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 95, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap18/sites/ecommerce/application/classes/Controller/Product.php:95
2014-12-08 09:21:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH/views/viewcart.php [ 51 ] in /home/wap18/sites/ecommerce/application/views/viewcart.php:51
2014-12-08 09:21:06 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/viewcart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 51, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(98): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/viewcart.php:51
2014-12-08 09:21:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH/views/viewcart.php [ 51 ] in /home/wap18/sites/ecommerce/application/views/viewcart.php:51
2014-12-08 09:21:16 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/viewcart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 51, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(98): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/viewcart.php:51
2014-12-08 10:09:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantity ~ APPPATH/views/viewcart.php [ 40 ] in /home/wap18/sites/ecommerce/application/views/viewcart.php:40
2014-12-08 10:09:34 --- DEBUG: #0 /home/wap18/sites/ecommerce/application/views/viewcart.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap18/sit...', 40, Array)
#1 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap18/sit...')
#2 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap18/sit...', Array)
#3 /home/wap18/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap18/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap18/sites/ecommerce/application/classes/Controller/Product.php(98): Kohana_Response->body(Object(View))
#6 /home/wap18/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_viewcart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap18/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap18/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap18/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap18/sites/ecommerce/application/views/viewcart.php:40