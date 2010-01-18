class AddPermalinkToArticle < ActiveRecord::Migration
  def self.up
    add_column :blogs, :permalink, :string
  end

  def self.down
    remove_column :blogs, :permalink
  end
end
