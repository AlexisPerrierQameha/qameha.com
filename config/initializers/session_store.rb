# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_qameha.com_session',
  :secret      => '3751bd18ee93252422765c9b0981622f08759867846a5eb520ba27235e34153970b1fcc34f8f08ab513dd144e70065120913a7ca524baae96dc98f9073ad86f8'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
