<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property int $id
 * @property string $titulo
 * @property string $texto
 * 
 * @property Collection|PedidoIten[] $pedido_itens
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'status';
	public $timestamps = false;

	protected $fillable = [
		'titulo',
		'texto'
	];

	public function pedido_itens()
	{
		return $this->hasMany(PedidoIten::class);
	}
}
