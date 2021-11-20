<?php

namespace App\Http\Controllers;

use App\Mail\AgentAdd;
use App\Models\Builder;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function thankyou() {
        return view('home.thankyou');
    }

    public function store(Request $request) {
        //dd($request->all());
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email_address'=>'required|email|unique:users,email',
            'cell'=>'required',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => ['min:8'],
            'brokerage_name'=>'required',
            'title'=>'required',
            'license'=>'required|numeric',
            'license_renewal_date'=>'required',
            'is_interested'=>'',
            'message'=>'',
        ]);

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->get('recaptcha'),
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        //dd($resultJson);

        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.5) {

            //dd($request->all());

            $agent_code = $request->text_1 . $request->text_2 . $request->text_3 . $request->text_4 . $request->text_5 . $request->text_6 . $request->text_7;

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email_address;
            $user->phone = $request->cell;
            $user->user_password = md5($request->password);
            $user->pass_word = $request->password;
            $user->user_type = 'agent';
            $user->status = '0';
            $user->imagefileurl = '';
            $user->image = '';
            $user->created = time();
            $user->updated = time();
            $user->save();


            $agent = new Builder();
            $agent->user_id = $user->id;


            $agent->firstname = $request->first_name;
            $agent->lastname = $request->last_name;
            $agent->email = $request->email_address;
            $agent->cell = $request->cell;
            $agent->is_interested = $request->is_interested ? 1 : 0;
            $agent->office_name = $request->brokerage_name;
            $agent->title = $request->title;
            $agent->agent_code = $agent_code;
            $agent->license = $request->license;
            $agent->market = '["Dallas-Fort Worth, TX Area"]';
            $agent->license_renewal_date = date('Y-m-d', strtotime($request->license_renewal_date));
            $agent->message = $request->message;
            $agent->status = '0';
            $agent->created = time();
            $agent->updated = time();
            $agent->save();

            Mail::to($request->email_address)
                ->send(new AgentAdd($request->first_name));
        }

        return redirect('/thank-you');

    }

    public function checkAgentCodeAvailibility(Request $request) {
        $agent_code = $request->texth_1.$request->texth_2.$request->texth_3.$request->texth_4.$request->texth_5.$request->texth_6.$request->texth_7;
        $builder_info = Builder::where('agent_code',$agent_code)->select('id')->first();
        //dd($builder_info);
        if(!empty($builder_info)) {
            echo 'exists';
        }
        else {
            echo 'not exists';
        }
    }

    public function realtor_terms() {
        $settings_info = Setting::where('id',1)->first();
        //dd($settings_info);
        //return view('home.realtor_terms');
        return view('home.realtor_terms', [
            'settings_info' => $settings_info
        ]);
    }

    public function realtor_privacy_policy() {

        $settings_info = Setting::where('id',1)->first();
        //dd($settings_info);
        //return view('home.realtor_terms');
        return view('home.realtor_privacy_policy', [
            'settings_info' => $settings_info
        ]);
    }
}
