<?php

namespace App\Services;

use App\Models\Service;
use App\Models\Setting;
use App\Models\PageSetup;

class AppConfigService
{
    protected $setting;
    protected $navServices;
    protected $pageSetups;

    public function __construct()
    {
        $this->setting = Setting::first(); // Ambil setting pertama
        $this->navServices = Service::orderBy('id')->take(10)->get(); // Ambil 5 service pertama berdasarkan id
        $this->pageSetups = PageSetup::all()->keyBy('slug'); // Ambil semua page setups dan index berdasarkan slug
    }

    public function getSetting()
    {
        return $this->setting;
    }

    public function getServices()
    {
        return $this->navServices;
    }

    public function getPageSetups()
    {
        return $this->pageSetups;
    }
}
