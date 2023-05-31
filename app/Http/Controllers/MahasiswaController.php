<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\MahasiswaMataKuliahModel;
use App\Models\MahasiswaModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa', ['url_form' => url('/mahasiswa'), 'kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeOld(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required||in:L,P',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Ditambahkan!');
    }

    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MahasiswaModel $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khs = MahasiswaMataKuliahModel::where('mahasiswa_id', $id)->get();
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.show_mahasiswa', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MahasiswaModel $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = KelasModel::all();
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa', ['mhs' => $mahasiswa, 'url_form' => url('/mahasiswa/' . $id), 'kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\MahasiswaModel $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function updateOld(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'jk' => 'required||in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Diupdate!');
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs) ? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MahasiswaModel $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Dihapus!');
    }

    public function cetak_pdf($id)
    {
        $khs = MahasiswaMataKuliahModel::where('mahasiswa_id', $id)->get();
        $mahasiswa = MahasiswaModel::find($id);
        $pdf = PDF::loadview('mahasiswa.mahasiswa_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();
    }

    public function data()
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp');

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    public function getDetail($id)
    {
        $mahasiswa = MahasiswaModel::find($id);

        return response()->json($mahasiswa);
    }

    public function delete($id)
    {
        $status = MahasiswaModel::where('id', $id)->delete();
        $message = 'Data gagal dihapus';
        if ($status) $message = 'Data berhasil dihapus';
        return response()->json(['message' => $message]);
    }
}
