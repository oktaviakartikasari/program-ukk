<?php
namespace App\Models;

use CodeIgniter\Model;

class DetailpesanModel extends Model
{
    protected $table = 'detail_pesan';
    //uncoment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pesan','id_menu','jumlah'];
}
?>
   