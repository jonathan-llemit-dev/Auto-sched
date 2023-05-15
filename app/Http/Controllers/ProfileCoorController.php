<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use ProtoneMedia\Splade\Facades\Toast;

class ProfileCoorController extends Controller
{
    public function edit(Request $request)
    {
        return view('auth.edit',[
            'user' => $request->user(),
        ]);

    }

    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        
        Toast::success('Your Profile Update Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return redirect('profileCoor');
    }
}
