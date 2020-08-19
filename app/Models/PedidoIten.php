<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoIten
 * 
 * @property int $id
 * @property int $pedido_id
 * @property int $produto_id
 * @property int $status_id
 * 
 * @property Pedido $pedido
 * @property Produto $produto
 * @property Status $status
 *
 * @package App\Models
 */
class PedidoIten extends Model
{
	protected $table = 'pedido_itens';
	public $timestamps = false;

	protected $casts = [
		'pedido_id' => 'int',
		'produto_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'pedido_id',
		'produto_id',
		'status_id'
	];

	public function pedido()
	{
		return $this->belongsTo(Pedido::class);
	}

	public function produto()
	{
		return $this->belongsTo(Produto::class);
	}

	public function status()
	{
		return $this->belongsTo(Status::class);
	}
}
