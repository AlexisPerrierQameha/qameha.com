class WebsiteController < ApplicationController
  def index
    @display_promo = true
  end
  
  def team
  end

  def contact
  end
  
  def jobs
  end
  
  def recruiting
    @display_promo = true
  end
  
  def evaluation
  end
  
  def mobility
  end
  
  def recruitment_agencies
    @display_promo = true
  end
  
end
