<?php
namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataProducts'] = Products::all();
        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'        => 'required|string|min:3',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Simpan data ke database
        $data['name']        = $request->name;
        $data['price']       = $request->price;
        $data['description'] = $request->description;

        Products::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataProducts'] = Products::findOrFail($id);
        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name'        => 'required|min:3',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        $id       = $id;
        $products = Products::findOrFail($id);

        $products->name        = $request->name;
        $products->price       = $request->price;
        $products->description = $request->description;

        $products->save();

        return redirect()->route('products.index')->with('success', 'Perubahan Data Produk Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::findOrFail($id);

        $products->delete();
        return redirect()->route('products.index')->with('success', 'produk berhasil dihapus');
    }
}
