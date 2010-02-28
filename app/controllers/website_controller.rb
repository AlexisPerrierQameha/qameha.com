class WebsiteController < ApplicationController

  def index
    @display_promo = true
  end
  
  def team
    @display_promo = true
  end

  def contact
    if params[:message]
      @message = params[:message]
      QamehaMailer.deliver_contact(@message)
      render :action => "contact"

    end
    @display_promo = true
  end
  
  def jobs
    @display_promo = true
  end
  
  def recruiting
    @display_promo = true
  end
  
  def evaluation
    @display_promo = true
  end
  
  def mobility
    @display_promo = true
  end
  
  def enquete
    @display_promo = true
  end

  def recruitment_agencies
    @display_promo = true
  end
  
end
