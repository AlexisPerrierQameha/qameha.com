class Blog < ActiveRecord::Base
  validates_presence_of :title, :text, :published_at, :excerpt
  validates_inclusion_of :status, :in => ["draft", "published"]

  has_permalink :title

  def to_param
    permalink
  end       
end
