<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use PDF;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftaran = Siswa::where('user_id', auth()->user()->id)->get();
//        dd($pendaftaran);
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas', 'pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $image_name = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('photos'), $image_name);
        $data['photo'] = $image_name;
        Siswa::create($data);
        return redirect()->route('siswa.index')->with('success', 'behasil menyimpan data siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Siswa $siswa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Siswa $siswa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Siswa $siswa
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Berhasil mengedit data');
    }

    public function terima(Request $request, $siswa)
    {
        $data = Siswa::find($siswa);
        $data->update(['status' => 'Diterima']);
        return redirect()->route('siswa.index')->with('success', 'Berhasil menolak calon siswa');
    }

    public function tolak(Request $request, $siswa)
    {
        $data = Siswa::find($siswa);
        $data->update(['status' => 'Ditolak']);
        return redirect()->route('siswa.index')->with('success', 'Berhasil menolak calon siswa');
    }

    public function cetak()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
//        dd($siswa);
//        return view('siswa.cetak', compact('siswa'));
        $pdf = PDF::loadview('siswa.cetak', compact('siswa'));
        return $pdf->download();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Siswa $siswa
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Siswa $siswa)
    {
        //
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Berhasil menghapus data');
    }
}
