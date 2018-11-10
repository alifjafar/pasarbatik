<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRegister;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PartnerRegisterController extends Controller
{
    public function create()
    {
        if(Auth::user()->isPartner()){
            return redirect()->route('homepage');
        }
        return view('pasarbatik.partner.daftar');
    }

    public function partnerRegister(PartnerRegister $request)
    {
        $validated = $request->validated();
        $fileName = $validated['name'] . '-' . uniqid() . '.' . $validated['id_card']->getClientOriginalExtension();
        $validated['status'] = "Active";

        Storage::disk('public')->putFileAs('idcard', $validated['id_card'], $fileName, 'public');
        $validated['id_card'] = $fileName;

        Partner::create($validated);

        Session::flash('success', 'Pendaftaran Berhasil ! , Tim kami akan segera memverifikasi permintaanmu');
        return redirect()->back();

    }
}
