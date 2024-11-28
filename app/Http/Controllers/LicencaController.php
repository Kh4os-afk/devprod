<?php

namespace App\Http\Controllers;

use App\Http\Resources\LicencaResource;
use App\Models\Licenca;
use Illuminate\Http\Request;

class LicencaController extends Controller
{
    public function index(Licenca $uuid)
    {
        return new LicencaResource($uuid);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'empresa' => ['required'],
            'dtinicio' => ['required', 'date'],
            'dtfinal' => ['required', 'date'],
            'qtfilial' => ['required', 'integer'],
            'vlmensal' => ['required', 'numeric'],
        ]);

        return new LicencaResource(Licenca::create($data));
    }

    public function show(Licenca $licenca)
    {
        return new LicencaResource($licenca);
    }

    public function update(Request $request, Licenca $licenca)
    {
        $data = $request->validate([
            'empresa' => ['required'],
            'dtinicio' => ['required', 'date'],
            'dtfinal' => ['required', 'date'],
            'qtfilial' => ['required', 'integer'],
            'vlmensal' => ['required', 'numeric'],
        ]);

        $licenca->update($data);

        return new LicencaResource($licenca);
    }

    public function destroy(Licenca $licenca)
    {
        $licenca->delete();

        return response()->json();
    }
}
