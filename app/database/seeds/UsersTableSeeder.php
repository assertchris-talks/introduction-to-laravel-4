<?php

class UsersTableSeeder extends DatabaseSeeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table("users")->truncate();

    DB::table("users")->insert([
      [
        "username"   => "chrispitt",
        "password"   => Hash::make("password"),
        "email"      => "cgpitt@gmail.com",
        "created_at" => time(),
        "updated_at" => time()
      ]
    ]);
  }

}
