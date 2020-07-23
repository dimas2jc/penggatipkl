<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jabatan
 * 
 * @property int $id_jabatan
 * @property string $nama
 * 
 * @property Collection|Pegawai[] $pegawais
 *
 * @package App\Models
 */
class Jabatan extends Model
{
	protected $table = 'jabatan';
	protected $primaryKey = 'id_jabatan';
	public $timestamps = false;

	protected $fillable = [
		'nama'
	];

	public function pegawais()
	{
		return $this->hasMany(Pegawai::class, 'id_jabatan');
	}
}
