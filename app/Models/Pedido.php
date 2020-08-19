<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 * 
 * @property int $id
 * @property string $codigo
 * @property int $cliente_id
 * 
 * @property Cliente $cliente
 * @property Collection|Historico[] $historicos
 * @property Collection|PedidoIten[] $pedido_itens
 *
 * @package App\Models
 */
class Pedido extends Model
{
	protected $table = 'pedidos';
	public $timestamps = false;

	protected $casts = [
		'cliente_id' => 'int'
	];

	protected $fillable = [
		'codigo',
		'cliente_id'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function historicos()
	{
		return $this->hasMany(Historico::class);
	}

	public function pedido_itens()
	{
		return $this->hasMany(PedidoIten::class);
	}
}
