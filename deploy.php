<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/josimarcamilo/testedeploy.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ec2-3-131-151-107.us-east-2.compute.amazonaws.com')
    ->set('remote_user', 'ubuntu')
    ->set('deploy_path', '/var/www/html');

// Hooks

after('deploy:failed', 'deploy:unlock');
