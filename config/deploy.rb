#before "deploy:symlink", :ln_folders
#after "deploy:symlink" , :copy_database_yml
#after "deploy:symlink", "deploy:update_crontab"
#after "deploy", "deploy:cleanup"

#require 'capistrano/ext/multistage'

set :application, 'qameha'
set :user, 'spock'
set :git_account, 'darjeelink'
set :scm_passphrase, "galactus88260" #This is your custom users password
default_run_options[:pty] = true
set :repository,  "git@github.com:darjeelink/qameha.com.git"
set :scm, "git"
set :user, "spock"
ssh_options[:forward_agent] = true

set :deploy_via, :remote_cache
set :git_shallow_clone, 1
set :git_enable_submodules, 1
set :use_sudo, false

namespace :deploy do
  desc "Restarting mod_rails with restart.txt"
  task :restart, :roles => :app, :except => { :no_release => true } do
    run "touch #{current_path}/tmp/restart.txt"
  end
end

set :server_hostname, 'qameha.com'
set :location, "204.232.206.121"
set :rails_env, "production"
set :deploy_to, "/home/spock/qameha.com/"
set :port, 4800

role :app, location
role :web, location
role :db,  location, :primary => true
