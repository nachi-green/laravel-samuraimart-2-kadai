<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Products;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'IoTテクノロジーの探究',
                'description' => 'IoT（Internet of Things）技術の基礎と応用に関する総合的な解説。',
                'price' => 4300,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'データベース設計の極意',
                'description' => '効率的なデータベースの設計と管理方法に焦点を当てる。',
                'price' => 2400, 
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'モバイルアプリ開発の秘訣', 
                'description' => 'モバイルアプリ開発に必要なスキルとツールについて詳述。',
                'price' => 3700,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'ビッグデータ解析ガイド',
                'description' => 'ビッグデータの処理と分析手法についての包括的なガイド。', 
                'price' => 3200, 
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'ネットワークの基礎',
                'description' => 'コンピュータネットワーキングの基本的な概念とプロトコルを解説。', 
                'price' => 2900,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'クラウドコンピューティング入門',
                'description' => 'クラウドサービスの基本原則と利用方法について学ぶ。', 
                'price' => 2600,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'web開発の教科書',
                'description' => 'Webサイト構築の基礎から応用まで、実践的な技術を解説。',
                'price' => 3800,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'セキュリティ実践ハンドブック',
                'description' =>  'コンピュータセキュリティの基本から実践的な技術までを網羅。', 
                'price' => 4000, 
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'AI技術の今と未来',
                'description' => '人工知能技術の現状と将来の展望について詳しく紹介。', 
                'price' => 3500, 
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Pythonプログラミング入門',
                'description' => '初心者向けにPythonの基礎から応用までをわかりやすく解説。',
                'price' => 2200,
                'category_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}