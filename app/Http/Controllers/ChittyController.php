<?php
use Illuminate\Http\Concerns\InteractsWithContentTypes;
use Illuminate\Http\Concerns\InteractsWithFlashData;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Support\Traits\Macroable;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Chittydetails;
use App\Chittyjoin;
use DB;
use Dotenv\Regex\Result;
use Illuminate\Support\Facades\Redirect;
use App\ChittyResult;
use App\Banks;

class ChittyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {}
       


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $a= $request['amount']/$request['payment'];
       
        Chittydetails::create(['chitty_name' => $request['name'],
        'chitty_det_amount' => $request['amount'],
        'chitty_det_pay_no' => $request['payment'],
         'chitty_oneterm_payment'=>$a,
        'chitty_details' => $request['details'],
        'chitty_det_sdate' => $request['date'],
        'chitty_det_edate' => $request['expdate'],
       
    ]);
    return redirect('/dashboard');   
    }
    

    public function join(Request $request)
    {
       
    Chittyjoin::create([
        'chitty_id' => $request['chitty_id'],
        'id' => $request['id'],
        'chitty_join_date' => $request['date'],
        'chitty_months' => 0,
        'chitty_join_accno' => $request['cardno'],
        'chitty_join_ifsc' => $request['ifsc'],
        'chitty_join_branch' => $request['branch'],
        'chitty_join_bank' => $request['bank'],
        'chitty_paid_status' => $request['payment_status'],
        'chitty_result_status' => $request['result_status'],
       
    ]);
   $vb=$request['cardno'];
$v=DB::select("select * from tbl_bank where bank_accno='$vb'");
if(count($v)=='1')
{
    $vf=DB::select("update tbl_bank set balance=balance+50000 where bank_accno='$vb'");
}
else
{
    Banks :: create([
        'id'=>$request->id,
        
        'bank_accno' => $request['cardno'],
         'ifsc' =>  $request['ifsc'],
         'bank' => $request['bank'],
          'balance' =>'100000',
   
    
    ]);	
    
}
    return view('user.reguser_chitty_joinsucces');

    }
    public function chittypayment(Request $request)
    {    
        $id=$request->input('id');
        $chitty_id = $request->input('cid');
        $amo=$request->input('amount');
        //echo $id;
        $ids = Chittyjoin::where('id', $id)->where('chitty_id', $chitty_id)->first();
        
            $c = $ids -> chitty_months + 1;
             if($ids->chitty_paid_status == '0')
             
                {
                   
                 Chittyjoin::where('id', $id)->where('chitty_id', $chitty_id)
                 ->update(['chitty_paid_status' => 1,
                           'chitty_months' => $c]);
              
                 
                }
                DB::update("update  tbl_bank set  balance=balance-'$amo' where  id='$id'");
                DB::update("update  tbl_bank set  balance=balance+'$amo' where  id='14'");



                return view('user.reguser_chitty_paymentsucces');
          
      }
    
            public function lot(Request $request)
            {
                $chittyid=$request->get('id');
                $ids=DB::select("SELECT chitty_det_pay_no,chitty_id FROM tbl_chitty_details where chitty_id='$chittyid' ");
                foreach($ids as $a)
                {
                 $p=$a->chitty_det_pay_no;
   
                }
             
               
               // $id=$request->input('id');
               $i=DB::select("SELECT id FROM tbl_chitty_join where chitty_paid_status='1' and chitty_id='$chittyid'");
            $ids=DB::select("SELECT id FROM tbl_chitty_join where chitty_paid_status='1' and chitty_result_status='0'");
          
            if(count($i)==$p)
             {

             
                //$co=count($ids);
                $lot = [];
                   // return $object->id;
                foreach($ids as $object)
                {   
                    array_push($lot, $object->id);
                }
if($ids){
                 $collection = collect($lot);
                

                $shuffled = $collection->shuffle();
                $x=$shuffled->all();
$r= $x[0];
DB::update("update  tbl_chitty_join set  chitty_result_status='1' where chitty_id='$chittyid' and id='$r'");
DB::update("update  tbl_chitty_join set  chitty_paid_status='0' where chitty_id='$chittyid'");

$a = ChittyResult::where('chitty_id', $chittyid)->get();


if($a->first()){
    foreach($a as $n){
        $count = $n -> lot_count;
    
    }
    $new_lot_count = $count + 1;
    ChittyResult::create([
        
        'id' => $r,
        'chitty_id'=>$chittyid,
        'lot_count' => $new_lot_count,
        'c_result_recieve_status' => '0',
     
       
    ]);
    
}
else{
    ChittyResult::create([
        'id' => $r,
        'chitty_id'=>$chittyid,
        'lot_count' => '1',
        'c_result_recieve_status' => '0',
    ]);
    
}
    
}
             }
             else{

            
                 return view('admin.admin_chittynoti',compact('chittyid')); 

             }
return redirect('/dashboard');   
               // return $shuffled->all();

                
// echo  $collection;          
// echo  $$shuffled;  

             
//           /*  
//             $users_count = DB::table('tbl_chitty_join')
//      ->where('chitty_paid_status=', '=','1')
//      ->where('chitty_result_status=', '=','0')
//      ->count();
//      echo $users_count;*/
                
//                     {
//                                            //  while($row = mysqli_fetch_assoc($ids))
//                                          //    {
//                                                  // $user_id[] = $row;
//                                           //   }
//                                              //print_r($user_id);
//                                             // foreach ( $id as $tbl_chitty_join)
//                                              {
//                                                  //echo $tbl_chitty_join['chitty_jid'];
//                                                 //$n=$tbl_chitty_join[''];
//                                             }
//                                             //  shuffle($id); 
                                            
//                  }
                 

//          }    
//              }
//             
}

