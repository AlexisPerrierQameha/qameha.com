
# If you are using Passenger mod_rails uncomment this:
# if you're still using the script/reapear helper you will need
# these http://github.com/rails/irs_process_scripts


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
#   task :start {}
#   task :stop {}
   task :restart, :roles => :app, :except => { :no_release => true } do
     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
   end
 end

#namespace :deploy do
#  desc "Restarting mod_rails with restart.txt"
#  task :restart, :roles => :app, :except => { :no_release => true } do
#    run "touch #{current_path}/tmp/restart.txt"
#  end
#end

set :server_hostname, 'qameha.com'
set :location, "204.232.206.121"
set :rails_env, "production"
set :deploy_to, "/home/spock/qameha.com/"
set :port, 4800

role :app, location
role :web, location
role :db,  location, :primary => true

