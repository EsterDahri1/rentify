# Add user
```bash
User::factory()->create()
= App\Models\User {#6394
    name: "Jeff Trantow Sr.",
    email: "mann.raymond@example.org",
    email_verified_at: "2023-11-15 09:06:33",
    #password: "$2y$12$Ym9yCwtuWO03fPh38qGfOupTKE8C9HpD/e1xQ39A3S5UUE6
3rdcN.",
    #remember_token: "ZhYDkZXiex",
    updated_at: "2023-11-15 09:06:33",
    created_at: "2023-11-15 09:06:33",
    id: 1,
  }

> $user = User::first();
= App\Models\User {#6331
    id: 1,
    name: "Jeff Trantow Sr.",
    email: "mann.raymond@example.org",
    email_verified_at: "2023-11-15 09:06:33",
    #password: "$2y$12$Ym9yCwtuWO03fPh38qGfOupTKE8C9HpD/e1xQ39A3S5UUE6
3rdcN.",
    #remember_token: "ZhYDkZXiex",
    created_at: "2023-11-15 09:06:33",
    updated_at: "2023-11-15 09:06:33",
  }

> $user->email = "ester.dahri@example.it"
= "ester.dahri@example.it"

> $user->save();
= true
```

## come vedere se si sono rotte le cose
```bash
php artisan test
```
attenzione perchè cancella tutto il database