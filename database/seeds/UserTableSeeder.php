<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::create([
    	            "name"         => "FIKO REDHA FEBIANSYAH",
    	            "roles"        => "user",
    	            "kode_asisten" => "RED",
    	            "jadwal_id"    => 6,
    	            "nim"          => "1202164273",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "AHMAD GHIFARI AKBAR",
    	            "roles"        => "user",
    	            "kode_asisten" => "GFR",
    	            "jadwal_id"    => 1,
    	            "nim"          => "1202164312",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "MOHAMAD AZKA JULDA SUPARMAN",
    	            "roles"        => "user",
    	            "kode_asisten" => "AZK",
    	            "jadwal_id"    => 1,
    	            "nim"          => "1202164204",
    	            "password"     => \Hash::make("12345678")
    	]);

        User::create([
                    "name"         => "FADEL ACHMED GANESHA",
                    "roles"        => "user",
                    "kode_asisten" => "GAG",
                    "jadwal_id"    => 1,
                    "nim"          => "1202160202",
                    "password"     => \Hash::make("12345678")
        ]);

    	User::create([
    	            "name"         => "HAIDAR ALVINANDA SULISTYO",
    	            "roles"        => "user",
    	            "kode_asisten" => "HAI",
    	            "jadwal_id"    => 2,
    	            "nim"          => "1202164150",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "FAATHIR MUHAMMAD",
    	            "roles"        => "user",
    	            "kode_asisten" => "FAT",
    	            "jadwal_id"    => 2,
    	            "nim"          => "1202164032",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "ANISA AGUSTINA",
    	            "roles"        => "user",
    	            "kode_asisten" => "ANS",
    	            "jadwal_id"    => 2,
    	            "nim"          => "1202162042",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "ENGLA RAAFI",
    	            "roles"        => "user",
    	            "kode_asisten" => "ERF",
    	            "jadwal_id"    => 3,
    	            "nim"          => "1202164245",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "RETNA TAQIYYAH ADIBA",
    	            "roles"        => "user",
    	            "kode_asisten" => "RTA",
    	            "jadwal_id"    => 3,
    	            "nim"          => "1202160253",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "FIKRI MIFTAH MAULANA",
    	            "roles"        => "user",
    	            "kode_asisten" => "FMM",
    	            "jadwal_id"    => 3,
    	            "nim"          => "1202164213",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "CHAERUNNISA VITHALOKA R",
    	            "roles"        => "user",
    	            "kode_asisten" => "VTH",
    	            "jadwal_id"    => 3,
    	            "nim"          => "1202164224",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "MADE ADIDHARMA TORUTAMA",
    	            "roles"        => "user",
    	            "kode_asisten" => "TOR",
    	            "jadwal_id"    => 4,
    	            "nim"          => "1202160205",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "REVANDIKA PRATAMA S",
    	            "roles"        => "user",
    	            "kode_asisten" => "RVD",
    	            "jadwal_id"    => 4,
    	            "nim"          => "1202162274",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "MOHAMMAD AUFAR",
    	            "roles"        => "user",
    	            "kode_asisten" => "MAF",
    	            "jadwal_id"    => 4,
    	            "nim"          => "1202160372",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "SANG PUTU SANTIKA WIRANATHA",
    	            "roles"        => "user",
    	            "kode_asisten" => "WIR",
    	            "jadwal_id"    => 5,
    	            "nim"          => "1202160185",
    	            "password"     => \Hash::make("12345678")
    	]); 

    	User::create([
    	            "name"         => "AYU FITRIANI",
    	            "roles"        => "user",
    	            "kode_asisten" => "AAR",
    	            "jadwal_id"    => 5,
    	            "nim"          => "1202164072",
    	            "password"     => \Hash::make("12345678")
    	]); 

    	User::create([
    	            "name"         => "ISYE S. ADHIWINAYA",
    	            "roles"        => "user",
    	            "kode_asisten" => "SYE",
    	            "jadwal_id"    => 5,
    	            "nim"          => "1202164136",
    	            "password"     => \Hash::make("12345678")
    	]); 

    	User::create([
    	            "name"         => "SYASYA SAHIRA",
    	            "roles"        => "user",
    	            "kode_asisten" => "SYA",
    	            "jadwal_id"    => 6,
    	            "nim"          => "1202164012",
    	            "password"     => \Hash::make("12345678")
    	]); 

    	User::create([
    	            "name"         => "DEFNY YUTAMA ALFINDA LEWENUSSA",
    	            "roles"        => "user",
    	            "kode_asisten" => "DYL",
    	            "jadwal_id"    => 6,
    	            "nim"          => "1202164157",
    	            "password"     => \Hash::make("12345678")
    	]);

    	User::create([
    	            "name"         => "ACHMAD INDRA FAUZAN",
    	            "roles"        => "user",
    	            "kode_asisten" => "ZLN",
    	            "jadwal_id"    => 6,
    	            "nim"          => "1202160214",
    	            "password"     => \Hash::make("12345678")
    	]);


    	// $user1					 = new User;
    	// $user1->name 	       	 = "FIKO REDHA FEBIANSYAH";
    	// $user1->roles 	      	 = "user";
    	// $user1->kode_asisten	 = "RED";
    	// $user1->jadwal_id		 = 6;
    	// $user1->nim 	       	 = "1202164273";
    	// $user1->password      	 = \Hash::make("12345678");
    	// $user1->save();

    	// $user2					 = new User;
    	// $user2->name 	       	 = "AHMAD GHIFARI AKBAR";
    	// $user2->roles 	      	 = "user";
    	// $user2->kode_asisten	 = "GFR";
    	// $user2->jadwal_id		 = 1;
    	// $user2->nim 	       	 = "1202164312";
    	// $user2->password      	 = \Hash::make("12345678");
    	// $user2->save();

    	// $user3					 = new User;
    	// $user3->name 	       	 = "MOHAMAD AZKA JULDA SUPARMAN";
    	// $user3->roles 	      	 = "user";
    	// $user3->kode_asisten	 = "AZK";
    	// $user3->jadwal_id		 = 1;
    	// $user3->nim 	       	 = "1202164204";
    	// $user3->password      	 = \Hash::make("12345678");
    	// $user3->save();

    }
}
