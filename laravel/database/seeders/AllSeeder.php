<?php

class AllSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        // TABLE PROPINSI
        DB::table('propinsi')->insert(array(
            array('propinsi' => 'Banten')
        ));
        
        // TABLE KOTA
        DB::table('kota')->insert(array(
            array('kota' => 'Pandeglang', 'propinsi_id' => 1),
            array('kota' => 'Serang', 'propinsi_id' => 1),
        ));
        
        // TABLE KECAMATAN
        DB::table('kecamatan')->insert(array(
            array('kecamatan' => 'Picung', 'kota_id' => 1),
            array('kecamatan' => 'Munjul', 'kota_id' => 1),
            array('kecamatan' => 'Cikeusal', 'kota_id' => 2),
            array('kecamatan' => 'Curug', 'kota_id' => 2)
        ));
        
        // TABLE DESA
        DB::table('desa')->insert(array(
            array('desa' => 'Cililitan', 'kecamatan_id' => 1),
            array('desa' => 'Kadupandak', 'kecamatan_id' => 1),
            array('desa' => 'Ciodeng', 'kecamatan_id' => 2),
            array('desa' => 'Pasir Tenjo', 'kecamatan_id' => 2),
            array('desa' => 'Dahu', 'kecamatan_id' => 3),
            array('desa' => 'Katulisan', 'kecamatan_id' => 3),
            array('desa' => 'Tinggar', 'kecamatan_id' => 4),
            array('desa' => 'Cipete', 'kecamatan_id' => 4),
        ));
        
    }

}