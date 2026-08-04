<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_landing_page_is_available(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('HIPPI DPC Bantul')
            ->assertSee('Bersama Memantapkan Daya Saing')
            ->assertSee('HIPPI Local Mart')
            ->assertSee('Arianto, A. Md., C.DMP');
    }

    public function test_legacy_padukuhan_routes_are_not_published(): void
    {
        $this->get('/profil')->assertNotFound();
        $this->get('/pengaduan')->assertNotFound();
    }
}
