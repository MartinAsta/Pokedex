<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Dusk;
use Tests\DuskTestCase;

class PokemonDuskTest extends DuskTestCase
{
    public function testCreation()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/login')
                ->type('login', $userAdmin->nickname)
                ->type('password', 123)
                ->press('#Login')
                ->press('#Create')
                ->type('name', 'testDusk')
                ->type('hp', 5)
                ->type('weight', 10)
                ->type('height', 15)
                ->select('type1', '1')
                ->select('move1', '1')
                ->press('#SubmitCreate')
                ->assertSee('testDusk');
        });
    }

    public function testEdit()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/admin')
                ->press('#poke9')
                ->type('name', 'testDuskEdited')
                ->select('type2', '6')
                ->select('move2', '3')
                ->press('#SubmitEdit')
                ->assertSee('testDuskEdited');
        });
    }

    public function testSearch()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/')
                ->type('#search', 'dusk')
                ->press('#SubmitSearch')
                ->press('#card9')
                ->assertSee('testDuskEdited');
        });
    }
}