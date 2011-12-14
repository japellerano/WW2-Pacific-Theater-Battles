default_run_options[:pty] = true

set :user, 'p10r8267'
set :domain, '66.84.0.145'
set :application, 'class.japellerano.com'
set :current_dir, '/class'
ssh_options[:keys] = %w(/Users/james/.ssh/id_dsa)


set :repository, 'git@github.com:japellerano/WW2-Pacific-Theater-Battles.git'
set :deploy_to, '~/subdomains/'
set :scm, 'git'
set :branch, 'master'
set :scm_verbose, true
set :git_shallow_clone, 1

role :web, "#{application}"
role :app, "#{application}"
role :db, "#{application}"

