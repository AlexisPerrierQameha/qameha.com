ActionController::Routing::Routes.draw do |map|

  #TO_REFACTOR so fucking ugly !
  map.enquete "enquete-performance-RH", :controller => "website", :action => "enquete"
  map.enquete "enquete-performance-rh", :controller => "website", :action => "enquete"
  map.enquete "enquete", :controller => "website", :action => "enquete"
  map.team "team", :controller => "website", :action => "team"
  map.contact "contact", :controller => "website", :action => "contact"
  map.jobs "jobs", :controller => "website", :action => "jobs"
  map.recruiting "recruiting", :controller => "website", :action => "recruiting"
  map.evaluation "evaluation", :controller => "website", :action => "evaluation"
  map.mobility "mobility", :controller => "website", :action => "mobility"
  map.recruitment_agencies "recruitment-agencies", :controller => "website", :action => "recruitment_agencies"


  map.root :controller => "website"

  map.blogs "blog", :controller => "blog", :action => "index"
  map.blogs "blog/new", :controller => "blog", :action => "new"
  map.connect 'blog/:permalink', :controller => 'blog', :action => 'show'

  map.connect ':controller/:action/:id'
  map.connect ':controller/:action/:id.:format'
end
