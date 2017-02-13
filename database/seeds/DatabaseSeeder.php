<?php

use Illuminate\Database\Seeder;
use App\Models\buyer as Buyer;
use App\Models\seller as Seller;
use App\Models\department as Department;

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
    	Eloquent::unguard();
    	$this->call('MyDbSeeder');
    	$this->command->info('DB is filled');
    }
}

class MyDbSeeder extends Seeder{
	public function run(){
		DB::table('department')->delete();
		DB::table('sellers')->delete();
		DB::table('buyers')->delete();
		
		$dept1=Department::create([
			'name'=>'Food',
			]);
		
		$dept2=new Department;
		$dept2->name='Sport';
		$dept2->save();
		$dept3=Department::create([
			'name'=>'Old',
			]);
		//Department::firstOrCreate(['name'=>'Toys']);


		$dept4=Department::firstOrNew(['name'=>'Drinks']);

		$sell1=Seller::create([
			'name'=>'John Smith',
			'department_id'=>$dept1->id
			]);
		$sell2=Seller::create([
			'name'=>'Mark Twen',
			'department_id'=>$dept2->id
			]);
		$sell3=Seller::create([
			'name'=>'Pushkin',
			'department_id'=>$dept3->id
			]);
		$sell4=Seller::create([
			'name'=>'Dostoevskiy',
			'department_id'=>$dept1->id
			]);

		$buy1=Buyer::create(['name'=>'Bob']);
		$buy2=Buyer::create(['name'=>'Ivan']);
		$buy3=Buyer::create(['name'=>'Smit']);
		$buy4=Buyer::create(['name'=>'Jobs']);

		$sell1->buyer()->attach($buy1->id);
		$sell1->buyer()->attach($buy2->id);
		$sell1->buyer()->attach($buy3->id);
		
		$sell2->buyer()->attach($buy4->id);

		$sell3->buyer()->attach($buy1->id);
		$sell3->buyer()->attach($buy3->id);
	}
}