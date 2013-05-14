<?php exit('Forbidden'); ?>
[2013-05-09 21:28:32] (Flux_Error) Exception Flux_Error: Critical MySQL error in Installer/Updater: Table 'cp_banlog' already exists
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Installer\Schema.php(155): Flux_Installer_Schema->install('20080928225124')
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Installer\MainServer.php(46): Flux_Installer_Schema->update()
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\install\index.php(83): Flux_Installer_MainServer->updateAll()
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(337): include('D:\Xampp\htdocs...')
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 21:28:32] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:39:30] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\ItemShop.php(176): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\purchase\index.php(28): Flux_ItemShop->getItems(Object(Flux_Paginator), NULL)
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(175): Flux_Template->render()
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #6 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:39:30] (Flux_Error) **TRACE** #7 {main}
[2013-05-09 22:39:47] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\ItemShop.php(176): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\purchase\index.php(28): Flux_ItemShop->getItems(Object(Flux_Paginator), NULL)
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(175): Flux_Template->render()
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #6 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:39:47] (Flux_Error) **TRACE** #7 {main}
[2013-05-09 22:40:03] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.mob_db' doesn't exist
[2013-05-09 22:40:03] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include()
[2013-05-09 22:40:03] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(175): Flux_Template->render()
[2013-05-09 22:40:03] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:40:03] (Flux_Error) **TRACE** #3 {main}
[2013-05-09 22:40:06] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:40:06] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include()
[2013-05-09 22:40:06] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(175): Flux_Template->render()
[2013-05-09 22:40:06] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:40:06] (Flux_Error) **TRACE** #3 {main}
[2013-05-09 22:43:49] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:43:49] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:43:53] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:43:53] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:44:00] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:44:00] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:44:52] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:44:52] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:45:38] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\ItemShop.php(176): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\purchase\index.php(28): Flux_ItemShop->getItems(Object(Flux_Paginator), NULL)
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #6 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:45:38] (Flux_Error) **TRACE** #7 {main}
[2013-05-09 22:46:32] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:46:32] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:46:32] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:46:37] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:46:37] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:46:40] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:46:40] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:47:27] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:47:27] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:47:36] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:47:36] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:47:37] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:47:37] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:47:46] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:47:46] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include()
[2013-05-09 22:47:46] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:47:46] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:47:46] (Flux_Error) **TRACE** #3 {main}
[2013-05-09 22:47:48] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.mob_db' doesn't exist
[2013-05-09 22:47:48] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include()
[2013-05-09 22:47:48] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:47:48] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:47:48] (Flux_Error) **TRACE** #3 {main}
[2013-05-09 22:48:42] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_geromecp.item_db_re' doesn't exist
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(100): Flux_Connection_Statement->execute()
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\TemporaryTable.php(72): Flux_TemporaryTable->create('ragnarok_gerome...')
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\account\view.php(16): Flux_TemporaryTable->__construct(Object(Flux_Connection), 'ragnarok_gerome...', Array)
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #4 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #5 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:48:42] (Flux_Error) **TRACE** #6 {main}
[2013-05-09 22:49:15] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_ra.mob_db2' doesn't exist
[2013-05-09 22:49:15] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\modules\character\view.php(67): Flux_Connection_Statement->execute(Array)
[2013-05-09 22:49:15] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include('D:\Xampp\htdocs...')
[2013-05-09 22:49:15] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 22:49:15] (Flux_Error) **TRACE** #3 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 22:49:15] (Flux_Error) **TRACE** #4 {main}
[2013-05-09 23:25:43] (Flux_Error) Exception Flux_Error: MySQL error (SQLSTATE: 42S02, ERROR: 1146): Table 'ragnarok_ra.mob_db2' doesn't exist
[2013-05-09 23:25:43] (Flux_Error) **TRACE** #0 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Template.php(338): include()
[2013-05-09 23:25:43] (Flux_Error) **TRACE** #1 D:\Xampp\htdocs\RO\gerome-fluxcp\lib\Flux\Dispatcher.php(176): Flux_Template->render()
[2013-05-09 23:25:43] (Flux_Error) **TRACE** #2 D:\Xampp\htdocs\RO\gerome-fluxcp\index.php(177): Flux_Dispatcher->dispatch(Array)
[2013-05-09 23:25:43] (Flux_Error) **TRACE** #3 {main}
