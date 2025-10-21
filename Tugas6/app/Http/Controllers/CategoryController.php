<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $categories = KategoriBuku::all();
    return view('pages.category.index', compact('categories'));
}

public function create()
{
    return view('pages.category.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama_kategori' => 'required|string|max:255',
    ]);

    KategoriBuku::create([
        'nama_kategori' => $request->nama_kategori,
    ]);

    return redirect()->route('categories.index')
        ->with('success', 'Category created successfully');
}

public function show(string $id)
{
    $category = KategoriBuku::findOrFail($id);
    return view('pages.category.show', compact('category'));
}

public function edit($id)
{
    $category = KategoriBuku::findOrFail($id);
    return view('pages.category.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_kategori' => 'required|string|max:255',
    ]);

    $category = KategoriBuku::findOrFail($id);
    $category->nama_kategori = $request->nama_kategori;
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category updated successfully');
}

public function destroy($id)
{
    $category = KategoriBuku::findOrFail($id);
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
}
}
