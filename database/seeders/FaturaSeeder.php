<?php

namespace Database\Seeders;

use App\Models\Cadastro;
use App\Models\Fatura;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            Fatura::create([
                'cadastro' => 'XYZKVT',
                'assinatura'=> 6,
                'descricao' => 'netflix',
                'vencimento' => Carbon::now()->addDays(10),
                'valor' => 22,
                'status' => 'pendente',
            ]);

            dd('Os cadastros foram inseridos com sucesso!');

        } catch (\Exception $e) {

            dd('Ocorreu um erro ao realizar a inserção dos cadastros '. $e->getMessage());
        }
    }
}
