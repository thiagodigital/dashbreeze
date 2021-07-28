<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\{
    CategoryImport,
    TagImport,
    QuestionImport
};
use Spatie\Permission\Models\{
    Role,
    Permission
};

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Excel::import(new CategoryImport, storage_path('table/categorias.xls'));
        Excel::import(new TagImport, storage_path('table/tags.xlsx'));
        Excel::import(new QuestionImport, storage_path('table/questionamentos.xls'));

        $roles = ['root', 'admin','user', 'client'];
        foreach($roles as $role) {
            Role::create(['name' => $role]);
        }
        $permissions = ['ver modulos', 'gerenciar clientes', 'acompanhar clientes', 'administrar modulos', 'acesso total'];
        $users = [
            ['Thiago Augusto Gonçalves', 'thiagoaugusto31@gmail.com','31987324565','admin'],
            ['Daniel Pereira', '@gmail.com','31988885566','admin'],
            ['José Ricardo Esteves', 'jrer@uol.com.br','31988997766','admin'],
            ['Jose Maria da Silva', 'js@sccap.test','3199998876','user'],
            ['Maria José da Silva', 'mj@sccap.test','31998765432','client'],
        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        // Role::create(['guard_name' => 'admin', 'name' => 'manager']);
        foreach($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'phone' => $user[2],
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }
        return [
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => Hash::make('password'),
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
