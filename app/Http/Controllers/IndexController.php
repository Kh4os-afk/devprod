<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use App\Mail\ContatoRespostaMail;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'text' => 'required',
            'g-recaptcha-response' => [new ReCaptcha()]
        ]);

        if ($validator->fails()) {
            return redirect('http://devprod.local/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        try {
            Mail::to('comercial@devprod.com.br')->send(new ContatoMail($validated['email'], $validated['name'], $validated['text']));

            Mail::to($validated['email'])->send(new ContatoRespostaMail($validated['name']));

            return redirect('http://devprod.local/#contact')->with('success', 'Email enviado com sucesso!');
        } catch (\Exception $e) {
            Log::error('Erro ao enviar Email', [$e->getMessage(), $validated]);

            return redirect('http://devprod.local/#contact')->with('error', 'Erro ao enviar o email. Tente novamente.')->withInput();
        }
    }
}
