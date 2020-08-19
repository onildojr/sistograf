<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nome
 * 
 * @property Collection|Pedido[] $pedidos
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $timestamps = false;

	protected $fillable = [
		'nome'
	];

	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
}
