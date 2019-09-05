<?php

use Illuminate\Database\Seeder;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'transactionId' => 1,
                'date' => 'Selasa 13 Agustus 2019 ',
                'day' => 'Selasa',
                'month' => 'Agustus',
                'year' => '2019',
                'countTotalSales' => 1,
                'time' => '14.12',
                'datetime' => '14.12',
                'discPercent' => 10,
                'discPotongan' => 10,
                'total' => 120000,
                'totalAfterDisc' => 108000,
                'customerPaid' => 110000,
                'remainingPayment' => 108000,
                'haveSyncronized' => 1
            ]
        ]);
    }
}
