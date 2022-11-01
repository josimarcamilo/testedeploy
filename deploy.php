<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/josimarcamilo/testedeploy.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ec2-52-15-237-95.us-east-2.compute.amazonaws.com')
    ->set('remote_user', 'ec2-user')
    ->set('deploy_path', '/home/ec2-user/app');

// Hooks

after('deploy:failed', 'deploy:unlock');
