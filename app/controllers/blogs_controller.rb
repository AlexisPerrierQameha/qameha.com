class BlogsController < ApplicationController
  layout "website"

  uses_tiny_mce  :options => {
    :theme => 'advanced',
    :theme_advanced_buttons1 => "bold,italic,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,|,code",
    :theme_advanced_buttons2 => "",
    :theme_advanced_buttons3 => "",
    :theme_advanced_toolbar_location => "top",
    :theme_advanced_toolbar_align => "left"
  }

  def index
    @posts = Blog.find :all, :order => "published_at desc"
  end

  def show
  end

  def new
    @post ||= Blog.new
  end

  def create
  end

  def update
  end

  def destroy
  end

end
