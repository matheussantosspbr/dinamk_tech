<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clientModel;
    public function __construct(ClientModel $clientModel)
    {
        $this->clientModel = $clientModel;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('client_create');
    }

    public function clientCreate(Request $request)
    {   
        try {
            $res = $this->clientModel->create_client($request);
            return response()->json(['message' => $res], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao criar o cliente', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function login()
    {
        return view('login_client');
    }
    
}
