<?php

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin'; // Specify the 'admin' guard here
}
 