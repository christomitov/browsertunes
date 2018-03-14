@servers(['production' => '172.104.29.211'])

@task('deploy', ['on' => 'web'])
    cd /home/christo/
    git pull origin {{ $branch }}
    php artisan migrate
@endtask