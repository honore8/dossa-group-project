<?php

namespace App\Http\Middleware;

use App\Models\Country;
use App\Models\Visitor;
use Closure;
use hisorange\BrowserDetect\Facade as Browser;
use Illuminate\Http\Request;

class VisiteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $VisitorBrowser = Browser::browserName();
        $VisitorOs = Browser::platformName();
        $VisitorIpAddress = $request->ip();
        $userAgent = Browser::userAgent();
        $link = substr($request->fullUrl(), 0, 200);
        $VisitorIpAddress = getVisitorIp();
        try {
            $VisitorInfos = simplexml_load_file("http://ip-api.com/xml/" . $VisitorIpAddress);
        } catch (\Throwable $th) {
            return $next($request);
        }
        $VisitorCountry = $VisitorInfos->country;

        $findContry = Country::where('name', $VisitorCountry)->first();
        if ($findContry == NULL) {
          $country = Country::create(['name' => $VisitorCountry, 'code' => $VisitorInfos->countryCode, ]);
        } else {
            $country = $findContry;
        }

            $visitor = new Visitor();
            $visitor->country_id = $country->id;
            $visitor->ip_address = $VisitorIpAddress;
            $visitor->city = $VisitorInfos->city;
            $visitor->region_name = $VisitorInfos->regionName;
            $visitor->latitude = $VisitorInfos->lat;
            $visitor->longitude = $VisitorInfos->lon;
            $visitor->os = $VisitorOs;
            $visitor->browser = $VisitorBrowser;
            $visitor->is_bot = Browser::isBot();
            $visitor->device_model = Browser::deviceModel();
            $visitor->visite_link = $link;
            $visitor->save();


        return $next($request);
    }
}
