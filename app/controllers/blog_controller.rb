class BlogController < ApplicationController
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
    @posts = Blog.find :all, :conditions => ["status = 'published'"], :order => "published_at desc"
  end

  def show
    begin
      @post = Blog.find_by_permalink(params[:permalink])
      @previous_post = Blog.find :first, :conditions => ["published_at < ?",@post.published_at], :order => "published_at desc", :limit => 5
      @next_post = Blog.find :first, :conditions => ["published_at > ?",@post.published_at], :order => "published_at asc"
    rescue
      redirect_to blogs_path
    end
  end

  def new
    @post ||= Blog.new
  end

  def create

    @post = Blog.create(params[:post])
    @post.published_at = DateTime.now
    @post.status = "draft"
    if @post.save
      logger.info("post has been saved")
    else
      logger.info("ERROR POST HAS NOT BEEN SAVED")
    end

    redirect_to blogs_path
  end


end
