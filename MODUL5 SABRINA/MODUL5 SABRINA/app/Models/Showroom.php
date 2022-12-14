<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    
    protected $table = "showrooms";

    protected $fillable =[
        'user_id','name','owner', 'brand', 'purchase_date', 'description','created_at' ,'image', 'status'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    
    protected $table = "showrooms";

    protected $fillable =[
        'user_id','name','owner', 'brand', 'purchase_date', 'description','created_at' ,'image', 'status'
    ];


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

>>>>>>> 0f0f2b61f7d4fcca83f1e60c571d8820c48ae9e1
}