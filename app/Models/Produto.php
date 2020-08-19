<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 * 
 * @property int $id
 * @property string $nome
 * 
 * @property Collection|PedidoIten[] $pedido_itens
 *
 * @package App\Models
 */
class Produto extends Model
{
	protected $table = 'produtos';
	public $timestamps = false;

	protected $fillable = [
		'nome'
	];

	public function pedido_itens()
	{
		return $this->hasMany(PedidoIten::class);
	}
}
