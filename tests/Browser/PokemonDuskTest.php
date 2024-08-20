<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Dusk;
use Tests\DuskTestCase;

class PokemonDuskTest extends DuskTestCase
{
    public function testCreationPokemon()
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

    public function testSearch()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/')
                ->type('#search', 'dusk')
                ->press('#SubmitSearch')
                ->press('#card9')
                ->assertSee('testDusk');
        });
    }

    public function testCreationType()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/admin/types')
                ->press('#Create')
                ->type('name', 'testDuskType')
                ->type('colour', 'FFFFFF')
                ->press('#SubmitCreate')
                ->assertSee('testDuskType');
        });
    }
    
    public function testCreationMove()
    {
        $userAdmin = User::find(12);

        $this->browse(function (Browser $browser) use ($userAdmin) {
            $browser->visit('/admin/moves')
                ->press('#Create')
                ->select('type','7')
                ->type('name', 'testDuskMove')
                ->type('move_descr', 'testDuskMove description')
                ->type('damage',1)
                ->press('#SubmitCreate')
                ->assertSee('testDuskMove');
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
                ->select('move3','8')
                ->press('#SubmitEdit')
                ->assertSee('testDuskEdited');
        });
    }
}