<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\User;
use Illuminate\Support\Facades\Hash;

class SignupForm extends Component
{
  public $name;
  public $email;
  public $email_verified_at;
  public $password;
  public $password_confirmation;
  public $type;
  public $remember_token;
  public $created_at;
  public $updated_at;

    public function render()
    {
        return view('livewire.signup-form');
    }

    public function submit()
    {

      $data = $this->validate([
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6',
        // 'password_confirmation' => 'required|same:password',
        'type' => 'required',
      ]);

      logger([$data]);


     $user = User::create([
       'name' => $this->name,
       'email' => $this->email,
       'password' => Hash::make($this->password),
       'type' => $this->type,
       'created_at' => now(),
       'updated_at' => now(),
     ]);

     logger([$data]);

     return redirect()->to('login');

     /* if ($user->type == 'expert')
     {
      logger([$data]);
      return redirect()->to('ingresar');
     }
     //     session()->flash('message', '¡Se ha creado tu cuenta!.');
     */
  }
}
