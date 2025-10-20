<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        // Data buku dalam array
        $books = [
            [
                'id' => 1,
                'title' => 'Pemrograman Berbasis Web',
                'author' => 'Ilham Fajri',
                'year' => 2025,
                'category' => 'Novel',
                'stock' => 10
            ],
            [
                'id' => 2,
                'title' => 'Pemrograman SQL',
                'author' => 'Ilham Fajri',
                'year' => 2025,
                'category' => 'Novel',
                'stock' => 10
            ],
            [
                'id' => 3,
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Ilham Fajri',
                'year' => 2025,
                'category' => 'Novel',
                'stock' => 10
            ],
            [
                'id' => 4,
                'title' => 'Sistem Operasi',
                'author' => 'Ilham Fajri',
                'year' => 2025,
                'category' => 'Novel',
                'stock' => 10
            ],
            [
                'id' => 5,
                'title' => 'Teori Graf',
                'author' => 'Ilham Fajri',
                'year' => 2025,
                'category' => 'Novel',
                'stock' => 10
            ],
        ];

        return view('pengelolaan', compact('books'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}
