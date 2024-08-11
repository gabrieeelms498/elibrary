<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function showInsertForm(){
        return view('admin.insert'); 
    }
    public function insert(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'jumlah' => 'required|integer',
            'filebuku' => 'required|mimes:pdf|max:2048',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $book = new Book();
        $book->judul = $request->input('judul');
        $book->deskripsi = $request->input('deskripsi');
        $book->kategori = $request->input('kategori');
        $book->jumlah = $request->input('jumlah');
        $book->user = Auth::id();
        if ($request->hasFile('filebuku')) {
            $filebukuPath = $request->file('filebuku')->store('books/files', 'public');
            $book->filebuku = $filebukuPath;
        }
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('books/images', 'public');
            $book->gambar = $gambarPath;
        }

        $book->save();

        return redirect()->route('admin.books')->with('success', 'Book successfully added!');
    }
    public function showBooks(Request $request)
{
    $query = Book::query();

    if ($request->has('kategori') && !empty($request->kategori)) {
        $query->where('kategori', $request->kategori);
    }

    $books = $query->paginate(10); 

    return view('admin.book', compact('books'));
}

public function showEditForm($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'jumlah' => 'required|integer',
            'filebuku' => 'nullable|file|mimes:pdf',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $book = Book::findOrFail($id);
        $book->judul = $request->judul;
        $book->deskripsi = $request->deskripsi;
        $book->kategori = $request->kategori;
        $book->jumlah = $request->jumlah;

        if ($request->hasFile('filebuku')) {
            $filePath = $request->file('filebuku')->store('books/files', 'public');
            $book->filebuku = $filePath;
        }

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('books/images', 'public');
            $book->gambar = $imagePath;
        }

        $book->save();

        return redirect()->route('admin.books')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('admin.books')->with('success', 'Book deleted successfully');
    }

}
