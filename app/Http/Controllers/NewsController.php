<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('actor.admin.AdminNews');
    }
    public function store(Request $request)
    {
        $rules = [
            'topik' => 'required|string',
            'isiBerita' => 'string',
            'foto' => 'file|image|mimetypes:image/jpeg,image/jpg,image/png|max:2048',
        ];
        $massages = [
            'max' => ':attribute harus diisi maksimal :max karakter.',
            'foto.max' => 'ukuran gambar maksimal 2MB',
            'string' => ':attribute harus berupa teks.',
            'required' => ':attribute wajib diisi.',
        ];
        //Validasi
        $validator = Validator::make($request->all(), $rules, $massages);

        //Jika gagal
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput(); // jika ini di eksekusi maka dibawah tidak akan di eksekusi
        }

        $validatedData = $validator->validated();

        //Menampung data request setelah validasi
        $data = [
            'topik' => $validatedData['topik'],
            'isi_berita' => $validatedData['isiBerita'],
        ];
        //Simpan gambar ke file storage/app/public
        if ($request->hasFile('foto')) {
            $oriPath = $request->file('foto')->store('news-images'); // -> service-images/<nama_files.ext>
            $fileName = basename($oriPath);
            $data['file_foto'] = $fileName;
        }
        //Simpan layanan
        $data['admin_id'] = auth()->user()->id;
        News::create($data);

        return redirect()
            ->route('admin.adminnews')
            ->with('success', 'data berhasil disimpan');
    }
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if ($news->file_foto) {
            Storage::delete(['news-images/' . $news->file_foto]);
        }
        $news->delete();
        return redirect()
            ->route('admin.adminnews')
            ->with('success', 'Data Berhasil DiHapus!');
    }
}
