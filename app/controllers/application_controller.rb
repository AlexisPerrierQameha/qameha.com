# Filters added to this controller apply to all controllers in the application.
# Likewise, all the methods added will be available for all controllers.

class ApplicationController < ActionController::Base
  helper :all # include all helpers, all the time
  protect_from_forgery # See ActionController::RequestForgeryProtection for details

#  before_filter :set_user_language
  
  before_filter :set_locale 
  def set_locale
    ## if params[:locale] is nil then I18n.default_locale will be used
    I18n.locale = params[:lang]

   

  end


  def set_user_language
    session[:lang] =  params[:lang]              if params[:lang]

    session[:lang] =  client_browser_language    if session[:lang].blank?

    I18n.locale = session[:lang]
    @select_langages = select_langages

    unless session[:lang_has_changed].nil?
      session[:lang_has_changed] = nil
    end
  end

  private
  def client_browser_language

    unless request.env['HTTP_ACCEPT_LANGUAGE'].blank?
      user_agent = request.env['HTTP_ACCEPT_LANGUAGE'].downcase
      if user_agent =~ /fr/i
        "fr"
      else
        "en"
      end
    else
      "en"
    end
  end

  def select_langages
    sl = ""
    Constants::SPOKEN_LANGAGES.each do |l,v|
      if (session[:lang] == v)
        sl << "<option selected value = '" + v + "'>" + l + "</option>"
      else
        sl << "<option value = '" + v + "'>" + l + "</option>"
      end
    end
    sl
  end

end
