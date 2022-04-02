<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrapperController extends Controller
{
    public function retrieve(){
        $json = Http::get('https://platform.antares.id:8443/~/antares-cse/antares-id/postman-1?X-M2M-Origin=92c529a7d49f22f1:eddf4914d305b705')->json();
        return response()->json($json);
}
    public function discover(){
    $json = Http::get('https://platform.antares.id:8443/~/antares-cse/antares-id/postman-1?X-M2M-Origin=92c529a7d49f22f1:eddf4914d305b705')->json();
    return response()->json($json);
}
    public function latest(){
        $json = Http::get('https://platform.antares.id:8443/~/antares-cse/antares-id/postman-1?X-M2M-Origin=92c529a7d49f22f1:eddf4914d305b705')->json();
        return response()->json($json);
}
}