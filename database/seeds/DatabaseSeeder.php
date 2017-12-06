<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "〇芝液晶テレビ",20000,"LCDTV"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "〇芝冷蔵庫",20000,"refrigerator"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "日〇冷蔵庫",12000,"refrigerator"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "日〇エアコン",12000,"air_conditioner"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "富〇通エアコン",32000,"air_conditioner"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "富〇通掃除機",32000,"vacuum_cleaner"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "パ〇ソニック掃除機",2000,"vacuum_cleaner"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "パ〇ソニック扇風機",2000,"fan"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "A〇USパソコン",200,"computer"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "日〇扇風機",200,"fan"
        ]);

        DB::insert("insert into items (name,price,category) value(?,?,?)",[
          "日〇液晶テレビ",200,"LCDTV"
        ]);
    }
}
