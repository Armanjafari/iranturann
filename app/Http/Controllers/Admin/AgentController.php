<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\City;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\MeliPayamak\MeliPayamak;
class AgentController extends Controller
{
    public function showForm()
    {
        // $t = resolve(MeliPayamak::class);
        // $t->send();
        $agents = Agent::all();
        $cities = City::all();
        $cities->load('province');
        $agents->load('user','images');
        return view('Admin.agent.agent' , compact('agents' , 'cities'));
    }
    public function createAgent(Request $request)
    {
        // TODO validation 
        $user = User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => bcrypt($request->input('password')),

        ]);
        $agent = $user->agent()->create([
            'work_address' => $request->input('address2'),
            'work_phone' => $request->input('phone_number2'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')
        ]);
        $this->addImage($request , $agent);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function showEditForm(Agent $agent)
    {
        $agents = Agent::all();
        $cities = City::all();
        $cities->load('province');
        $agent->load('user', 'images');
        $agents->load('user','images');
        return view('Admin.agent.edit' , compact('agents','agent' , 'cities'));
    }
    public function edit(Agent $agent,Request $request)
    {
        $agent->load('user','images');
        $agent->update([
            'work_address' => $request->input('address2'),
            'work_phone' => $request->input('phone_number2'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')

        ]);
        $agent->user()->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'address' => $request->input('address')
        ]);
        if ($request->has('image'))
        {
            foreach ($agent->images as $image) 
            {
                $image->delete();
            }
            $this->addImage($request , $agent);

        }
        return redirect()->route('show.agent.form')->withSuccess(' با موفقیت انجام شد ');
    }
     // TODO delete function for all images in all controllers 
    public function addImage(Request $request , Agent $agent)
    {
        $file = $request->file('image');
        $file2 = $request->file('image2');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $file2->move(public_path($destination) , $file2->getClientOriginalName());
        $agent->images()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);$agent->images()->create([
            'address' => $destination . $file2->getClientOriginalName()
        ]);
    }
}
