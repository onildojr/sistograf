<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $database = [
            'clientes' => [
                [
                    'nome' => 'JP Artes'
                ],
                [
                    'nome' => 'Grafica Mega Digital'
                ],
                [
                    'nome' => 'Ideias Impressas'
                ]
            ],
            'status' => [
                [
                    'titulo' => 'pagamento',
                    'texto' => 'Pagamento'
                ],
                [
                    'titulo' => 'pagamento',
                    'texto' => 'Pagamento'
                ],
                [
                    'titulo' => 'criacao_arte',
                    'texto' => 'Criação da Arte'
                ],
                [
                    'titulo' => 'arquivos_corretos',
                    'texto' => 'Verificador de arquivos'
                ],
                [
                    'titulo' => 'pre_impressao',
                    'texto' => 'Pré-impressão'
                ],
                [
                    'titulo' => 'producao',
                    'texto' => 'Produção'
                ],
                [
                    'titulo' => 'expedicao',
                    'texto' => 'Expedição'
                ],
                [
                    'titulo' => 'transporte',
                    'texto' => 'Transporte'
                ],
                [
                    'titulo' => 'concluido',
                    'texto' => 'Concluído'
                ],
                [
                    'titulo' => 'cancelado',
                    'texto' => 'Cancelado'
                ],
                [
                    'titulo' => 'retirada',
                    'texto' => 'Disponível para retirada'
                ],
                [
                    'titulo' => 'reproducao',
                    'texto' => 'Reprodução'
                ],
                [
                    'titulo' => 'saiu_entrega',
                    'texto' => 'Saiu para Entrega'
                ]
            ],
            'produtos' => [
                [
                    'nome' => 'Banner 380g Brilho'
                ],
                [
                    'nome' => 'Adesivo Fosco M²'
                ],
                [
                    'nome' => 'Lona Sanet  Com Ilhós '
                ],
                [
                    'nome' => 'Cartão 250g | 4/4 | UV 1/0'
                ],
                [
                    'nome' => 'Mini Cartão 300g | 4/0 | UV 1/0'
                ]
            ],
            'pedidos' => [
                [
                    'codigo' => '1Q5OXT3',
                    'cliente_id' => 1
                ],
                [
                    'codigo' => '29GF4ES',
                    'cliente_id' => 2
                ],
                [
                    'codigo' => '3AJOSNG',
                    'cliente_id' => 1
                ],
                [
                    'codigo' => '4VLE0S2',
                    'cliente_id' => 1
                ],
                [
                    'codigo' => '53WPIBE',
                    'cliente_id' => 3
                ],
                [
                    'codigo' => '6103P0T',
                    'cliente_id' => 2
                ],
                [
                    'codigo' => '7HL91F7',
                    'cliente_id' => 2
                ],
                [
                    'codigo' => '8UGJ4KN',
                    'cliente_id' => 1
                ],
                [
                    'codigo' => '9IDM7SY',
                    'cliente_id' => 1
                ],
                [
                    'codigo' => '10440UUQ',
                    'cliente_id' => 2
                ]
            ],
            'pedido_itens' => [
                [
                    'pedido_id' => 1,
                    'produto_id' => 4,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 1,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 1,
                    'produto_id' => 2,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 2,
                    'produto_id' => 3,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 2,
                    'produto_id' => 3,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 3,
                    'produto_id' => 4,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 4,
                    'produto_id' => 2,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 5,
                    'produto_id' => 1,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 6,
                    'produto_id' => 1,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 6,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 6,
                    'produto_id' => 3,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 6,
                    'produto_id' => 2,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 7,
                    'produto_id' => 3,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 7,
                    'produto_id' => 3,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 8,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 9,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 9,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 10,
                    'produto_id' => 5,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 10,
                    'produto_id' => 1,
                    'status_id' => 1
                ],
                [
                    'pedido_id' => 10,
                    'produto_id' => 2,
                    'status_id' => 1
                ]
            ]
                ];

        foreach ($database as $table => $rows) {
            print_r("Seeding {$table} \n");
            foreach ($rows as $row) {
                DB::table($table)->insert(
                    $row
                );
            }
            print_r("Seeded {$table} \n");
        }
    }
}
