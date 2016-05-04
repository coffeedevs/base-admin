<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Supplier;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create([
                            'name' => $request->get('name'),
                            'address' => $request->get('address'),
                            'cbu' => $request->get('cbu'),
                        ]);
        return redirect()->route('admin.suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
       $supplier = Supplier::find($id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request $request
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
                    $supplier->name = $request->get('name');
                    $supplier->address = $request->get('address');
                    $supplier->cbu = $request->get('cbu');
                $supplier->save();
        return redirect()->route('admin.suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return back();
    }
}
