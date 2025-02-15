<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
  public function showLoginForm()
  {
    return view('admin.login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'nombre' => 'required|string',
      'contraseña' => 'required|string',
    ]);

    $admin = Admin::where('nombre', $request->nombre)->first();

    if ($admin && Hash::check($request->contraseña, $admin->contraseña)) {
      if ($admin->verificado) {
        Cookie::queue('admin_id', $admin->id, 60);
        return redirect()->route('admin.dashboard');
      } else {
        return back()->withErrors(['message' => 'El administrador no está verificado.']);
      }
    } else {
      return back()->withErrors(['message' => 'Credenciales inválidas.']);
    }
  }

  public function adminDashboard()
  {
    if (Cookie::get('admin_id')) {
      $adminId = Cookie::get('admin_id');
      $admin = Admin::find($adminId);
      if ($admin && $admin->verificado) {
        return view('admin.admin');
      }
    }
    return redirect()->route('login');
  }

  public function logout(Request $request)
  {
    Cookie::queue(Cookie::forget('admin_id'));
    return redirect('/');
  }
}
