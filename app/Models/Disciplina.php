<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use ShieldForce\AutoValidation\Traits\TraitStartInterception;
use Illuminate\Http\Request;

class Disciplina extends Authenticatable
{
    use HasFactory, Notifiable;
    use TraitStartInterception;

    public static function rulesCustom(Request $request)
{
    return
        [
            "request"    => $request,
            "creating"   =>
                [
                    "validations" =>
                        [
                            "first_name"                => ["required", "string", "max:50"],
                            "last_name"                 => ["required", "string", "max:50"],
                            "email"                     => ["required", "string", "email", "max:100", "unique:users"],
                            "password"                  => ["required", "string", "min:4", "confirmed"],
                            "password_confirmation"     => ["required", "string", "min:4"],
                        ],
                    "messages" =>
                        [
                            "first_name.required" => "Primeiro nome é obritatório",
                            "last_name.required"  => ":attribute nome é obritatório",
                            "password_confirmation.required"  => "Confirmação de senha é obritatório",
                        ]
                ],
            "updating"   =>
                [
                    "validations" =>
                        [
                            "id"                        => ["required"],
                        ],
                    "messages" =>
                        [
                            "id.required" => "Campo ID é obritatório",
                        ]
                ],
            "retrieved:login"   =>
                [
                    "validations" =>
                        [
                            "email"         => ["required", "string", "email", "max:100"],
                            "password"      => ["required", "string"],
                        ],
                    "messages" =>
                        [
                            //
                        ]
                ],
        ];
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'password_confirmation',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
     //   'password',//
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
