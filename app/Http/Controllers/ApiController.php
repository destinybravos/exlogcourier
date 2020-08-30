<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notify;

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
}
