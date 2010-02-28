# on ruby 1.8.7 and rails > 2.2.1 there is no need for http://github.com/openrain/action_mailer_tls

require "smtp_tls" unless RUBY_VERSION == "1.8.7"

config_file = "#{RAILS_ROOT}/config/smtp_gmail.yml"

raise "Sorry, you must have #{config_file}" unless File.exists?(config_file)

config_options = YAML.load_file(config_file)['qameha']
ActionMailer::Base.smtp_settings = {
  :address => "smtp.gmail.com",
  :port => 587,
  :authentication => :plain,
  :enable_starttls_auto => true
}.merge(config_options) # Configuration options override default options

