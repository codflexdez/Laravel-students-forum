<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Etudiant extends Model
{
    use HasFactory;





    protected $fillable = [
        'nom',
        'address',
        'email',
        'phone',
        'dob'=> 'date',
        'ville_id'
        
    ];

    /**
     * Get the ville record associated with the etudiant.
     */
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

   /**
     * Get the formatted date of birth for the etudiant.
     *
     * @return string
     */
    // public function formattedDob()
    // {
    //     return Carbon::parse($this->dob)->format('m/d/Y');
    // }



}




