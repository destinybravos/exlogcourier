<?php

namespace App\Http\Controllers;

use App\notify;
use App\parcel;
use App\quotes;
use App\timeline;
use App\Mail\SupportEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        // check if parcel already exists
        $check = parcel::where('trackid',$req->trackid)->exists();
        if($check == true){
            return json_encode([
                'status' => 'exists',
                'message' => 'Parcel with Trackind ID ' . $req->trackid . ' already exists!'
            ]);
        }
        // return $req;
        $saveParcel =  new parcel;
        $days = $req->days;
        $start = date('U');
        $math = ($days * 86400)/4;
        $end = $start+($math*4);
        $saveStart = date('D, d M, Y.', $start);
        $saveEnd = date('D, d M, Y.', $end);
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
        $saveParcel->start = $saveStart;
        $saveParcel->end = $saveEnd;
        $saveParcel->startint = $start;
        $saveParcel->endint = $end;
            if($saveParcel->save()){
            // TIMELINE CODE FUNCTION
            $retriveParcel = parcel::where('trackid',$req->trackid)->get();
            foreach($retriveParcel as $parcel){
                $getTrackid = $parcel->trackid;
                $getLocation = $parcel->clocation;
                $getDate = date('D, d M, Y.', $start);
                $getTime = date('h:i:s A', $start);
                $activity = 'Parcel Reviewed and Logged in for Shipment';

                $saveTimeline = new timeline;
                $saveTimeline->trackid = $getTrackid;
                $saveTimeline->location = $getLocation;
                $saveTimeline->date = $getDate;
                $saveTimeline->time = $getTime;
                $saveTimeline->activity = $activity;
                $saveTimeline->save();
            }
            return json_encode([
                'status' => 'success',
                'message' => 'Parcel Content Uploaded Successfully'
            ]);
        }else{
            return json_encode([
                'status' => 'error',
                'message' => 'Parcel could not be uploaded'
            ]);
        }
    }

    // Get parcel details
    public function get_parcel(Request $check){
        // return $check;
        $getParcel = parcel::where('trackid',$check->trackid)->get();
        $now = date('U');
        if(count($getParcel) > 0){
           $result = [
               'count' => count($getParcel),
               'parceldetail' => $getParcel,
               'now' => $now
           ];
        }else{
            $result = [
                'count' => count($getParcel)
            ];
        }

        return json_encode($result);
    }

    // Get parcel Timeline details
    public function get_timeline(Request $checktimeline){
        // return $check;
        $getParcelTimeline = timeline::where('trackid',$checktimeline->trackid)->get();
        if(count($getParcelTimeline) > 0){
           $result = [
               'count' => count($getParcelTimeline),
               'parceldetail' => $getParcelTimeline
           ];
        }else{
            $result = [
                'count' => count($getParcelTimeline)
            ];
        }

        return json_encode($result);
    }

    public function fetch_all(Request $request)
    {
        $all_parcel = parcel::orderBy('created_at', 'DESC')->get();
        return json_encode($all_parcel);
    }

    public function generate_receipt(Request $request){
        if($request->trackid != ''){
            $receipt = parcel::where('trackid',$request->trackid)->orderBy('id','DESC')->take(1)->get();
        }else{
            $receipt = parcel::orderBy('id','DESC')->take(1)->get();
        }
        if(count($receipt) > 0){
            $result = [
                'count'=>count($receipt),
                'receiptdetail' => $receipt
            ];
        }else{
            $result = [
                'count'=>count($receipt)
            ];
        }
        return json_encode($result);
    }
    public function generate_receipt_timeline(Request $request){
        if($request->trackid != ''){
            $receipt = parcel::where('trackid',$request->trackid)->orderBy('id','DESC')->get();
        }else{
            $receipt = parcel::orderBy('id','DESC')->take(1)->get();
        }
        
        foreach($receipt as $value){
            $getTrackid = $value->trackid;
            $fetchTimeline = timeline::where('trackid',$getTrackid)->get();

            if(count($fetchTimeline) > 0){
                $result = [
                    'count'=>count($fetchTimeline),
                    'receiptdetail' => $fetchTimeline
                ];
            }else{
                $result = [
                    'count'=>count($recefetchTimelineipt)
                ];
            }
            return json_encode($result);
        }
    }

    public function update_parcel(Request $req){
        // return $id;
        $sname = $req->sname;
        $rname = $req->rname;
        $raddress = $req->raddress;
        $remail = $req->remail;
        $rphone = $req->rphone;
        $description = $req->description;
        $dimension = $req->dimension;
        $clocation = $req->clocation;
        $message = $req->message;
        $trackid = $req->trackid;
        // return $trackid;
        // ABSU200000685115

        // DB::update('update parcels set sname = ?, rname = ?, raddress = ?, remail = ?, rphone = ?, description = ?, dimension = ?, clocation = ?, message = ? where trackid = ?', [$sname, $rname, $raddress, $remail, $rphone, $description, $dimension, $clocation, $message, $trackid]);
        if(DB::update('update parcels set sname = ?, rname = ?, raddress = ?, remail = ?, rphone = ?, description = ?, dimension = ?, clocation = ?, message = ? where trackid = ?', [$sname, $rname, $raddress, $remail, $rphone, $description, $dimension, $clocation, $message, $trackid])){
            
            // TIMELINE CODE FUNCTION
            $retriveParcel = parcel::where('trackid',$req->trackid)->get();
            foreach($retriveParcel as $parcel){
                $getTrackid = $parcel->trackid;
                $getLocation = $parcel->clocation;
                $getRecAddress = $parcel->raddress;
                $setDate = date('U');
                $getDate = date('D, d M, Y.', $setDate);
                $getTime = date('h:i:s A', $setDate);
                $activity = 'Parcel Enroute to ' . $getRecAddress;

                $saveTimeline = new timeline;
                $saveTimeline->trackid = $getTrackid;
                $saveTimeline->location = $getLocation;
                $saveTimeline->date = $getDate;
                $saveTimeline->time = $getTime;
                $saveTimeline->activity = $activity;
                $saveTimeline->save();
            }
            return json_encode([
                'status' => 'success',
                'message' => 'Parcel has been updated successfully'
            ]);
        }else{
            return json_encode([
                'status' => 'error',
                'message' => 'No Update was made on parcel details!'
            ]);
        }

    }

    public function reset_parcel_shipping_status(Request $req){
        // return $req;
        $trackid = $req->trackid;
        // return $trackid;
        $stop = 'unactive';
        $continue = 'active';
        $checkStatus = parcel::where('trackid',$trackid)->get();
        foreach($checkStatus as $value){
            $getCurrentStatus = $value->status;
            if($getCurrentStatus == 'active'){
                if(DB::update('update parcels set status = ? where trackid = ?',[$stop, $trackid])){
                    // TIMELINE CODE FUNCTION
                    $retriveParcel = parcel::where('trackid',$req->trackid)->get();
                    foreach($retriveParcel as $parcel){
                        $getTrackid = $parcel->trackid;
                        $getLocation = $parcel->clocation;
                        $getRecAddress = $parcel->raddress;
                        $setDate = date('U');
                        $getDate = date('D, d M, Y.', $setDate);
                        $getTime = date('h:i:s A', $setDate);
                        $activity = 'Parcel was  stopped at ' . $getLocation . ' for checkup';

                        $saveTimeline = new timeline;
                        $saveTimeline->trackid = $getTrackid;
                        $saveTimeline->location = $getLocation;
                        $saveTimeline->date = $getDate;
                        $saveTimeline->time = $getTime;
                        $saveTimeline->activity = $activity;
                        $saveTimeline->save();
                    }
                    return json_encode([
                        'status' => 'success',
                        'message' => 'Parcel shipping has been STOPED'
                    ]);
                }else{
                    return json_encode([
                        'status' => 'error',
                        'message' => 'Parcel was unable to be stopped'
                    ]);
                }
            }elseif($getCurrentStatus == 'unactive'){
                if(DB::update('update parcels set status = ? where trackid = ?',[$continue, $trackid])){
                    // TIMELINE CODE FUNCTION
                    $retriveParcel = parcel::where('trackid',$req->trackid)->get();
                    foreach($retriveParcel as $parcel){
                        $getTrackid = $parcel->trackid;
                        $getLocation = $parcel->clocation;
                        $getRecAddress = $parcel->raddress;
                        $setDate = date('U');
                        $getDate = date('D, d M, Y.', $setDate);
                        $getTime = date('h:i:s A', $setDate);
                        $activity = 'Parcel was released and parcel enroute to ' . $getRecAddress;

                        $saveTimeline = new timeline;
                        $saveTimeline->trackid = $getTrackid;
                        $saveTimeline->location = $getLocation;
                        $saveTimeline->date = $getDate;
                        $saveTimeline->time = $getTime;
                        $saveTimeline->activity = $activity;
                        $saveTimeline->save();
                    }
                    return json_encode([
                        'status' => 'success',
                        'message' => 'Parcel shipping is now active and shipping has been CONTINUED'
                    ]);
                }else{
                    return json_encode([
                        'status' => 'error',
                        'message' => 'Parcel was unable to be continued'
                    ]);
                }
            }else{
                return json_encode([
                    'status' => 'error',
                    'message' => 'Request not reachable for the moment'
                ]);
            }
        }
    }

    public function delete_parcel(Request $deleteRequest){
        $trackid = $deleteRequest->trackid;
        if(DB::delete('delete from parcels where trackid = ?',[$trackid])){
            return json_encode([
                'status' => 'success',
                'message' => 'Parcel DELETED successfully'
            ]);
        }else{
            return json_encode([
                'status' => 'error',
                'message' => 'Parcel unable to be Deleted'
            ]);
        }
    }
    
    public function request_quote(Request $request)
    {
        $quote = new quotes;
        $quote->fullname = $request->fname;
        $quote->email = $request->email;
        $quote->origin = $request->origin;
        $quote->destination = $request->destination;
        $quote->type = $request->log_type;
        $quote->subject = $request->subject;
        $quote->message = $request->message;
        if($quote->save()){
            return json_encode([
                'status' => 'success',
                'message' => 'Your Quote request was recieved successfully! 
                    We will give you feedback via your email address accordingly.'
            ]);
        }else{
            return json_encode([
                'status' => 'error',
                'message' => 'An unexpected error occured'
            ]);
        }
    }

    public function view_requests(Request $request)
    {
        $all_request = quotes::orderBy('created_at', 'DESC')->get();
        return json_encode($all_request);
    }

    public function send_email(Request $request)
    {
        Mail::to($request->recipient)->send(new SupportEmail($request));
        return $request;
    }
}
