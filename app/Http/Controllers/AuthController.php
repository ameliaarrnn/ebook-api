<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119018,
        'name' => 'Amelia Rachma Nurhidayat',
        'gender' => 'Female',
        'phone' => '085712999140',
        'class' => 'XII RPL 1'];
  }
}