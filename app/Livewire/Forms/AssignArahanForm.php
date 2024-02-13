<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\PivotArahanProgress As Pivot;
use App\Models\MasterArahan As Arahan;
use Ixudra\Curl\Facades\Curl;
// use App\Models\UserProfile as Profile;

class AssignArahanForm extends Form
{
    public ?Pivot $pivot;

    public $arahan_id = '';
    public $progress_id = '';
    public $findIdArahan = '';
    public $user_profile_id = '';
    public $data = '';


    public function rules()
    {
        return [
            'arahan_id' => [
                'required',
            ],
            'progress_id' => [
                'required',
            ]
        ];
    }

    public function setPost(Pivot $pivot)
    {
        // $this->user_id = auth()->user()->id;
        $this->arahan_id = $pivot->arahan_id;
        $this->progress_id = $pivot->progress_id;
    }

    public function sendWhatapps(Array $data)
    {
        $response = Curl::to('https://api.fonnte.com/send')
        ->withData(array(
             'target' => $data['nomor_hp'],
             'message' => 'Hallo, '.$data['nama'].', terdapat arahan direksi RUMAH SAKIT UMUM PINDAD ditujukan kepada anda, mohon segera cek terimakasih', 
             'countryCode' => '62', 
             'delay' => 10, ))
        ->withHeader('Authorization: 2qB#yoP6MKX2Z3_pDZfj')
        ->returnResponseObject()
        ->post();

        // dd($response);

        if($response->status == true)
        {
            $message = 'notifikasi whatsapp sudah dikirim ke '.$data['nama'];
            return $message;
        }else{
            $message = 'notifikasi whatsapp gagal dikirim ke '.$data['nama'];
            return $message;
        }

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => 'https://api.fonnte.com/send',
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => '',
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => 'POST',
        // CURLOPT_POSTFIELDS => array(
        // 'target' => $data['phone'],
        // 'message' => 
        // "Hallo ".$data['nama'].
        // ", Terima kasih atas partisipasi anda mengisi survey pelayanan pasien di RUMAH SAKIT UMUM PINDAD.Penilaian anda sangat berharga untuk peningkatan pelayanan kami", 
        // 'countryCode' => '62', //optional
        // 'delay' => 10,
        // ),
        // CURLOPT_HTTPHEADER => array(
        //     'Authorization: 2qB#yoP6MKX2Z3_pDZfj' //change TOKEN to your actual token
        // ),
        // ));

        // $response = curl_exec($curl);
        // if (curl_errno($curl)) {
        // $error_msg = curl_error($curl);
        // }
        // curl_close($curl);

        // if (isset($error_msg)) {
        // echo $error_msg;
        // }
        // echo $response;
    }

    public function store()
    {
        try {
            $this->validate();
            // dd($this->validate());
            Arahan::where('id', $this->arahan_id)->update(['assign_status' => true]);
            $arahan = Arahan::where('id', $this->arahan_id)->first();
            $data = [];
            $data = [
                'nomor_hp' => $arahan->user_profile->nomor_handphone_profile,
                'nama' => $arahan->user_profile->nama_profile,
            ];
            $sendWa = $this->sendWhatapps($data);

            Pivot::updateOrCreate(
                $this->only([
                    'arahan_id',
                    'progress_id',
                ])
            );
            $this->reset();
            session()->flash('success', 'assign berhasil '.$sendWa);
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure',$exception->getMessage());
        }
    }

}
