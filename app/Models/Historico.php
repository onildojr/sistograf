<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Historico
 * 
 * @property int $id
 * @property int $pedido_id
 * @property string $descricao
 * @property Carbon $data
 * 
 * @property Pedido $pedido
 *
 * @package App\Models
 */
class Historico extends Model
{
	protected $table = 'historico';
	public $timestamps = false;

	protected $casts = [
		'pedido_id' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'pedido_id',
		'descricao',
		'data'
	];

	public function pedido()
	{
		return $this->belongsTo(Pedido::class);
	}
}
