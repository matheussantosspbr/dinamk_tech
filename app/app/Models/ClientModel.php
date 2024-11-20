<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class ClientModel extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'client';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
    ];

    public function create_client($request){
        $validation = DB::select("SELECT * FROM client WHERE email = '$request->email'");
        
        if($validation == []){
            $phone = preg_replace('/\D/', '', $request->phone);

            $client = ClientModel::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => intval($phone),
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('client123'),
            ]);

            // Insere o relacionamento na tabela model_has_roles
            DB::table('model_has_roles')->insert([
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => $client->id, // Pega o ID do usuário recém-criado
            ]);

            return "Cliente criado com sucesso!";
        }else{
            return "Email já cadastrado!";
        }
        
    }
}
