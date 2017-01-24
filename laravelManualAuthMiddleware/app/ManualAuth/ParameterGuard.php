<?php

/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 25/10/16
 * Time: 20:07
 */

namespace App\ManualAuth;

use Illuminate\Http\Request;

class ParameterGuard implements Guard
{
    protected $request;

    /**
     * ManualGuardByIdParameter constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * ManualGuard constructor.
     */


    public function check()
    {
        if($this->request->has('id')){

            return true;

        }
    }
}