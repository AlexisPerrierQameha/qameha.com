ActionController::Routing::Routes.draw do |map|

  #TO_REFACTOR so fucking ugly !
  map.team "team", :controller => "website", :action => "team"
  map.contact "contact", :controller => "website", :action => "contact"
  map.jobs "jobs", :controller => "website", :action => "jobs"
  map.recruiting "recruiting", :controller => "website", :action => "recruiting"
  map.evaluation "evaluation", :controller => "website", :action => "evaluation"
  map.mobility "mobility", :controller => "website", :action => "mobility"
  map.recruitment_agencies "recruitment-agencies", :controller => "website", :action => "recruitment_agencies"


  map.root :controller => "website"
#  map.resources :blogs

  map.blogs "blogs", :controller => "blogs", :action => "index"
  map.blogs "blogs/new", :controller => "blogs", :action => "new"
  map.connect 'blogs/:permalink', :controller => 'blogs', :action => 'show'

  map.connect ':controller/:action/:id'
  map.connect ':controller/:action/:id.:format'
end
