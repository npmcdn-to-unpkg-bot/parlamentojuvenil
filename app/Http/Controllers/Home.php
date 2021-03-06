<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Home extends BaseController
{
	public function force()
	{
		return $this->index(true);
	}

    public function index($force = false)
	{
		return $this->buildView('home', null, $force, true);
	}

    public function page($page)
    {
        return $this->buildView('2016.pages.'.$page);
    }

	public function index2016()
	{
		return $this->buildView('2016.home', null, true);
	}
}
