<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view(RouteServiceProvider::HOME);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            // validation for zipcode to check for 5 or 9 numbered digits 
            'zip' => ['required', 'string', function($attribute, $value, $fail){
                    $zipcode = intval($value);
                    $accepted_input_size = [5,9];
                    if(!is_int($zipcode)){
                        $fail('Please enter a valid zipcode.');
                    }
                    if(!in_array(mb_strlen($value), $accepted_input_size)){
                        $fail('Please enter a zipcode that is 5 or 9 digits.');
                    }
                }
            ],
            // allow only US country to be selected
            'country' => ['required', 'string', function ($attribute, $value, $fail) {
                if ($value !== 'US') {
                    $fail('Please enter the '.$attribute.' as USA');
                }
            }]
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country
        ]);
        
        // Display success message!
        $message = $request->session()->flash('status', 'User registered successfully!');

        return redirect(RouteServiceProvider::ADMINREPORT)->with($message);
    }
}