public function chittymaxmember(Request $c)
{  $st=DB::select("SELECT chitty_id,chitty_det_pay_no FROM tbl_chitty_details");
    

    return view('user.reguser_chitty_portal');
}
 

public function chittyjo(Request $c)
{


 $chittyid=$c->get('id');
 
        
 $st=DB::select("SELECT * FROM tbl_chitty_details where  tbl_chitty_details.chitty_id='$chittyid'");     
       return view('user.reguser_chitty_add')->with(['st' => $st]);  
}

       
 public function chittydetid(Request $c)
    { 
        $uid=$c->input('uid');
        $chittyid=$c->get('chitty_id');
        
        $x= DB::table('tbl_chitty_join')->where('chitty_id',$chittyid)->where('id',$uid)->get('id');
        
         if(count($x)!=0)
         {
               return view('user.reguser_chittyregistered') ;
           } 
        else
        {
        $st=DB::select("SELECT * FROM tbl_chitty_details where  tbl_chitty_details.chitty_id='$chittyid'");     
         return view('user.reguser_chitty_join')->with(['st' => $st]) ->with(['c'=>$chittyid]);    }
    }




    public function chittyid(Request $c)
        { 
            $chittyid=$c->get('id');
          
            $st=DB::select("SELECT * FROM tbl_chitty_details where  tbl_chitty_details.chitty_id='$chittyid'");     
            return view('user.reguser_chitty_payment')->with(['st' => $st]) ->with(['c'=>$chittyid]);    }
  
    public function chittyadminlist(Request $c)
            { 
                $chittyid=$c->get('id');
            
               
                $st=DB::select("SELECT * FROM tbl_chitty_details where  tbl_chitty_details.chitty_id='$chittyid'");     
                return view('admin.admin_chitty_listuser')->with(['st' => $st]) ->with(['c'=>$chittyid]);    }
            
        public function getid(Request $c)
        { 
            $chittyid=$c->get('id');
            $cid=$c->get('cid');
          
            $st=DB::select("SELECT * FROM tbl_chitty_join where  tbl_chitty_join.id='$chittyid'");     
            return view('admin.admin_chitty_cash_transfer')->with(['st' => $st]) ->with(['c'=>$chittyid])->with(['b'=>$cid]);    }


            public function chittyapaid(Request $c)
            { 

        
        $amo=$c->get('amount');
    
        $percent =  ($amo/100) *10 ;
      
        $p=$amo-$percent;
        $l=$percent;
                $chittyid=$c->get('id');
                
                DB::update("update  tbl_chitty_result set  c_result_recieve_status='1' where id='$chittyid' ");

                DB::update("update  tbl_bank set  balance=balance+'$p' where  id='$chittyid'");
                DB::update("update  tbl_bank set  balance=balance+'$percent' where  id='14'");


                return view('user.reguser_chitty_paymentsucces');
                
            }
            
            public function chittystatus(Request $c)
{ 
       
    $chittyid=$c->get('id');
 
    $st=DB::select("SELECT * FROM tbl_chitty_details where  tbl_chitty_details.chitty_id='$chittyid'");     
          
  return view('user.reguser_chitty_statusview')->with(['c'=>$chittyid]);}
        }

        
     

       
    