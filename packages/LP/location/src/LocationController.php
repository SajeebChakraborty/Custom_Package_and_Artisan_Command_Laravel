<?php

namespace LP\Location;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Activity;

use Auth;

use DB;

class LocationController extends Controller
{

    public function userLocation()
    {

        

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        //get ip address

        $result=curl_exec($ch);
        $result=json_decode($result);

        //find out location

        if($result->status=='success'){
            echo "Country:".$result->country.'<br/>';
            echo "Region:".$result->regionName.'<br/>';
            echo "City:".$result->city.'<br/>';
            if(isset($result->lat) && isset($result->lon)){
                echo "Lat:".$result->lat.'<br/>';
                echo "Lon:".$result->lon.'<br/>';
            }
            echo "IP:".$result->query.'<br/>';

            echo"<b>data stored in database</b>";
            
        }

        /*

        $data=array();

        $data['user_id']=auth()->user()->id;
        $data['lattitude']=$result->lat;
        $data['longitude']=$result->lon;

        $storeLocation=DB::table('activitics')->Insert($data);

        */

        Activity::create([

            'user_id'   =>  Auth::user()->id,
            'lattitude'      => $result->lat,
            'longitude'   =>  $result->lon,
          

        ]);


    }

    public function admin()
    {

        $activity=Activity::all();

        echo"all user's lattitude & longitude";

        // dd($activity);

        return view('location::activity',compact('activity'));


    }


}
