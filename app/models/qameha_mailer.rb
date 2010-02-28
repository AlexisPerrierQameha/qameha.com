class QamehaMailer < ActionMailer::Base
  #NOT_TESTED
  # this mailer concerns all the emails sent to the admin when there is a problem with the app.
  #TODO should be doubled with sms alerts

  def contact(message)
    @recipients  = "contact@qameha.com"
    @from        = "admin@qameha.com"
    @subject     = "[Qameha CONTACT] " + message["subject"]
    @sent_on     = Time.now
    @body[:text]  = message["body"]
  end


end
