<?php

namespace Bestmomo\Installer\Http\Controllers;

use AuthController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends AuthController
{
    /**
     * Show form.
     *
     * @return \Illuminate\View\View
     */
    public function createUser()
    {
        $fields = config('installer.fields');

        return view('vendor.installer.register', compact('fields'));
    }

    /**
     * Manage form submission.
     *
     * @param  Illuminate\Http\Request $request
     * @return 
     */
    public function storeUser(Request $request)
    {
        $request->merge(['password_confirmation' => $request->password]);

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = $this->create($request->all());

        if (method_exists($this, 'userAddValues')) {
            return $this->userAddValues($user);
        }

        return redirect('install/end');
    }

}