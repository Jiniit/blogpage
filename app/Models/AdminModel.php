<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields =  [
        'admin_email',
        'admin_password',
        'otp',
        'otp_generated_at'
    ];
    public function verifyOtp($email, $otp)
    {
        $user = $this->where(['admin_email' => $email, 'otp' => $otp])->first();
        return $user !== null;
    }
    // public function updateOtp($email, $otp)
    // {
    //     $record = $this->where('admin_email', $email)->first();
    
    //     if ($record) {
    //         $record->update(['otp' => $otp]);
    //         return true; // Return a success indicator
    //     }
    
    //     return false; // Handle the case where no record is found
    // }
    
}
