after "deploy:symlink" , :copy_database_yml
after "deploy", "deploy:cleanup"

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
   task :restart, :roles => :app, :except => { :no_release => true } do
     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
   end
 end

# Avoid keeping the database.yml configuration in git.
task :copy_database_yml, :roles => :app do
  run "cp /home/spock/qameha.com/database.yml #{release_path}/config/database.yml"
end


set :server_hostname, 'qameha.com'
set :location, "204.232.206.121"
set :rails_env, "production"
set :deploy_to, "/home/spock/qameha.com/"
set :port, 4800

role :app, location
role :web, location
role :db,  location, :primary => true

