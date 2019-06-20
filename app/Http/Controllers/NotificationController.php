<?php

namespace App\Http\Controllers;
use App\notification;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class NotificationController extends Controller
{
    public function create(Request $request)
    {
    notification::create([ 'notification_category' => $request['NotificationCategory'],
        'notification'=>$request['noti'],
        'date'=>$request['date'],
     
     'chittyid' =>0,
    
     ]);
     return view('/dashboard');
    }
    public function createe(Request $request)
    {
    notification::create([ 'notification_category' => $request['NotificationCategory'],
        'notification'=>$request['noti'],
        'date'=>$request['date'],
     
     'chittyid' =>$request['chitty_id'],
    
     ]);
     return view('/dashboard');
    }

    public function notificationall(Request $request)
    {  
        $st=DB::select("SELECT * FROM tbl_notification where notification_category='Chitty Members'");  
        return view('user.reguser_notification')->with(['st' => $st]);
    }

public function notificationala()
{
 $st=DB::select("select * from tbl_notification where notification_category='House Members'");
 return view('emp.emp_notification',compact('st'));
}
public function notificationchitty()
{
 $st=DB::select("select * from tbl_notification where notification_category='Chitty Members'");
 return view('emp.emp_notification',compact('st'));
}
public function notificationany()
{
 $st=DB::select("select * from tbl_notification where notification_category!='Employee'");
 return view('emp.emp_notification',compact('st'));
}
public function mynotificationchitty()
{   $id = Auth::user()->id;
  $sv=DB::select("select chitty_id  from  tbl_chitty_join  where id= $id ");
foreach($sv as $a)
{
     
 $st=DB::select("select * from tbl_notification where chittyid='$a->chitty_id'");

}

return view('emp.emp_notification',compact('st'));
}

}

