<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Siswa;
use Session;
use Excel;
use Validator;
use Auth;
use PDF;
class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $siswa = Siswa::select(['id','kode_map', 'nama_siswa', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir','created_at', 'updated_at']);
            return Datatables::of($siswa)
                ->addColumn('action', function($murid) {
                    return view('datatable._action', [
                        'show_url'  => route('siswa.show', $murid->id),
                    ]);
                })
                ->editColumn('tgl_lahir', function ($murid) {
                    return $murid->tgl_lahir->format('d-m-Y');
                })
                ->filterColumn('tgl_lahir', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(updated_at,'%d-%m-%Y') like ?", ["%$keyword%"]);
                })
                ->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'kode_map', 'name'=>'kode_map', 'title'=>'Kode Map'])
            ->addColumn(['data' => 'nama_siswa', 'name'=>'nama_siswa', 'title'=>'Nama Lengkap'])
            ->addColumn(['data' => 'jenis_kelamin', 'name'=>'jenis_kelamin', 'title'=>'Jenis Kelamin'])
            ->addColumn(['data' => 'tempat_lahir', 'name'=>'tempat_lahir', 'title'=>'Tempat Lahir'])
            ->addColumn(['data' => 'tgl_lahir', 'name'=>'tgl_lahir', 'title'=>'Tanggal Lahir'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Action', 'orderable'=>false, 'searchable'=>false]);

        $jml_dfulang = \DB::table('siswa')->count('nama_siswa');
        $jml_perempuan = \DB::table('siswa')->where('jenis_kelamin','=', 'Perempuan')->count();
        $jml_laki = \DB::table('siswa')->where('jenis_kelamin','=', 'Laki-laki')->count();

        return view('siswa.index', compact('html', 'jml_dfulang', 'jml_perempuan', 'jml_laki'));

    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_map' => 'required',
            'nama_siswa' => 'required'
        ]);
        $murid = Siswa::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menambah data siswa baru atas nama <b>$murid->nama_siswa</b>"
        ]);
        return view('siswa.show', compact('murid'));
    }

    public function show($id)
    {
    	$murid = Siswa::find($id);
        return view('siswa.show', compact('murid'));
    }

    public function pdf(Request $request, $id)
    {
        $murid = Siswa::findOrFail($id);
        return view('pdf', compact('murid'));
        // $pdf = PDF::loadview('pdf', ['murid' => $murid]);
        // $pdf->setPaper('Folio', 'potrait');
        // return $pdf->stream('[$murid=>nama_siswa].pdf', array('Attachment' => 0));
    }

    public function edit($id)
    {
        $murid = Siswa::find($id);
        return view('siswa.edit', compact('murid'));
    }

    public function update(Request $request, $id)
    {
        $murid = Siswa::find($id);
        $murid->update($request->all());

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil update data <b>$murid->nama_siswa</b>"
        ]);
        return redirect()->route('siswa.show', $murid->id);
    }

    public function exportExcel()
    {
        $siswa = Siswa::select(['kode_map', 'no_un_smp', 'nama_siswa', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir','no_hp', 'nama_ayah', 'nama_ibu', 'no_hp', 'sekolah_asal'])->get();

        Excel::create('Data Siswa', function($excel) use($siswa){
            $excel->setTitle('Data Siswa')
                ->setCreator(Auth::user()->name);

            $excel->sheet('Data Siswa', function($sheet) use($siswa) {
                $row = 1;
                $sheet->row($row, [
                    'Kode Map',
                    'No. UN SMP',
                    'Nama Lengkap',
                    'Jenis Kelamin',
                    'Tempat Lahir',
                    'Tanggal Lahir',           
                    'Nama Ayah',
                    'Nama Ibu',
                    'Nomor HP/Telepon',
                    'Sekolah Asal'
                ]);
                foreach ($siswa as $murid) {
                    $sheet->row(++$row, [
                        $murid->kode_map,
                        $murid->no_un_smp,
                        $murid->nama_siswa,
                        $murid->jenis_kelamin,
                        $murid->tempat_lahir,
                        $murid->tgl_lahir,           
                        $murid->nama_ayah,
                        $murid->nama_ibu,
                        $murid->no_hp,
                        $murid->sekolah_asal
                    ]);
                }
            });
        })->export('xls');
    }

    public function generateExcelTemplate()
    {
        Excel::create('Template Import Siswa', function($excel) {
            //Set the properties
            $excel->setTitle('Template Import Siswa')
                  ->setCreator('Admin')
                  ->setCompany('Admin')
                  ->setDescription('Template import data siswa');

            $excel->sheet('Data Siswa', function($sheet) {
                $row = 1;
                $sheet->row($row, [
                    'kode_map',
                    'no_un_smp',
                    'nama_siswa',
                    'jenis_kelamin',
                    'tempat_lahir',
                    'tgl_lahir',
                    'nama_ayah',
                    'nama_ibu',
                    'no_hp',
                    'sekolah_asal'
                ]);
            });
        })->export('xlsx');
    }

    public function cetakPdf($id = null) {

        $siswa = Siswa::select(['kode_map', 'no_un_smp', 'nama_siswa', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir','no_hp', 'nama_ayah', 'nama_ibu', 'no_hp', 'sekolah_asal'])->get();

        $pdf = PDF::loadview('pdf.siswa', compact('siswa'));
        return $pdf->stream();
    }

    public function importExcel(Request $request)
    {
        //validasi untuk memastikan file yang diupload adalah excel
        $this->validate($request, ['excel' => 'required|mimes:xls,xlsx' ]);
        //ambil file yang baru diupload
        $excel = $request->file('excel');
        //baca sheet pertama
        $excels = Excel::selectSheetsByIndex(0)->load($excel, function($reader) {

        })->get();

        $rowRules = [
            'kode_map'      => 'required',
            'nama_siswa'    => 'required',
        ];

        //Catat semuda id siswa baru
        //ID ini kita butuhkan untuk menghitung total buku yang berhasil diimport
        $siswa_id = [];

        //looping setiap baris, mulai dari baris ke 2 (karena baris ke 1 adalah nama kolom)
        foreach ($excels as $row) {
            //Mebuat validasi untuk row di excel
            //Disini kita ubah baris yand sedang di proses menjadi array
            $validator = Validator::make($row->toArray(), $rowRules);

            //Skip baris ini jika tidak valid, langsung ke baris selanjutnya
            if($validator->fails()) continue;

            //Syntax dibawah ini dieksekusi jika baris excel ini valid

            //Buat siswa baru
            $murid = Siswa::create([
                
                'kode_map'      => $row['kode_map'],
                'no_un_smp'     => $row['no_un_smp'],
                'nama_siswa'    => $row['nama_siswa'],
                'tempat_lahir'  => $row['tempat_lahir'],
                'tgl_lahir'     => $row['tgl_lahir'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'nama_ayah'     => $row['nama_ayah'],
                'nama_ibu'      => $row['nama_ibu'],
                'no_hp'         => $row['no_hp'],
                'sekolah_asal'  => $row['sekolah_asal']
            ]);

            //catat id dari buku yang baru dibuat
            array_push($siswa_id, $murid->id);
        }

        //ambil semua siswa yang baru dibuat
        $siswa = Siswa::whereIn('id', $siswa_id)->get();

        //redirect ke form jika tidak ada buku yang berhasil diimport
        if ($siswa->count() == 0) {
            Session::flash("flash_notification", [
                "level"     => "danger",
                "message"   => "Tidak ada siswa yang berhasil diimport."
            ]);
            return redirect()->back();
        }
        //set feedback
        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => "Berhasil mengimport " . $siswa->count() . " siswa."

        ]);

        //Tampilkan index buku
        return redirect()->route('siswa.index');
    }

    public function biodata()
    {
        return view('biodata.create');
    }
}
