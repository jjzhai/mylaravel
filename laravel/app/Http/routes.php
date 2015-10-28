 <?php

// Route::get('/jjzhai/ha', [
//     'as' => 'zxc', function () {
//         return 'hahalll';
// }]);

// Route::get('/pagea',  function () {
//         return view('admin.login.index');
// });

use App\Services\Routes as RoutesManager;

$routesManager = new RoutesManager();
$routesManager->admin();