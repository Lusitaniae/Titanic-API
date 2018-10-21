<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class PassengerTableSeeder extends CsvSeeder {

	public function __construct()
	{
		$this->table = 'passengers';
		$this->filename = base_path().'/database/seeds/titanic.csv';
    $this->offset_rows = 1;
		$this->should_trim = true;
    $this->mapping = [
        0 => 'survived',
        1 => 'pclass',
        2 => 'name',
        3 => 'sex',
        4 => 'age',
        5 => 'siblings_spouses_aboard',
        6 => 'parents_children_aboard',
        7 => 'fare',
    ];
	}

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();
		parent::run();
	}
}
