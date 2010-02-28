# Filters added to this controller apply to all controllers in the application.
# Likewise, all the methods added will be available for all controllers.

class ApplicationController < ActionController::Base
  helper :all # include all helpers, all the time
  protect_from_forgery # See ActionController::RequestForgeryProtection for details

  before_filter :reset_session
  before_filter :set_user_language
  before_filter :right_site

  def reset_session

    if params[:reset_session]
      session[:lang] = nil
      session[:forced_lang] = nil
    end
  end

  def set_user_language
    if params[:lang]
      session[:lang] =  params[:lang]
      session[:forced_lang] = params[:lang]
    end
    session[:lang] ||=  client_browser_language
    @select_langages = select_langages
  end

  def right_site
    logger.info(" client_browser_language #{client_browser_language}")
    logger.info(" request.subdomains. #{request.subdomains.inspect}")
    logger.info("request.env['HTTP_ACCEPT_LANGUAGE'] #{request.env['HTTP_ACCEPT_LANGUAGE'].inspect}")
    logger.info("session[:forced_lang]nil? #{session[:forced_lang].nil?}")

    if session[:forced_lang].nil?
      if client_browser_language == "fr" and !request.subdomains.include?("fr")
        logger.info "redirecting to fr.qameha.com"
        redirect_to "http://fr.qameha.com/?lang=fr"
      end

      if client_browser_language == "en" and request.subdomains.include?("fr")
        logger.info "redirecting to qameha.com"
        redirect_to "http://qameha.com/?lang=en"
      end
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
    langages = {
      "Français" => "fr",
      "English" =>"en"
    }
    sl = ""
    langages.each do |l,v|
      if (session[:lang] == v)
        sl << "<option selected value = '" + v + "'>" + l + "</option>"
      else
        sl << "<option value = '" + v + "'>" + l + "</option>"
      end
    end
    sl
  end

end



