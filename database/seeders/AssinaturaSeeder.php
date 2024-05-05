<?php

namespace Database\Seeders;

use App\Models\Assinatura;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssinaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cadastros = [
            'XYZKVT',
            'PUIOST',
            'TYVMSD',
            'HHDZXC',
            'QLSDFG',
            'TASDPP',
            'ADMSKK',
            'IOESDS',
            'PPASDM',
            'AYDERF',
        ];

        $statusFatura = [
            'aguardando',
            'aguardando',
            'aguardando',
            'aguardando',
            'aguardando',
            'aguardando',
            'aguardando',
            'aguardando',
            'pendente',
            'pendente',
        ];

        $descricao = [
            'netflix',
            'netflix',
            'youtube',
            'amazon',
            'disney',
            'disney',
            'disney',
            'youtube',
            'amazon',
            'youtube',
        ];

        $valor = [
            '22',
            '55',
            '14',
            '96',
            '14',
            '93',
            '24',
            '95',
            '79',
            '94',
        ];

        try {
            for ($i = 0; $i < 10; $i++) {
                Assinatura::create([
                    'cadastro' => $cadastros[$i],
                    'descricao' => $descricao[$i],
                    'vencimento' => Carbon::now()->addDays($i+5),
                    'valor' => $valor[$i],
                    'status_fatura' => $statusFatura[$i],
                ]);
            }

            dd('Os cadastros foram inseridos com sucesso!');

        } catch (\Exception $e) {

            dd('Ocorreu um erro ao realizar a inserção dos cadastros '. $e->getMessage());
        }
    }
}
