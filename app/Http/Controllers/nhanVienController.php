<?php

namespace App\Http\Controllers;

use App\Http\Requests\nhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;
use App\Models\nhanVien;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;


class nhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanVien = nhanVien::paginate(3);
        return view('nhanVien.index',compact('nhanVien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhanVien.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NhanVienRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
        ];
    
        $nhanVien = NhanVien::create($data);
    
        if ($nhanVien) {
            return redirect()->back()->with('success', 'Thêm thành công.');
        } else {
            return redirect()->back()->with('error', 'Thêm không thành công. Vui lòng kiểm tra dữ liệu nhập vào.');
        }
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
        $nhanVien = nhanVien::findOrFail($id);
        return view('nhanVien.edit',compact('nhanVien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNhanVienRequest $request, string $id)
    {
        $nhanVien = nhanVien::findOrFail($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
        ];
        $nhanVien->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $searchInput = $request->input('search');
        $nhanVien = nhanVien::where('name', 'like', '%'.$searchInput.'%')
            ->paginate(3);

        return view('nhanVien.index', compact('nhanVien'));
    }
}
