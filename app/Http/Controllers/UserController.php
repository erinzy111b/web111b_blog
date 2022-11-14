<?php

//app\Http\Controllers\UserController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function show()
    {
        return 'Oooooooops!';
    }
}

/*
namespace App\Http\Controllers;

class UserController extends Controller
{
/**
 * Show the profile for a given user.
 *
 * @param  int  $id
 * @return \Illuminate\View\View

public function show($id)
{
return view('user.profile', [
'user' => UserController::findOrFail($id),
]);
}
}
 */
