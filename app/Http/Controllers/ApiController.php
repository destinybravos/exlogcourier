<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notify;
use App\parcel;

class ApiController extends Controller
{
    public function create_notification(Request $request)
    {
        
        $notification = new notify;
        $notification->msg = $request->msg;
        if($notification->save()){
            return json_encode([
                'status' => 'successfull',
                'message' => 'Notification saved successfully'
            ]);
        }else{
            return json_encode([
                'status' => 'error',
                'message' => 'Notification could not be saved'
            ]);
        }
    }

    public function check_notification(Request $request)
    {
        $notify = notify::where('status', 'active')->orderBy('id', 'DESC')->get();
        if(count($notify) > 0){
            $result = [
                'count' => count($notify),
                'notification' => $notify
            ];
        }else{
            $result = [
                'count' => count($notify)
            ];
        }

        return json_encode($result);
    }

    // Create Parcel function
    public function create_parcel(Request  $req){
        // return $req;
        $saveParcel =  new parcel;
        $saveParcel->sname = $req->sname;
        $saveParcel->rname = $req->rname;
        $saveParcel->raddress = $req->raddress;
        $saveParcel->rcountry = $req->rcountry;
        $saveParcel->remail = $req->remail;
        $saveParcel->rphone = $req->rphone;
        $saveParcel->description = $req->description;
        $saveParcel->dimension = $req->dimension;
        $saveParcel->clocation = $req->clocation;
        $saveParcel->days = $req->days;
        $saveParcel->message = $req->message;
        $saveParcel->trackid = $req->trackid;
        if($saveParcel->save()){
            return json_encode([
                'statu' => 'success',
                'message' => 'Parcel Content Uploaded Successfully'
            ]);
        }else{
            return json_encode([
                'statu' => 'error',
                'message' => 'Parcel could not be uploaded'
            ]);
        }
    }

    // Get parcel details
    public function get_parcel(Request $check){
        // return $check;
        $getParcel = parcel::where('trackid',$check->trackid)->get();
        if(count($getParcel) > 0){
           $result = [
               'count' => count($getParcel),
               'parceldetail' => $getParcel
           ];
        }else{
            $result = [
                'count' => count($getParcel)
            ];
        }

        return json_encode($result);
    }

    public function fetch_all(Request $request)
    {
        $all_parcel = parcel::orderBy('created_at', 'DESC')->get();
        return json_encode($all_parcel);
    }
}
