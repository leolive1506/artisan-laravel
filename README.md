# Ver o que um comando faz
```sh
php artisan help route:list
```

# Criar comando pra executar automaticamente
- Criar comando artisan p criar outro cmoando artisan
```sh
art make:command SendDailyReportEmail
```

```php
// identificação e forma que o comando é chamado
protected $signature = 'command:name';

// o qeu vai aparencer quando rodar artisan help command:name
protected $description = 'Command description';

// o qeu comando vai fazer
public function handle() {}
```

- Registrar comando
    - App/Console/Kernel.php
        - Colocar no schedule
        - Dps
        ```sh
        php artisan schedule:run
        ```
# Configurar host
```sh
vim /etc/crontab
# dentro arquivo
*  *    * * *   root    cd /home/usuario/www/cursos/yt/art-commands && php artisan schedule:run >> /dev/null 2>&1
service cron start && service cron status
```
