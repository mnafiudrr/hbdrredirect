<?php

namespace App\Http\Controllers;

use App\Helpers\UserSystemInfoHelper;
use App\Models\Log;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function Index()
    {
        $ip = UserSystemInfoHelper::get_ip();
        $browser = UserSystemInfoHelper::get_browsers();
        $device = UserSystemInfoHelper::get_device();
        $os = UserSystemInfoHelper::get_os();
        $mac =  substr(exec('getmac'), 0, 17);
        $mac2 =  substr(shell_exec('getmac'), 159,20);
        $link = url()->current();
        $keterangan = "masuuk";
        # code...
        Log::create([
            'ip' => $ip,
            'browser' => $browser,
            'device' => $device,
            'os' => $os,
            'mac' => $mac,
            'mac2' => $mac2,
            'link' => $link,
            'keterangan' => $keterangan,
        ]);

        return redirect()->away('https://selamat.ulang.tahun.ratrika.site/kalo-hadiahnya-kek-gini-gimana-ratt');
    }
}
