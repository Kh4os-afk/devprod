<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use App\Mail\ContatoRespostaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email',
                'name' => 'required',
                'text' => 'required',
            ]);

            Mail::to('comercial@devprod.com.br')->send(new ContatoMail($validated['email'], $validated['name'], $validated['text']));

            Mail::to($validated['email'])->send(new ContatoRespostaMail($validated['name']));

            return redirect()->back()->with('success', 'Email enviado com sucesso!');
        } catch (\Exception $e) {
            Log::error('Erro ao enviar Email', [$e->getMessage(), $validated]);
        }
    }
}
